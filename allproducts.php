<?php
 class Newproducts extends Db
 {
public function getproducts()
{
    $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures`,`protypes` WHERE products.type_id=protypes.type_id AND products.manu_id=manufactures.manu_id ORDER BY id DESC");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getprotype()
{
    $sql = self::$connection->prepare("SELECT * FROM `protypes` ORDER BY protypes.type_id DESC");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getmanu()
{
    $sql = self::$connection->prepare("SELECT * FROM `manufactures` order by manu_id desc");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function addproduct($name,$manu_id,$type_id,$price,$image,$desciption,$feature,$discount,$sceen,$cpu,$ram,$graphics,$osystem)
{
    $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `discountproducts`, `image`, `desciption`, `screen`, `cpu`, `ram`, `graphics`, `osystem`, `feature`)
     VALUES ('$name','$manu_id','$type_id','$price','$discount','$image','$desciption','$sceen','$cpu','$ram','$graphics','$osystem','$feature')");
    return $sql->execute();
}
public function delete($id)
{
    $sql = self::$connection->prepare("DELETE FROM `products` WHERE products.id=$id");
    return $sql->execute();
}
public function deleteuser($uid)
{
    $sql = self::$connection->prepare("DELETE FROM `user` WHERE user.uid=$uid");
    return $sql->execute();
}
public function gettopsell()
{
    $sql = self::$connection->prepare("SELECT * FROM `topsell`,`products`,`protypes`,`manufactures` WHERE topsell.id=products.id AND products.type_id=protypes.type_id AND products.manu_id=manufactures.manu_id ORDER BY topsell.soLuong DESC");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function gettype($id)
{
    $sql = self::$connection->prepare("SELECT * FROM `products` where products.id=$id ");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function addmanu($name,$image)
{
    $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`, `logoManu`) VALUES ('$name','$image')");
    return $sql->execute();
}
public function addprotype($name,$image)
{
    $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`, `logoProtypes`) VALUES ('$name','$image')");
    return $sql->execute();
}
public function editprotypes($id)
{
    $sql = self::$connection->prepare("SELECT * FROM `protypes` where protypes.type_id=$id ");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getmanuid($id)
{
    $sql = self::$connection->prepare("SELECT * FROM `manufactures` where manufactures.manu_id=$id");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function getuserid($id)
{
    $sql = self::$connection->prepare("SELECT * FROM `user` where user.uid=$id");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function edittopsell($id)
{
    $sql = self::$connection->prepare("SELECT * FROM `topsell` where topsell.id = $id ");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
public function deleteTopsell($id)
{
    $sql = self::$connection->prepare("DELETE FROM `topsell` WHERE topsell.id=$id");
    return $sql->execute();
}
}
?>
