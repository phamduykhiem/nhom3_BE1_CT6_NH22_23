<?php
  require "connect.php";
    if(isset($_POST['name']))
    {
      
        $id=$_GET['id'];
        $name=$_POST['name'];
        $image=$_FILES['image']['name'];
        $target_dir ="../img/";
        $target_file=$target_dir.basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
        $sql="UPDATE `manufactures` SET `manu_name`='$name',`logoManu`='$image' where manufactures.manu_id=$id";
        if($conn->query($sql)===TRUE)
   {
    header("location:manu.php?thongbao=".$_GET['id']);
   }else
   {
    echo "Sai";
   }
    }else
    {
        echo "fail";
    }
    
?>
