<?php
session_start();
if(isset($_SESSION['user']['pass']))
{
    $_SESSION['user']['pass']=$_POST['newpass'];
    header("location:login.html");
}
?>