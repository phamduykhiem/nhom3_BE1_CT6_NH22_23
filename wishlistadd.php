
<?php
    require "db.php";
    require "config.php";
    require "wishlist.php";
    require "connect.php";
    if(isset($_GET['uid'])&&isset($_GET['id']))
    {
        $uid = $_GET['uid'];
        $id = $_GET['id'];
        $wishList=new Wishlist();
        $soLuong =$wishList ->getCount($uid);
        $sql = "INSERT INTO `wishlist` (`uid`,`id`) VALUES('$uid','$id')";
        if($conn->query($sql)===TRUE)
        {
            $getwish =$wishList->getwishtype($uid);
            $tex = '<div class=" cart-list">';
            foreach ($getwish as $value){
                $tex .='<div  class="product-widget">
                <div class="product-img">
                    <img src="./img/'.$value["image"].'" alt="">
                </div>
                <div class="product-body">
    
                    <h3 class="product-name"><a href="#">'.$value["name"].'</a></h3>
                    <h4 class="product-price">'.number_format($value['price']).' VND</h4>
                </div>
                <div class = "kkk ooo" id = "'.$value['id'].'"><button id = '.$value['id'].'" class="delete"><i class="fa fa-close"></i></button></div>
            </div>';
            }
            $tex .= '<div class="cart-btns">
            <a href="viewwishlish">View Wishlist</a>
            </div>';
            $soLuong["tex"]=$tex;
            $the = $soLuong; 
            $mang = array( $the[0],"tex"=>$tex);
          echo json_encode($soLuong);
        }
    }
?>