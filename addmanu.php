<?php
require "model/config.php";
require "model/db.php";
require "allproducts.php";
$product=new Newproducts;
if(isset($_POST['name'])&&$_POST['name']!='')
{
    $name=$_POST['name'];
    $image=$_FILES['image']['name'];
  $hh=$product->addmanu($name,$image);
    $target_dir ="../img/";
    $target_file=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    if($hh===true)
    {
        header("location:manu.php");
    }
}else
{
    header("location:manu-add.php?thongbao=1");
}
?>