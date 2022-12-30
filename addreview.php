<?php
    require_once 'db.php';
    require_once 'config.php';
    require_once 'connect.php'; 
    class ADDREVIEW extends Db
{
    public function getAllinfo ($iduser, $name, $email, $reviewproducts, $rating)
{
    
$sql = self::$connection->prepare("INSERT INTO `review` (`idproducts`, `nameuser`, `emailuser`, `reviewuser`, `rating`, `sub_time`) VALUES ('$iduser', '$name', '$email', '$reviewproducts', '$rating', NOW());");
$sql->execute(); //return an object
$items = array();

return $items; //return an array
}
}

$iduser = $_GET['id'];
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$reviewproducts = $_POST['userReview'];
$rating = $_POST['rating'];
$addreview = new ADDREVIEW;
$getaddreivew = $addreview ->getAllinfo($iduser, $name, $email, $reviewproducts, $rating);
header("Location:./detail.php?id=".$_GET['id']."&typeid=".$_GET['typeid']);
?>