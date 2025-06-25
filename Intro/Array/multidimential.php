
    <h1>3. Multidimensional Array</h1>


<?php
    $students = array(
        array("John", 85),
        array("Jane", 90)
);

    echo $students[1][0]; // Output: Jane
    echo "<br>";

    $cars = array(
        array("BMW", 20,30),
        array("Audi", 10,30),
        array("Porche", 70,30.34),
    );
    echo $cars[2][0]; // porche
    echo "<br>";
    echo $cars[1][0]; //Audi
    echo "<br>";
    echo $cars[0][0]; // BMv
    echo "<br>";


    for ($row = 0; $row<10; $row++){
        for( $col = 0; $col<= $row; $col++){
            echo "@";     
    };
    echo "<br>";
};

//  for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     };
//   echo "</ul>";
// };

for ($row = 0; $row <3; $row++) {
    echo "<p><b>Row Number $row </b></p>";
    echo "<ul>";
        for($col = 0; $col < 3; $col++){
           echo "<li>".$cars[$row][$col]."</li>";
           }
            echo "</ul>";
        };

        


?>
