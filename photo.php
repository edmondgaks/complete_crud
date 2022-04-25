<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>
<body>

    <?php

    if(isset($_FILES['userfile'])) {
        pre_r($_FILES);
        move_uploaded_file($_FILES['userfile']['t'])
    }
    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="userfile" />
        <input type="submit" name="Upload" />
    </form>
</body>
</html>