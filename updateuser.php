<?php
  require "connect.php";
    if(isset($_POST['name']))
    {
      
        $id=$_GET['id'];
        $name=$_POST['name'];
        $user=$_POST['user'];
        $sdt=$_POST['sdt'];
        $email=$_POST['email'];
        $sql="UPDATE `user` SET `fullname`='$name',`username`='$user',`sdt`='$sdt',`email`='$email' where user.uid=$id";
        if($conn->query($sql)===TRUE)
   {
    header("location:user.php?thongbao=".$_GET['id']);
   }else
   {
    echo $conn->error;
   }
    }else
    {
        echo $conn->error;
    }
    
?>
