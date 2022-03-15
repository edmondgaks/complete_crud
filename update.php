<?php


include 'connect.php';

$id = $_GET['updateid'];
$sql = "Select * from crud where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        // echo "Updated sucessfully";
        header('location:display.php');
    } else {
        // echo "Updated sucessfully";
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
    <div class="container my-5">
        <form method="POST">

            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password; ?>>
            </div>
  
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>