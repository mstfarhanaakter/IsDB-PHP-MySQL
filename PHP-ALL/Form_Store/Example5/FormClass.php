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

    public function output() // child class of dataStore ()
    {
        // Tab-delimited format

        return $this->id . "\t" . $this->name . "\t" . $this->batch . PHP_EOL;

        //PHP_EOL = সার্ভারের জন্য উপযুক্ত "নতুন লাইন" চিহ্ন।
    }

    public function dataStore()  // parent class
    {
        file_put_contents(self::$file_name, $this->output(), FILE_APPEND);
    }

    // display on browser
   
         public static function display(){
	   
	    $students =file(self::$file_name);
      
          //The file() reads a file into an array.
		
		echo "<b>ID | Name | Batch </b><br/>";
		foreach($students as $student){
				   list($id,$name,$batch)=explode("\t",$student);
				   echo "$id | $name | $batch |<br/>";	   
	    }
		
   }   

}
?>