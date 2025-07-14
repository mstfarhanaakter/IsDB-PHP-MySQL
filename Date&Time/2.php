<h4>Determining the number of days in the current month</h4>

<?php 
    printf("There are %d days in %s." , date ("t"), date("F"));
?>

<h4>Determining the nubmer of days in any given month</h4>

<?php 
    $lastday = mktime(0,0,0,2,9,2020);
    printf("There are %d days in February 2022.", date("t", $lastday));
?>

<h4>Calculating the date x days from the present date</h4>
<?php 
    $futuredate = strtotime("+26 days");
    echo date("F d, Y", $futuredate)

?>

<h4>Calculating the date x days from the past date</h4>
<?php 
    $pastdate = strtotime("-26 days");
    echo date("F d, Y", $pastdate)

?>

<h4>Calculating the date x days from future date </h4>
<?php 
    $Futuredate = strtotime("10 weeks 2 days");
    echo date("F d, Y", $Futuredate)

?>