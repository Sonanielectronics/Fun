<?php
include '../connection.php';

if (isset($_POST['submit'])) {

    $shopname = $_POST['shopname'];
    $ownername = $_POST['ownername'];
    $mobilenumber = $_POST['mobilenumber'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $Wallet = 0;
    $Role = "Master";
    $CreatedBy = "AdminUser";
    $currentDate = date('Y-m-d');

    $sql = "INSERT INTO `TeenPattiGoldTable`(ShopName , OwnerName , MobileName , UserName , Email , Password , Address , Wallet , Role , commission , WinPercentage , LoginId , CreatedBy , CreateDate) VALUES ('$shopname','$ownername','$mobilenumber','$username','$email','$password','$address','$Wallet','$Role','','','0','$CreatedBy','$currentDate')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header("Location: https://funtargetgame.co.in/Admin/Create");
        exit();

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html>

<head>
    <title> </title>
</head>

<body>

    <form action="" method="POST">

        <input type="text" placeholder="shopname" name="shopname" id="shopname">
        <input type="text" placeholder="ownername" name="ownername" id="ownername" value="">
        <input type="text" placeholder="mobilenumber" name="mobilenumber" id="mobilenumber" value="">
        <input type="text" placeholder="username" name="username" id="username" value="">
        <input type="text" placeholder="email" name="email" id="email" value="">
        <input type="text" placeholder="password" name="password" id="password" value="">
        <input type="text" placeholder="address" name="address" id="address" value="">

        <br><br>

        <input type="submit" name="submit" value="submit">

    </form>

</body>

</html>