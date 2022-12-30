<?php
require_once "model/config.php";
require_once "model/db.php";
require_once "allproducts.php";
if(isset($_GET['id']))
{
    $product=new Newproducts;
    $dele=$product->delete($_GET['id']);
    if($dele===TRUE)
    {
        header("location:products.php?thongbaoxoa=".$_GET['id']);
    }else
    {
        header("location:products.php?thongbaoxoasai=".$_GET['id']);
    }
}
if(isset($_GET['idxoa']))
{
    $product=new Newproducts;
    $dele=$product->deleteuser($_GET['idxoa']);
    if($dele===TRUE)
    {
        header("location:user.php?thongbaoxoa=".$_GET['idxoa']);
    }else
    {
        echo "bao";
    }
}
if(isset($_GET['idsellxoa']))
{
    $product=new Newproducts;
    $dele=$product->deleteTopsell($_GET['idsellxoa']);
    if($dele===TRUE)
    {
        header("location:topsell.php?thongbaoxoa=".$_GET['idsellxoa']);
    }else
    {
        echo "hieu";
    }
}
?>