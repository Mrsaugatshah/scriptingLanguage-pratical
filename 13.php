<!DOCTYPE html>
<html>

<body>

    <h2>File Upload</h2>

    <form method="post" enctype="multipart/form-data">
        Select File:
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>

    <?php
    if (isset($_FILES['file'])) {

        $file = $_FILES['file'];

        // Save file in uploads folder
        move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);

        echo "File Name: " . $file['name'] . "<br>";
        echo "File Size: " . $file['size'] . " bytes<br>";
        echo "File Type: " . $file['type'];
    }
    ?>

</body>

</html>