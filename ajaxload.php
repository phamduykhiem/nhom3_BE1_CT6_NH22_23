<?php
session_start();
        require "db.php";
	require "wishlist.php";
    require "config.php";
    if(isset($_POST['actions'])&&isset($_POST['key']))
    {
        if($_POST['key']=="kkk")
        {
            if(isset($_SESSION['user']))
            {
            $wish=new Wishlist;
            $getwish =$wish->getwishtype($_SESSION['user']);
            foreach ($getwish as $value){
        echo '<div  class="product-widget">
            <div class="product-img">
                <img src="./img/'.$value["image"].'" alt="">
            </div>
            <div class="product-body">

                <h3 class="product-name"><a href="#">'.$value["name"].'</a></h3>
                <h4 class="product-price">'.number_format($value["price"]).' VND</h4>
            </div>
            <div class = "kkk ooo" id = "'.$value["id"].'">
            <button id = "'.$value["id"].'" class="delete"><i class="fa fa-close"></i></button></div>
        </div>';
 }}
        }
        if($_POST["key"]=="hhh")
        {
            ?><?php
													if(isset($_SESSION['user'])){
													$cart=new Cart;
													$getcart =$cart->getcartids($_SESSION['user']);
													$a=0;
													$sum=0;
													$price=0;
													foreach ($getcart as $value){
															$price=$price+($value['soLuong']*$value['price']);
															$sum+=$price;
															$a++;
													?>
													<div  class="product-widget">
													<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													</div>
													<div class="product-body">
													<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><span class="qty"><?php echo $value['soLuong'].'x'; ?></span><?php echo number_format($value['price']).'VND'?></h4>
													</div>
													<div class = "hhh" id = "<?php echo $value['id']; ?>"><button class="delete"><i class="fa fa-close"></i></button></div>
													<?php }}}
    }
    else
    {
        echo "Sai";
    }
?>