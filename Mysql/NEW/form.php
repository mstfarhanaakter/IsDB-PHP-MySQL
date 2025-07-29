<?php
require_once "config.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["add"];
    $contact = $_POST["contact"];
    $store = $connect->query("call call_manufacture('$name', '$address', '$contact')");

    if ($store) {
        // header("location:view.php");
        echo "data is inserted";
    } else {
        echo "Data not inserted";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .div1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>

<!-- <body>
    <div>
        <h1>Maufacturer Table</h1>
        <form action="#" method="post">
            Name:
            <input type="text" name="name">
            <br><br>
            Address:
            <input type="text" name="add">
            <br><br>
            Contact:
            <input type="text" name="contact">
            <br>
            <br>
            <input type="submit" name="submit">
        </form>
    </div> -->

    <!-- another table for product  -->
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .div1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            border: 1px solid black;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Manufacturer Table</h1>
        <form action="#" method="post">
            Name: <input type="text" name="name"><br><br>
            Address: <input type="text" name="add"><br><br>
            Contact: <input type="text" name="contact"><br><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="div1">
        <h1>Product Table</h1>
        <form action="#" method="post">
            Name: <input type="text" name="pname"><br><br>
            Price: <input type="text" name="pprice"><br><br>
            Manufacturer:
            <select name="mid" required>
                <option value="">Select Manufacturer</option>
                <?php while ($row = $manufacturer_result->fetch_assoc()): ?>
                    <option value="<?= $row['id'] ?>">
                        <?= $row['id'] ?>-<?= $row['name'] ?>
                    </option>
                <?php endwhile; ?>
            </select><br><br>
            <input type="submit" name="insert">
        </form>
    </div>
</body>
</html>
