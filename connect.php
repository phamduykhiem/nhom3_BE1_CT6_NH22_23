<?php
$host = "localhost";
$username = "root";
$passwork = "";
$dbname = "nhom3";
$conn = new mysqli($host,$username,$passwork,$dbname);
if($conn->connect_error)
{
    die("kết nối không thành công:".$conn->connect_error);
}
?>