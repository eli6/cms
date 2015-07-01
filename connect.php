<?php
$servername = "localhost";
$password = "";
$username ="root";
$dbname ="cms";

$connect = new mysqli($servername, $username, $password, $dbname);


if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "";
?>
