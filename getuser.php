<?php
 class User extends Db
 {
public function getuser()
{
    $sql = self::$connection->prepare("SELECT * FROM `user` ");
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; 
}
 }