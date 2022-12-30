<?php
 class Newproducts extends Db
 {
    public function getNEWproducts ()
{
$sql = self::$connection->prepare("SELECT * FROM `products` where id < 5;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getNEWproductss ()
{
$sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY id DESC limit 4;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getType ($type)
{
$sql = self::$connection->prepare("SELECT * FROM `products` where type_id = $type ORDER BY RAND() limit 4;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function Search($keyword,$soTrang)
{
    $sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.name LIKE ? limit 6 OFFSET $soTrang;");
    $keyword="%$keyword%";
    $sql->bind_param("s",$keyword);
    $sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getproduct ($typeid,$soTrang)
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.type_id=$typeid LIMIT 6 OFFSET $soTrang;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getproducts ($typeid)
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.type_id=$typeid ;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getproductsid($id)
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.id=$id;");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getnametype($nametypeid)
{
    $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE protypes.type_id=$nametypeid;");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getAjax($query)
{
    $sql = self::$connection->prepare($query." limit 6");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
//Hotdeal
public function getHotDeal($soTrang)
{
$sql = self::$connection->prepare("SELECT * FROM `products`, `hotdeal` WHERE products.id = hotdeal.id ORDER BY discount DESC LIMIT 6 OFFSET $soTrang;");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getdetails($id)
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE products.id = $id");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getreview($id)
{
$sql = self::$connection->prepare("SELECT * FROM `products`,`review` WHERE `products`.id = `review`.idproducts AND `review`.idproducts = $id;");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
}
?>
