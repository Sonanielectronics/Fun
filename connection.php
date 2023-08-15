<?php

$db_host = 'localhost';  
$db_user = 'funtargetgame_TeenPattiGoldUser';   
$db_pass = 'N8$p$obAe4#&';  
$db_name = 'funtargetgame_TeenPattiGoldDb';   

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>