<?php

include 'connection.php' ;

session_start();

$jsonData = file_get_contents('php://input');
    
$data = json_decode($jsonData, true);

$shopname = $data['shopname'];
$ownername = $data['ownername'];
$mobilenumber = $data['mobilenumber'];
$username = $data['username'];
$email = $data['email'];
$password = $data['password'];
$masterandagentid = $data['masterandagentid'];
$address = $data['address'];
$Wallet = 0 ;
$Role = $data['Role'];
$currentDate = date('Y-m-d');
    
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Invalid JSON format.";
}else if (isset($shopname) && isset($ownername) && isset($mobilenumber) && isset($username) && isset($email) && isset($password) && isset($masterandagentid) && isset($address) && isset($Role) && !empty($shopname) && !empty($ownername) && !empty($mobilenumber) && !empty($username) && !empty($email) && !empty($password) && !empty($masterandagentid) && !empty($address) && !empty($Role)) {
    if (isset($_SESSION['Role'])) {

        if($_SESSION['Role'] == 'Admin'){
            
            if ($Role == 'SubAdmin') {
                
                $sqlInsert = "INSERT INTO TeenPattiGoldTable ( ShopName , OwnerName , MobileName , UserName , Email , Password , MasterAndAgentId , Address , Wallet , Role , CreateDate ) VALUES ('$shopname','$ownername','$mobilenumber','$username','$email','$password','$masterandagentid','$address','$Wallet','$Role','$currentDate')";
        
                if ($conn->query($sqlInsert) === TRUE) {
                    echo "Account Create successfully!";
                } else {
                    echo "Error inserting data: " . $conn->error;
                }
                
            } else{
                
                $x = "User";
                
                $sqlInsert = "INSERT INTO TeenPattiGoldTable ( ShopName , OwnerName , MobileName , UserName , Email , Password , MasterAndAgentId , Address , Wallet , Role , CreateDate ) VALUES ('$shopname','$ownername','$mobilenumber','$username','$email','$password','$masterandagentid','$address','$Wallet','$x','$currentDate')";
        
                if ($conn->query($sqlInsert) === TRUE) {
                    echo "Account Create successfully!";
                } else {
                    echo "Error inserting data: " . $conn->error;
                }
                
            }
            
        } else if ($_SESSION['Role'] == 'SubAdmin') {
            
            $x = "User";
            
            $sqlInsert = "INSERT INTO TeenPattiGoldTable ( ShopName , OwnerName , MobileName , UserName , Email , Password , MasterAndAgentId , Address , Wallet , Role , CreateDate ) VALUES ('$shopname','$ownername','$mobilenumber','$username','$email','$password','$masterandagentid','$address','$Wallet','$x','$currentDate')";
        
            if ($conn->query($sqlInsert) === TRUE) {
                echo "Account Create successfully!";
            } else {
                echo "Error inserting data: " . $conn->error;
            }
        
            
        } else{
            
            echo "You are User So doesn't Create account";
        
        }
    
    } else {
        
        echo 'session expire';
        
    }
              
} else {
    
    // $emptyArray = [];
    
    // if (empty($shopname)) {
    // array_push($emptyArray, " shopname");
    // }
    
    // if (empty($ownername)) {
    // array_push($emptyArray, " ownername");
    // }
    
    // if (empty($mobilename)) {
    // array_push($emptyArray, " mobilename");
    // }
    
    // if (empty($username)) {
    // array_push($emptyArray, " username");
    // }
    
    // if (empty($email)) {
    // array_push($emptyArray, " email");
    // }
    
    // if (empty($password)) {
    // array_push($emptyArray, " password");
    // }
    
    // if (empty($masterandagentid)) {
    // array_push($emptyArray, " masterandagentid");
    // }
    
    // if (empty($address)) {
    // array_push($emptyArray, " address");
    // }
    
    // if (empty($Role)) {
    // array_push($emptyArray, " Role");
    // }
    
    echo "insufficient";
    
    // for ($i = 0; $i < count($emptyArray); $i++) {
        
    // if($i == count($emptyArray) - 1){
    //     echo " And";
    // }
    
    // echo $emptyArray[$i];
    
    // }
   
}
    

?>