<?php
// Define the filename for storage
define('DATA_FILE', 'DataStorage.txt');

// Handle form submission
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Sanitize and get inputs
    $fname = trim($_POST['fn'] ?? '');
    $lname = trim($_POST['ln'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass = trim($_POST['pass'] ?? '');

    // Simple validation
    if (!$fname || !$lname || !$email || !$pass) {
        $message = '<p style="color:red;">Please fill in all fields.</p>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = '<p style="color:red;">Invalid email address.</p>';
    } else {
        // Store data in file (comma-separated)
        // Warning: Storing plain text passwords is NOT secure!
        $line = "$fname,$lname,$email,$pass" . PHP_EOL;
        file_put_contents(DATA_FILE, $line, FILE_APPEND);
        $message = '<p style="color:green;">Data stored successfully!</p>';
    }
}

// Function to read data from file and return as array
function getStoredData() {
    if (!file_exists(DATA_FILE)) {
        return [];
    }
    $lines = file(DATA_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = [];
    foreach ($lines as $line) {
        $fields = explode(',', $line);
        if (count($fields) >= 4) {
            $data[] = $fields;
        }
    }
    return $data;
}

$storedData = getStoredData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Storage & Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin-bottom: 30px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type=text], input[type=email], input[type=password] {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #2c7;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
        }
        button:hover {
            background-color: #1a5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            max-width: 700px;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h1>User Registration Form</h1>

<?php echo $message; ?>

<form method="post" action="">
    <label for="fn">First Name:</label>
    <input type="text" id="fn" name="fn" required />

    <label for="ln">Last Name:</label>
    <input type="text" id="ln" name="ln" required />

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required />

    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" required />

    <button type="submit" name="submit">Register</button>
</form>

<?php if (count($storedData) > 0): ?>
<h2>Stored User Data</h2>
<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th> <!-- You can hide or remove this column for security -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($storedData as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user[0]); ?></td>
                <td><?php echo htmlspecialchars($user[1]); ?></td>
                <td><?php echo htmlspecialchars($user[2]); ?></td>
                <td><?php echo htmlspecialchars($user[3]); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p>No user data stored yet.</p>
<?php endif; ?>

</body>
</html>
