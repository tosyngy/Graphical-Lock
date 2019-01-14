<?php

//ob_start();
session_start();

function connection() {
    //  $servername = "localhost";
//     $ip = gethostbyname("");
//    echo $ip;
//    
//    
//    $servername = "$ip";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "graphicalpassword";


//    $servername = "akudrawsecretscom.ipagemysql.com";
//    $username = "biodata";
//    $password = "biodata";
//    $dbname = "biodata";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


$ids = array();
//$skill = array();
$sqlString = "";
$aboutyou=array();
$queryStr="";
$conn = connection();


//$sql = "SELECT user_id FROM skill WHERE skill like '%$id%'";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        $sqlString.=' user_id=' . $row['user_id'] . ' or ';
//    }
//   //  print_r($sqlString);
//}

$sql = "SELECT * FROM employee WHERE user_id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($aboutyou, $row);
    }
//            print_r($aboutyou);
}
