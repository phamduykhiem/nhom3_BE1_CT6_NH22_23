<?php
session_start();
if(isset($_SESSION['admin']))
{
require "model/config.php";
require "model/db.php";
require "allproducts.php";
$product=new Newproducts;
if(isset($_POST['name']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image']['name'];
    $desciption=$_POST['desciption'];444444444444
    $manufacture=$_POST['manu_id'];
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $screen=$_POST['screen'];
    $graphics=$_POST['gra'];
    $osystem=$_POST['osystem'];
    $discount=$_POST['discount'];
    $protype=$_POST['type_id'];
    $feature=isset($_POST['feature'])?1:0;
    $hh=$product->addproduct($name,intval($manufacture),intval($protype),intval($price),$image,$desciption,$feature,$discount,$screen,$cpu,$ram,$graphics,$osystem);
    $target_dir ="../img/";
    $target_file=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    if($hh===TRUE)
    {
        header("location:products.php");
    }
    else
    {
     
    }
}
}
else
{
    header("location:login.php?thongbao=1");
}
?>