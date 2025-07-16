<?php
class FormData
{
    public $first_name, $last_name, $email, $password;

    private static $file_name = "DataStorage.txt";

    public function __construct($fname, $lname, $e, $p)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
        $this->email = $e;
        $this->password = $p;
    }

    public function output()
    {
        return $this->first_name . ", " . $this->last_name . ", " . $this->email . ", " . $this->password . PHP_EOL;
    }

    public function dataStore()
    {
        file_put_contents(self::$file_name, $this->output(), FILE_APPEND);
    }

    // display on browser
    public static function display()
    {
        if (!file_exists(self::$file_name)) {
            echo "<p style='text-align:center;'>No data found.</p>";
            return;
        }

        $students = file(self::$file_name);
        echo "<h2 style='text-align:center;'>User Data Table</h2>";
        echo "<table style='margin:auto;text-align:center;border-collapse:collapse;border:1px solid black;'>";
        echo "<tr>
                    <th style='border:1px solid black;'>First Name</th>
                    <th style='border:1px solid black;'>Last Name</th>
                    <th style='border:1px solid black;'>Email</th>
                    <th style='border:1px solid black;'>Password Hash</th>
                </tr>";

        foreach ($students as $student) {
            $data = explode("\t", trim($student));
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td style='border:1px solid black;'>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }


}
?>