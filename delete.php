<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM TeenPattiGoldTable WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// $deletequery = " DELETE FROM `TeenPattiGoldTable` WHERE id=$id ";

// $query = mysqli_query($con,$deletequery)

?>