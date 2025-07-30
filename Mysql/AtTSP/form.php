<?php
$db = new mysqli('localhost', 'root', '', 'data');

// Add Manufacturer
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['add'];
    $contact = $_POST['contact'];
    $db->query("CALL add_manufacture('$name','$address','$contact')");
}

// Add Product
if (isset($_POST['insert'])) {
    $pname = $_POST['pname'];
    $price = $_POST['pprice'];
    $manu = $_POST['mid'];
    $db->query("CALL add_product('$pname', $price, $manu)");
}

// Delete Manufacturer
if (isset($_POST['delcategory'])) {
    $mid = $_POST['mid'];
    $db->query("DELETE FROM manufacturer WHERE id = $mid");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms Example</title>
  
  <!-- Bootstrap 4.1.1 CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <style>
    body {
      background-color: #FFF2F2;
      font-family: 'Segoe UI', sans-serif;
    }

    .get-in-touch-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      padding: 50px 20px;
    }

    .get-in-touch {
      width: 100%;
      max-width: 380px;
      position: relative;
      background: #fff;
      border: 1px solid #eaeaea;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
      border-radius: 10px;
    }

    .get-in-touch .title {
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 1.5em;
      margin-bottom: 30px;
      background: linear-gradient(to right, #7886C7, #2D336B);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .contact-form .form-field {
      position: relative;
      margin-bottom: 28px;
    }

    .contact-form .input-text {
      width: 100%;
      border: none;
      border-bottom: 2px solid #A9B5DF;
      font-size: 16px;
      padding: 8px 0;
      background: transparent;
      transition: border-color 0.3s ease;
    }

    .contact-form .input-text:focus {
      outline: none;
      border-color: #7886C7;
    }

    .contact-form .input-text:focus + .label,
    .contact-form .input-text.not-empty + .label {
      transform: translateY(-20px);
      font-size: 14px;
      color: #2D336B;
      font-weight: bold;
    }

    .contact-form .label {
      position: absolute;
      left: 0;
      bottom: 8px;
      font-size: 16px;
      color: #A9B5DF;
      transition: all 0.2s ease-in-out;
      pointer-events: none;
    }

    .contact-form .submit-btn {
      width: 100%;
      background: linear-gradient(to right, #7886C7, #2D336B);
      border: none;
      color: white;
      padding: 10px;
      font-size: 16px;
      text-transform: uppercase;
      cursor: pointer;
      border-radius: 4px;
      transition: background 0.3s ease;
    }

    .contact-form .submit-btn:hover {
      background: linear-gradient(to right, #2D336B, #7886C7);
    }
  </style>
</head>
<body>
  <div class="get-in-touch-container">
    <!-- Form 1: Manufacturer Info -->
    <section class="get-in-touch">
      <h1 class="title">Manufacturer Info</h1>
      <form class="contact-form" method="post">
        <div class="form-field">
          <input id="name1" name="name" class="input-text js-input" type="text" required>
          <label class="label" for="name1">Name</label>
        </div>
        <div class="form-field">
          <input id="address1" class="input-text js-input" type="text" required>
          <label class="label" name="add" for="address1">Address</label>
        </div>
        <div class="form-field">
          <input id="contact1" name="contact" class="input-text js-input" type="text" required>
          <label class="label" for="contact1">Contact No.</label>
        </div>
        <div class="form-field">
          <input class="submit-btn" type="submit" value="Submit" name="submit">
        </div>
      </form>
    </section>

    <!-- Form 2: Product Insert -->
    <section class="get-in-touch">
      <h1 class="title">Product Insert</h1>
      <form class="contact-form" method="post">
        <div class="form-field">
          <input id="product_name" name="pname" class="input-text js-input" type="text" required>
          <label class="label" for="product_name">Name</label>
        </div>
        <div class="form-field">
          <input id="product_price" name="pprice" class="input-text js-input" type="text" required>
          <label class="label" for="product_price">Price</label>
        </div>
        <div class="form-field">
          <label class="label" for="manufacturer_select">Manufacturer ID</label>
          <select id="manufacturer_select" class="input-text js-input" name="mid" required>
           <?php 
                            $manufac = $db->query("SELECT * FROM manufacturer");
                            while(list($_mid,$_name) = $manufac->fetch_row()){
                                echo "<option value='$_mid'>$_name</option>"; 
                            }
                        ?>
          </select>
        </div>
        <div class="form-field">
          <input class="submit-btn" type="submit" value="Insert" name="insert">
        </div>
      </form>
    </section>

    <!-- Form 3: Delete Categories -->
    <section class="get-in-touch">
      <h1 class="title">Delete Categories</h1>
      <form method="post" class="contact-form">
        <div class="form-field">
          <label for="category_select" class="label">Category</label>
          <select name="mid"  id="category_select" class="input-text js-input" required>
             <?php 
                            $manufac = $db->query("SELECT * FROM manufacturer");
                            while(list($_mid,$_name) = $manufac->fetch_row()){
                                echo "<option value='$_mid'>$_name</option>";
                            }
                        ?>
          </select>
        </div>
        <div class="form-field">
          <input type="submit" name="delcategory" value="Delete Category" class="submit-btn" value="Delete">
        </div>
      </form>
    </section>
  </div>

<!--  -->

<!-- Product Table -->
<?php 
$sql ="SELECT * FROM view_product";
$result =mysqli_query($db,$sql); 

if ($result->num_rows > 0) {
    echo "<table border='1' width='80%' align='center'>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Manufacturer</th>
            </tr>";
    while(list($pid, $pname, $price, $name) = $result->fetch_row()){
        echo "<tr>
                <td align='center'>$pid</td>
                <td>$pname</td>
                <td>$price</td>
                <td>$name</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No products found.</p>";
}
?>

</body>
</html>









  <!-- Bootstrap JS (Optional, for interactive components like dropdowns, modals) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb7dYxHUiVf9JSK7w4r14hXl8cA0jfuWr6T16Tw3BOP0XW5t7" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0SPe6g7h4gV6HLK5RpS5yA4lQ9s/K9QX4xd1z1L32uR/jw35" crossorigin="anonymous"></script>
</body>
</html>
