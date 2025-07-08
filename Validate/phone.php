<!DOCTYPE html>
<html>

<head>
    <title>Phone Number Validation</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = $_POST['phone'];

        // Remove all non-digit characters to count digits
        $digits = preg_replace('/\D/', '', $phone);

        // Validate phone number pattern and digit count
        if (preg_match('/^\+?[0-9\s\-\(\)\.]{7,}$/', $phone) && strlen($digits) >= 7) {
            echo "<p style='color:green;'>Valid phone number: " . htmlspecialchars($phone) . "</p>";
        } else {
            echo "<p style='color:red;'>Invalid phone number!</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required pattern="^\+?[0-9\s\-\(\)\.]{7,}$"
            title="Phone number must be at least 7 digits and can include +, digits, spaces, -, ., and parentheses">
        <br><br>
        <input type="submit" value="Validate">
    </form>

</body>

</html>