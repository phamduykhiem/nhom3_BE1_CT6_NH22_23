<?php
class Cart extends Db
{
    public function getAllinfo ()
{
$sql = self::$connection->prepare("SELECT * FROM cart");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getcartid ()
{
$sql = self::$connection->prepare("SELECT * FROM `cart`,`products` WHERE cart.id=products.id");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getcartids ($uid)
{
$sql = self::$connection->prepare("SELECT * FROM `cart`,`products` WHERE cart.id=products.id AND cart.uid = $uid");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getcartiduser($uid)
{
$sql = self::$connection->prepare("SELECT cart.id,cart.soLuong,user.uid FROM `cart`,`user` WHERE cart.uid=user.uid and user.uid = $uid;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getCount($uid)
{
$sql = self::$connection->prepare("SELECT SUM(soLuong) as tong FROM cart WHERE uid = 11");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function viewcart($id)
{
$sql = self::$connection->prepare("SELECT * FROM `products`,`cart` WHERE cart.uid=$id and cart.id=products.id;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function viewcartid($uid)
{
$sql = self::$connection->prepare("SELECT * FROM `products`,`cart` WHERE  cart.id=products.id and cart.uid=$uid;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function viewgiohang($uid)
{
$sql = self::$connection->prepare("SELECT * FROM `buy` WHERE buy.uid = $uid;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function viewthongtin($uid)
{
$sql = self::$connection->prepare("SELECT * FROM `thongtinhang`,`products` WHERE thongtinhang.id = products.id AND thongtinhang.maDonHang = $uid;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function laymadonhangcuoi($uid)
{
$sql = self::$connection->prepare("SELECT * FROM `buy` WHERE buy.uid = $uid ORDER BY maDonHang DESC LIMIT 1;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
}   
?>