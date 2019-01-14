<?php

//ob_start();
session_start();

function connection() {
// $servername = "192.168.43.110";
//    $ip = gethostbyname("");
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

if (isset($_GET["login"])) {
    $password = $_POST["pwd"];

    $conn = connection();


    if ($_GET["login"] == "claim") {
        $userid = $_SESSION["id"];
        $sql = "SELECT salary,ClaimDate,ClaimTime FROM salaryhistory as a,login as b,employee as c WHERE password='$password' and a.userid='$userid' and a.userid=b.id and a.userid=c.user_id order by a.id desc limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $m = explode('/', $row['ClaimDate']);
                if ($m[1] != date('M'))
                    insertHistory(date('D: d/M/Y'), date('H:i:s'), $row['salary']);
                else
                    echo '0';
            }
        } else {
            echo '2';
        }
        return;
    }
    if ($_GET["login"] == "loan") {
        $userid = $_SESSION["id"];
        $sql = "SELECT b.id from login as b,loan as a WHERE password='$password' and b.id='$userid' and a.userid=b.id and a.status=0 order by a.id desc limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           echo 0;
        } else {
            insertLoan($_POST['amount']);
        }
        return;
    }



    if ($_GET["login"] == "login") {
        $username = $_POST["usr"];
        $sql = "SELECT id FROM login WHERE username='$username' AND password='$password'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION["id"] = $row["id"];
                $_SESSION["username"] = $username;
                echo $result->num_rows;
            }
        } else {
            echo "0";
        }
    } else if ($_GET["login"] == "signup") {
        $username = $_POST["usr"];
        $sql = "SELECT id FROM login WHERE username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '-1';
            return;
        } else {
            $sql = "INSERT INTO `graphicalpassword`.`login` (`username`, `password`) VALUES ( '$username', '$password');";
            if ($conn->query($sql) === TRUE) {
                $sql = "SELECT id FROM login WHERE username='$username' AND password='$password'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $sql = "INSERT INTO `graphicalpassword`.`employee` (`user_id`,pix) VALUES ('$id','usr_profile/$id.png');";
                        $conn->query($sql);
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["username"] = $username;
                    }
                    echo $result->num_rows;
                } else {
                    echo "0";
                }
            }
            insertHistory(date('D: d/0/Y'), date('H/i/s'), 0);
        }
    } else {
        session_destroy();
    }
}

function insertHistory($date, $time, $amt) {
    $id = $_SESSION['id'];
    $conn = connection();
    $sql = "INSERT INTO `graphicalpassword`.`salaryhistory` (`userid`, `amount`,`ClaimTime`, `ClaimDate`) VALUES ( '$id', '$amt','$time', '$date');";
    if ($conn->query($sql) === TRUE) {
        echo '1';
    }
}

function insertLoan($amt) {
    $id = $_SESSION['id'];
    $conn = connection();
    $sql = "INSERT INTO `graphicalpassword`.`loan` (`userid`, `amount`) VALUES ( '$id', '$amt');";
    if ($conn->query($sql) === TRUE) {
        echo '1';
    }
}