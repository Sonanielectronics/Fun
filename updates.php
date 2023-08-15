<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud tutorial</title>
</head>
<body>

<form action="" method="POST">

<?php

include 'connection.php' ;

if(isset($_POST['btnsubmit'])){
    $idupdate= $_GET['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];

$id = $_GET['id'];

$sql = "UPDATE TeenPattiGoldTable SET username='$username' , password='$password' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}

}

include 'connection.php';

$ids = $_GET['id'];

$showquery = "SELECT * FROM TeenPattiGoldTable where id={$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

$sql = "SELECT * FROM TeenPattiGoldTable where id={$ids}";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $resultArray = array();

    while ($row = $result->fetch_assoc()) {
        $resultArray[] = array(
            "id" => $row["id"],
            "username" => $row["username"],
            "password" => $row["password"]
        );
    }

}

?>

<input type="text" 
name="username" value="<?php echo $resultArray[0]['username']; ?>" required/>
<input type="text" 
name="password" value="<?php echo $resultArray[0]['password']; ?>" required/>

<input type="submit" 
name="btnsubmit" value="Register"/>

<a href="display.php">check form </a>

</form>
    
</body>
</html>
