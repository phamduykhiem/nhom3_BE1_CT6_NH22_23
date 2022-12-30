<?php
  require "connect.php";
    if(isset($_POST['name']))
    {
      
        $id=$_GET['id'];
        $name=$_POST['name'];
        $image=$_FILES['image']['name'];
        $price=$_POST['price'];
        $description=$_POST['desciption'];
        $manu=$_POST['manu_id'];
        $type=$_POST['type_id'];
        $cpu=$_POST['cpu'];
        $ram=$_POST['ram'];
        $screen=$_POST['screen'];
        $graphics=$_POST['gra'];
        $osystem=$_POST['osystem'];
        $discount=$_POST['discount'];
        $feature=isset($_POST['feature'])?1:0;
        $target_dir ="../img/";
        $target_file=$target_dir.basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
        $sql="UPDATE `products` SET `name`='$name',`manu_id`='$manu',`type_id`='$type',`price`='$price',`discountproducts`='$discount',`image`='$image',`desciption`='$description',`screen`='$screen',`cpu`='$cpu',`ram`='$ram',`graphics`='$graphics',`osystem`='$osystem',`feature`='$feature' WHERE products.id=$id";
        if($conn->query($sql)===TRUE)
   {
    header("location:products.php?thongbao=".$_GET['id']);
   }
    }else
    {
        echo "fail";
    }
    
?>
