<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';

$file_name = '';
if (isset($_FILES['img'])) {
    $file_name = basename($_FILES['img']['name']);
    $temp_name = $_FILES['img']['tmp_name'];
    $file_size = $_FILES['img']['size'];
    $image_dir = 'media/';
    $kb = $file_size / 1024;

    if (!is_dir($image_dir)) {
        mkdir($image_dir, 0755, true);
    }

    if ($kb > 400) {
        echo "File is too large";
    } else {
        if (move_uploaded_file($temp_name, $image_dir . $file_name)) {
            echo "Successfully uploaded!";
        } else {
            echo "Upload failed!";
        }
    }
}
?>

<body>
    <form action="#" enctype="multipart/form-data" method="post">
        <div>
            Upload:
            <input type="file" name="img">
            <br><br>
            <input type="submit" value="Submit" name="submit">
            <?php
            if (isset($_POST['submit']) && !empty($file_name)) {
                echo "<br><img src='media/$file_name' width='400px'>";
            }
            ?>
        </div>
    </form>
</body>
