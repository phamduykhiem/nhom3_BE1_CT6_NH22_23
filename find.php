<?php
if(isset($_GET['key']))
{
    $key=$_GET['key'];
    header("location:products.php?find=$key");
}
?>