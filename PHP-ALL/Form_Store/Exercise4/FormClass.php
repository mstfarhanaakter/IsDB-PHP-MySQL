<?php
class FormData
{
    public $id, $name, $batch;
    private static $file_name = "DataStorage.txt";

    public function __construct($id, $name, $batch)
    {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    public function output() // child class of output ()
    {
        // Tab-delimited format
        return $this->id . "\t" . $this->name . "\t" . $this->batch . PHP_EOL;
    }

    public function dataStore()  // parent class
    {
        file_put_contents(self::$file_name, $this->output(), FILE_APPEND);
    }

    public static function display()
    {
        if (!file_exists(self::$file_name)) {
            echo "<p style='text-align:center;'>No data found.</p>";
            return;
        }

        $records = file(self::$file_name);
        echo "<h2 style='text-align:center;'>User Data Table</h2>";
        echo "<table style='width:50%; margin:auto;text-align:center;border-collapse:collapse;border:1px solid black;'>";
        echo "<tr>
                <th style='border:1px solid black;'>ID</th>
                <th style='border:1px solid black;'>Name</th>
                <th style='border:1px solid black;'>Batch</th>

              </tr>";


            foreach ($records as $record) {
            $data = explode("\t", trim($record));
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
