<?php
$host = "localhost";
$username = "root";
$passwork = "";
$dbname = "nhom3";
$conn = new mysqli($host,$username,$passwork,$dbname);
if($conn->connect_error)
{
    die("kết nối không t:".$conn->connect_error);
}
?>