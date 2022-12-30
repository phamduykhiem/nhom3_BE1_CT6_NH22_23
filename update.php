<?php
   require "connect.php";
   $sql="UPDATE latestorder,products set latestorder.item=products.name,latestorder.price=products.price,latestorder.description=products.desciption where latestorder.id=products.id and latestorder.item='' "; 
   if($conn->query($sql)===TRUE)
   {
    header("location:index2.php");
   }else
   {
    echo "fail";
   }

?>