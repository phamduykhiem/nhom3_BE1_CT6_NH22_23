<?php
 class Protypes extends Db
 {
    public function getprotypes ()
{
$sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE protypes.type_id =1");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
 }
?>