<?php
  require "connect.php";
    if(isset($_POST['amount']))
    {
      
        $id=$_GET['id'];
        $amount = $_POST['amount'];
        $sql="UPDATE `topsell` SET `soLuong`='$amount'where topsell.id=$id";
        if($conn->query($sql)===TRUE)
   {
    header("location:topsell.php?thongbao=".$_GET['id']);
   }
    }else
    {
        echo "fail";
    }
    
?>
