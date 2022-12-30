<?php
class Latest extends Db
{
    public function insertlatest ($id)
{
$sql = self::$connection->prepare("INSERT into latestorder VALUES($id,'','')");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

}

?>