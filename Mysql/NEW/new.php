<?php
include('connect.php');

// Handle Add Manufacturer
if (isset($_POST['submit_manufacturer'])) {
    $m_name = $_POST['m_name'];
    $m_address = $_POST['m_address'];
    $m_contact = $_POST['m_contact'];

    if ($connection->query("CALL insert_manufacturer('$m_name','$m_address','$m_contact')")) {
        $msg_manufacturer = "Manufacturer added successfully.";
    } else {
        $msg_manufacturer = "Error: " . $connection->error;
    }
}

// Handle Add Product
$manufacturer = $connection->query("SELECT * FROM manufacturer");

if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $mid = $_POST['manufacturer_id'];

    if ($connection->query("CALL insert_product('$p_name', '$p_price', '$mid')")) {
        $msg_product = "Product added successfully.";
    } else {
        $msg_product = "Error: " . $connection->error;
    }
}

// Handle Delete Manufacturer
if (isset($_POST['delman'])) {
    $mid = $_POST['delete_manufacturer_id'];
    if ($connection->query("DELETE FROM manufacturer WHERE id = $mid")) {
        $msg_delete = "Manufacturer deleted successfully.";
    } else {
        $msg_delete = "Error: " . $connection->error;
    }
}


// Fetch all products for first table
    $sql_all = "SELECT * FROM product_view";  
    $product_result = $connection->query($sql_all);

// Fetch products with price > 5000 for second table
    $sql_high = "SELECT * FROM product_view_table";  
    $high_price_result = $connection->query($sql_high);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manufacture and Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
    <div class="row g-4">
        <!-- Add Manufacturer -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 text-center">Manufacturer Information</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($msg_manufacturer)): ?>
                        <div class="alert alert-info"><?= htmlspecialchars($msg_manufacturer) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="m_name" class="form-label">Name:</label>
                            <input type="text" id="m_name" name="m_name" class="form-control" placeholder="Enter Manufacturer name" required />
                        </div>
                        <div class="mb-3">
                            <label for="m_address" class="form-label">Address:</label>
                            <input type="text" id="m_address" name="m_address" class="form-control" placeholder="Enter Address" required />
                        </div>
                        <div class="mb-3">
                            <label for="m_contact" class="form-label">Contact:</label>
                            <input type="text" id="m_contact" name="m_contact" class="form-control" placeholder="Enter Contact" required />
                        </div>
                        <button type="submit" name="submit_manufacturer" class="btn btn-success fw-bold">Add Manufacturer</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Add Product -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 text-center">Insert New Product</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($msg_product)): ?>
                        <div class="alert alert-info"><?= htmlspecialchars($msg_product) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="p_name" class="form-label">Product Name:</label>
                            <input type="text" id="p_name" name="p_name" class="form-control" placeholder="Enter product name" required />
                        </div>
                        <div class="mb-3">
                            <label for="p_price" class="form-label">Price:</label>
                            <input type="number" step="0.01" id="p_price" name="p_price" class="form-control" placeholder="Enter price" required />
                        </div>
                        <div class="mb-3">
                            <label for="manufacturer_id" class="form-label">Manufacturer:</label>
                            <select id="manufacturer_id" name="manufacturer_id" class="form-select" required>
                                <option value="">-- Select Manufacturer --</option>
                                <?php while ($row = $manufacturer->fetch_assoc()): ?>
                                    <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['name']) ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-success fw-bold">Add Product</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Manufacturer -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0 text-center">Delete Manufacturer</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($msg_delete)): ?>
                        <div class="alert alert-warning"><?= htmlspecialchars($msg_delete) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="delete_manufacturer_id" class="form-label">Select Manufacturer:</label>
                            <select id="delete_manufacturer_id" name="delete_manufacturer_id" class="form-select" required>
                                <option value="">-- Select Manufacturer --</option>
                                <?php 
                                // Re-run query because manufacturer->fetch_assoc() exhausted earlier
                                $manList = $connection->query("SELECT * FROM manufacturer");
                                while ($row = $manList->fetch_assoc()):
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['name']) ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="submit" name="delman" class="btn btn-danger fw-bold">Delete Manufacturer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->
<!--  -->

<br>
<br>
<br>

<!-- RIGHT SIDE: Two tables side by side using flex -->
        <div class="flex-grow-1" style="min-width: 600px;">
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">

                <!-- Table 1: All products -->
                <div class="table-container" style="flex: 1; min-width: 300px;">
                    <h4 class="text-center mb-4">Product and Manufacture Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-success text-center">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Manufacturer Name</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php if ($product_result->num_rows > 0): ?>
                                    <?php while ($row = $product_result->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['id']) ?></td>
                                            <td><?= htmlspecialchars($row['product_name']) ?></td>
                                            <td><?= htmlspecialchars($row['price']) ?></td>
                                            <td><?= htmlspecialchars($row['name']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-danger">No products found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table 2: Products with price > 5000 -->
                <div class="table-container" style="flex: 1; min-width: 300px;">
                    <h4 class="text-center mb-4">Product List More Than 5000 BDT</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-success text-center">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Manufacturer Name</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php if ($high_price_result->num_rows > 0): ?>
                                    <?php while ($row = $high_price_result->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['id']) ?></td>
                                            <td><?= htmlspecialchars($row['product_name']) ?></td>
                                            <td><?= htmlspecialchars($row['price']) ?></td>
                                            <td><?= htmlspecialchars($row['name']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-danger">No products found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
