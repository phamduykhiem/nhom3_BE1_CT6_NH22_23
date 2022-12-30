<?php
    require "db.php";
    require "config.php";
    require "cart.php";
    require "connect.php";
    $cart=new Cart();
    $getcart11 =$cart->getcartids($_GET['uid']);
    if(isset($_GET['uid'])&&isset($_GET['id'])&&isset($_GET['soLuong']))
    {
        $uid = $_GET['uid'];
        $id = $_GET['id'];
        $soLuong = $_GET['soLuong'];
        require "connect.php";
        if(count($getcart11)<1)
        {
            $sql = "INSERT INTO `cart` (`uid`,`id`,`soLuong`) VALUES('$uid','$id','$soLuong')";
                if($conn->query($sql)===TRUE)
                {
                    $thongBao = "Thêm thành công";
            $a=0;
            $sum=0;
          $tex ='<div class=" cart-list">';
          $getcart11 =$cart->getcartids($_GET['uid']);
          foreach ($getcart11 as $value1){
            $price =0;
            $price=$price+($value1['soLuong']*$value1['price']);
            $sum+=$price;
            $a++;
            $tex .='<div  class="product-widget">
				
            <div class="product-img">
				<img src="./img/'.$value1["image"].'" alt="">
				</div>
				<div class="product-body">
				<h3 class="product-name"><a href="#">'.$value1["name"].'</a></h3>
				<h4 class="product-price"><span class="qty">'.$value1['soLuong'].'x</span>'.number_format($value1['price']).' VND</h4>
				</div>
				<div class = "hhh" id = "'.$value1['id'].'"><button class="delete"><i class="fa fa-close"></i></button></div>';
          }
          $tex .='</div>
												<div class="cart-summary">
												<small>'.$a.' Item(s) selected</small>
												<h5>SUBTOTAL: '.number_format($sum).'VND</h5>
												</div>
												<div class="cart-btns">
												<a href="viewcart.php">View Cart</a>
												<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
												</div>';
          echo json_encode(["thongbao"=>$thongBao,"soLuong"=>$soLuong,"tex"=>$tex]);
                }

        }
        else
        {
            foreach($getcart11 as $value)
            {
               if($value['uid']==$uid&&$value['id']==$id)
               {
                    $soLuong1 = $soLuong + $value['soLuong'];
                    $sql = "UPDATE cart SET soLuong = $soLuong1 WHERE uid = $uid AND id= $id";
                    if($conn->query($sql)===TRUE)
                    {
                        $thongBao = "Thêm thành công";
                        $a=0;
                        $sum=0;
                      $tex ='<div class=" cart-list">';
                      $getcart1 =$cart->getcartids($_GET['uid']);
                      foreach ($getcart1 as $value1){
                        $price =0;
                        $price=$price+($value1['soLuong']*$value1['price']);
                        $sum+=$price;
                        $a++;
                        $tex .='<div  class="product-widget">
                            
                        <div class="product-img">
                            <img src="./img/'.$value1["image"].'" alt="">
                            </div>
                            <div class="product-body">
                            <h3 class="product-name"><a href="#">'.$value1["name"].'</a></h3>
                            <h4 class="product-price"><span class="qty">'.$value1['soLuong'].'x</span>'.number_format($value1['price']).' VND</h4>
                            </div>
                            <div class = "hhh" id = "'.$value1['id'].'"><button class="delete"><i class="fa fa-close"></i></button></div>';
                      }
                      $tex .='</div>
                                                            <div class="cart-summary">
                                                            <small>'.$a.' Item(s) selected</small>
                                                            <h5>SUBTOTAL: '.number_format($sum).'VND</h5>
                                                            </div>
                                                            <div class="cart-btns">
                                                            <a href="viewcart.php">View Cart</a>
                                                            <a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                                            </div>';
                      echo json_encode(["thongbao"=>$thongBao,"soLuong"=>$soLuong,"tex"=>$tex]);
                    }
                    break;
               } 
               else
               {
                
                    $sql = "INSERT INTO `cart` (`uid`,`id`,`soLuong`) VALUES('$uid','$id','$soLuong')";
                    if($conn->query($sql)===TRUE)
                    {
                        $thongBao = "Thêm thành công";
            $a=0;
            $sum=0;
          $tex ='<div class=" cart-list">';
          $getcart1 =$cart->getcartids($_GET['uid']);
          foreach ($getcart1 as $value1){
            $price =0;
            $price=$price+($value1['soLuong']*$value1['price']);
            $sum+=$price;
            $a++;
            $tex .='<div  class="product-widget">
				
            <div class="product-img">
				<img src="./img/'.$value1["image"].'" alt="">
				</div>
				<div class="product-body">
				<h3 class="product-name"><a href="#">'.$value1["name"].'</a></h3>
				<h4 class="product-price"><span class="qty">'.$value1['soLuong'].'x</span>'.number_format($value1['price']).' VND</h4>
				</div>
				<div class = "hhh" id = "'.$value1['id'].'"><button class="delete"><i class="fa fa-close"></i></button></div>';
          }
          $tex .='</div>
												<div class="cart-summary">
												<small>'.$a.' Item(s) selected</small>
												<h5>SUBTOTAL: '.number_format($sum).'VND</h5>
												</div>
												<div class="cart-btns">
												<a href="viewcart.php">View Cart</a>
												<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
												</div>';
          echo json_encode(["thongbao"=>$thongBao,"soLuong"=>$soLuong,"tex"=>$tex]);
                    }
               }
            }
        }
    }
?>