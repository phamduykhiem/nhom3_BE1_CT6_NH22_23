<?php
require "model/config.php";
require "model/db.php";
require "allproducts.php";
$product=new Newproducts;
if(isset($_POST['name'])&&$_POST['name']!='')
{
    $name=$_POST['name'];
    $image=$_FILES['image']['name'];
   $hh=$product->addprotype($name,$image);
    $target_dir ="../img/";
    $target_file=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
    header("location:prototypes.php");
    if($hh===TRUE)
    {
        header("location:prototypes.php");
    }
}else
{
    header("location:protypes-add.php?thongbao=1");
}

?>