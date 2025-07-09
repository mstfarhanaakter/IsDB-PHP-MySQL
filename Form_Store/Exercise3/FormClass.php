<?php
class FormData
{
    public $first_name, $last_name, $email, $password;
    private static $file_name = "DataStorage.txt";

    public function __construct($fname, $lname, $e, $p)
    {
        $this->first_name = htmlspecialchars(trim($fname));
        $this->last_name = htmlspecialchars(trim($lname));
        $this->email = htmlspecialchars(trim($e));
        // Password is hashed before storing
        $this->password = password_hash($p, PASSWORD_DEFAULT);
    }

    public function output()
    {
        // Use tab-separated values for safety
        return implode("\t", [$this->first_name, $this->last_name, $this->email, $this->password]) . PHP_EOL;
    }

    public function dataStore()
    {
        $fp = fopen(self::$file_name, 'a');
        if ($fp && flock($fp, LOCK_EX)) {
            fwrite($fp, $this->output());
            flock($fp, LOCK_UN);
            fclose($fp);
        }
    }

    public static function display()
    {
        if (!file_exists(self::$file_name)) {
            echo "<p style='text-align:center;'>No data found.</p>";
            return;
        }

        $students = file(self::$file_name);
        echo "<h2 style='text-align:center;'>User Data Table</h2>";
        echo "<table border='1' style='margin:auto;text-align:center;'>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password Hash</th></tr>";

        foreach ($students as $student) {
            $data = explode("\t", trim($student));
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>
