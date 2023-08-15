<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
            <tr>
                <th>id</th>
                <th>ShopName</th>
                <th>OwnerName</th>
                <th>MobileName</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Password</th>
                <th>MasterAndAgentId</th>
                <th>Address</th>
                <th>Wallet</th>
                <th>CreateBy</th>
                <th>CreateDate</th>
                <th colspan="2">operation</th>
</tr>

<?php

include 'connection.php';

session_start();

$Role = "User";
$SubAdmin = $_SESSION['UserName'];

$sql = "SELECT * FROM TeenPattiGoldTable WHERE Role='$Role' AND CreateBy='$SubAdmin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $resultArray = array();

    while ($row = $result->fetch_assoc()) {
        $resultArray[] = array(
            "id" => $row["id"],
            "ShopName" => $row["ShopName"],
            "OwnerName" => $row["OwnerName"],
            "MobileName" => $row["MobileName"],
            "UserName" => $row["UserName"],
            "Email" => $row["Email"],
            "Password" => $row["Password"],
            "MasterAndAgentId" => $row["MasterAndAgentId"],
            "Address" => $row["Address"],
            "Wallet" => $row["Wallet"],
            "CreateBy" => $row["CreateBy"],
            "CreateDate	" => $row["CreateDate"],
        );
    }
    
    $loopLength = count($resultArray);

    for ($i = 0; $i < $loopLength; $i++) {
        echo "<tr>";
                    echo "<th>" . $resultArray[$i]['id'] . "</th>";
                    echo "<th>" . $resultArray[$i]['ShopName'] . "</th>";
                    echo "<th>" . $resultArray[$i]['OwnerName'] . "</th>";
                    echo "<th>" . $resultArray[$i]['MobileName'] . "</th>";
                    echo "<th>" . $resultArray[$i]['UserName'] . "</th>";
                    echo "<th>" . $resultArray[$i]['Email'] . "</th>";
                    echo "<th>" . $resultArray[$i]['Password'] . "</th>";
                    echo "<th>" . $resultArray[$i]['MasterAndAgentId'] . "</th>";
                    echo "<th>" . $resultArray[$i]['Address'] . "</th>";
                    echo "<th>" . $resultArray[$i]['Wallet'] . "</th>";
                    echo "<th>" . $resultArray[$i]['CreateBy'] . "</th>";
                    echo "<th>" . $resultArray[$i]['CreateDate	'] . "</th>";
                    echo "<th><a href='updates.php?id=" . $resultArray[$i]['id'] . "'> update " . "</a></th>";
                    echo "<th><a href='delete.php?id=" . $resultArray[$i]['id'] . "'> delete " . "</a></th>";
                    echo "</tr>";
    }

}

    ?>

</table>

</body>
</html>