<?php
session_start();
require "connect.php";
require "db.php";
require "config.php";
require "cart.php";
$cart = new Cart;
$getcart=$cart->viewcartid($_SESSION['user']);
$the;
if(isset($_POST['address'])&&isset($_POST['tel'])&&isset($_POST['payment'])&&isset($_POST['check']))
{
    echo $_GET['brand'];
    $baba =$_GET['brand'];
	$array = explode(",",$baba);
    if(isset($_SESSION['user']))
    {
        $uid = $_SESSION['user'];
        if(isset($_GET['brand']))
        {
                $sql = "INSERT INTO `buy`( `uid`, `diaChi`, `phone`, `note`) VALUES ('".$_SESSION["user"]."','".$_POST['address']."','".$_POST['tel']."','".$_POST['note']."')";
                if($conn->query($sql)===TRUE)
                {
                    $getCart = $cart->laymadonhangcuoi($_SESSION["user"]);
foreach ($getCart as $key => $value) {
    $the = $value['maDonHang'];
}
                    foreach ($array as $key => $value1) {
                        foreach($getcart as $value2){
                            if($value1==$value2['id'])
                            {            
                            $sql1 = "INSERT INTO `thongtinhang`(`maDonHang`, `id`, `soLuong`) VALUES ('$the','".$value2['id']."','".$value2['soLuong']."')";
                            $sql2 = "DELETE FROM `cart` WHERE cart.uid  = ".$_SESSION['user']." AND cart.id = ".$value2['id']."";
                            if($conn->query($sql1)===TRUE&&$conn->query($sql2)===TRUE)
                            {
                                header("location:viewDonHang.php");
                            }
                            else
                            {

                            }
                            }
                    }
                }
            }
                else
                {
                    echo 'huhu';
                    echo $conn->error;
                }
            }
            echo "Xóa thành công";
        }
        else
        {
            echo "sai";
        }
    }
    else{
        echo "saihet";
    }
?>