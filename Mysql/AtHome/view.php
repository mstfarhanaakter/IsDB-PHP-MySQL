<?php
require_once "config.php";

// Fetch manufacturer data before HTML
$manufacturer_result = $connect->query("SELECT * FROM manufacturer");

// Insert manufacturer
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["add"];
    $contact = $_POST["contact"];
    $store = $connect->query("CALL call_manufacture('$name', '$address', '$contact')");

    if ($store) {
        echo "Manufacturer inserted successfully.";
    } else {
        echo "Manufacturer insertion failed.";
    }
}

// Insert product
if (isset($_POST["insert"])) {
    $pname = $_POST["pname"];
    $price = $_POST["pprice"];
    $manu_id = $_POST["mid"];

    $insert = $connect->query("CALL call_product('$pname', '$price', '$manu_id')");

    if ($insert) {
        echo "Product inserted successfully.";
    } else {
        echo "Failed to insert product.";
    }
}

// add form 

include "form.php";
?>