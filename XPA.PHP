
<?php
session_start();
if(isset($_SESSION['user']))
{
    var_dump($_SESSION['user']);
    unset($_SESSION['user']);
}
?>