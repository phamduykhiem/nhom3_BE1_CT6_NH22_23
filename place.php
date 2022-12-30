<?php
if(isset($_POST['id']))
{
   require "connect.php";
   $id=$_POST['id'];
   $sql ="INSERT into `latestorder`(`id`,`item`,`Status`,`price`,`description`)VALUES('$id','','Pending',0,'')";
   if($conn->query($sql)===TRUE)
   {
    header("location:update.php");
   }else
   {
    echo "fail";
   }
}
?>