<?php

if(isset($_POST['submit']) && isset($_FILES['my_image'])) {
    echo "Hello";
} else {
    header("Location: photo.php");
}


