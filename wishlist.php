<?php
class Wishlist extends Db
{
    public function getAllinfo ()
{
$sql = self::$connection->prepare("SELECT * FROM wishlist");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getwishtype($userid)
{
$sql = self::$connection->prepare("SELECT products.type_id,user.uid,products.name,products.price,products.image,wishlist.id FROM `wishlist`,`user`,`products` WHERE wishlist.uid=user.uid and wishlist.uid=$userid and wishlist.id=products.id;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);   
return $items; //return an array
}
public function getCount($userid)
{
$sql = self::$connection->prepare("SELECT COUNT(*) as soLuong FROM wishlist WHERE uid = $userid;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);   
return $items; //return an array
}
public function getviewishlist($id)
{
$sql = self::$connection->prepare("SELECT * FROM `products`,`wishlist` WHERE wishlist.uid=$id and wishlist.id=products.id;");
$sql->execute(); //return an object
$items = 0;
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);   
return $items; //return an array
}
} 
?>