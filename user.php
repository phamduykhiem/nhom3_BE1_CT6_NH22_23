<?php
class User extends Db
{
    public function getAllinfo ()
{
$sql = self::$connection->prepare("SELECT * FROM user");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
}   
