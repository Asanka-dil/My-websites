<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artbyshanweb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die ("Unsuccessfull Connection" . $conn->connect_error);
}
?>