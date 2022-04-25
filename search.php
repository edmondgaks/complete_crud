<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="GET">
        <label>Search: </label><input type="text" name="search">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

include 'connect.php';




// $name = $row['name'];
// $email = $row['email'];
// $mobile = $row['mobile'];
// $password = $row['password'];


// if(isset($_POST['submit'])) {
    $search = isset($_GET['search'])? $_GET['search'] : '';
    
    
    $sql = "select * from crud where name LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    
    
    if($result->num_rows != 0) {
        while($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile= $row['mobile'];

            $password = $row['password'];

            echo '<table><tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <tr></table>';
        }
    }else {
        echo "Name doesn't exist";
    }

// }

?>

