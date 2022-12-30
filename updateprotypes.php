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
        $sql="UPDATE `protypes` SET `type_name`='$name',`logoProtypes`='$image' where protypes.type_id=$id";
        if($conn->query($sql)===TRUE)
   {
    header("location:prototypes.php");
   }else
  {
    header("location:protypes-add.php?thongbao=1");
  }
    }else
    {
        echo "fail";
    }
    
?>
