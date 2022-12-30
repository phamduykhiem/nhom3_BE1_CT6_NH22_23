<?php
 class Topsell extends Db
{
    public function gettopsell ()
{
$sql = self::$connection->prepare("SELECT * FROM `products`,`topsell` WHERE topsell.id=products.id");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function get3topsell()
{
    $sql = self::$connection->prepare("SELECT * FROM `products`,`topsell` WHERE topsell.id=products.id ORDER BY created_at DESC LIMIT 3
");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getnext3topsell()
{
    $sql = self::$connection->prepare("SELECT * FROM `products`,`topsell` WHERE topsell.id=products.id ORDER BY created_at DESC LIMIT 3,3");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getTypeSell($type)
{
    $sql = self::$connection->prepare("SELECT * FROM `products`,`topsell` WHERE topsell.id=products.id AND products.type_id = $type ORDER BY RAND() limit 4");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getlast4topsell()
{
    $sql = self::$connection->prepare("SELECT * FROM `products`,`topsell` WHERE topsell.id=products.id ORDER BY created_at DESC LIMIT 6,4");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
}   
?>