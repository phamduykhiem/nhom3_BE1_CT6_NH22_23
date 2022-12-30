<?php
session_start();
require "db.php";
require "config.php";
require "connect.php";
$result = mysqli_query($conn, "SELECT * from `admin`" );
$check=0;
if(isset($_POST['email'])&&isset($_POST['pass']))
{
while ($row = mysqli_fetch_array($result)) {
    if($_POST['email']==$row['email']&&$_POST['pass']==$row['pass'])
    {
        $id=$row['id'];
        header("location:index.php?adminid=$id");
        $_SESSION['admin'] = $id;
    }else
    {
        $check++;
    }
    }
}else
{
    $check=1;
}
if($check>0)
{
echo "that bai";
}
?>