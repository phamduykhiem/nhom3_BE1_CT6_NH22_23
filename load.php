<?php
									require "db.php";
									require "config.php";
                                    require "connect.php";
if(isset($_GET['typepro'])&&isset($_GET['uid']))
{
										 require "newproducts.php";
										 require "protypes.php";
                                         $tex = '<div class="row">
                                         <div class="products-tabs" >
                                             <!-- tab -->
                                             <div id="tab1" class="tab-pane active ">
                                                 <div class="products-slick" data-nav="#slick-nav-1">';
										$newproducts=new Newproducts;
										$getnewproducts =$newproducts ->getType($_GET['typepro']);
											foreach($getnewproducts as $value)
											{
											
											$img=$value['image'];
											$name=$value['name'];
											$oldprice=$value['price'];
											$newprice=$oldprice*((100-0.03)/100);
											$VND=number_format($newprice);
											$VNDoldprice=number_format($oldprice);
											$tempt=" VND";
											$id=$value['id'];
											$typeid =$value['type_id'];
											$tex .= "<div class='col-md-3'> <div class='product'>
											<div class='product-img' >
										
												<img src='./img/$img' alt=''>
												<div class='product-label'>
													<span class='sale'>-30%</span>
													<span class='new'>NEW</span>
												</div>
											</div>
											<div class='product-body'>
												<p style = 'display : none' id = 'getid' style = >$id</p>
												<p class='product-category'>Category</p>
												<h3 class='product-name'><a href='detail.php?id=$id&typeid=$typeid'>$name</a></h3>
												<h4 class='product-old-price'>$VNDoldprice$tempt TO</h4>
												<h4 class='product-price'>$VND$tempt</h4>
												<div class='product-rating'>
													<i class='fa fa-star'></i>
													<i class='fa fa-star'></i>
													<i class='fa fa-star'></i>
													<i class='fa fa-star'></i>
													<i class='fa fa-star'></i>
												</div>
												<div class='product-btns'>
													<button id = 'wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
													<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
													<button id=$id type='button' data-toggle='modal' data-target='#exampleModal' class='quick-view'><i class='fa fa-eye edit'></i><span class='tooltipp' >quick view</span></button>
													</div>
											</div>
											<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
										</div>
                                        </div>";
										}
                                        $tex .= '</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>
									
								</div>
								<!-- /tab -->
							
							</div>
						</div>';
                                        echo json_encode(["tex"=>$tex]);
}
if(isset($_GET['typeprotopsell'])&&isset($_GET['uid']))
{
    require "topsell.php";
    require "protypes.php";
    $tex = '<div class="row">
    <div class="products-tabs" >
        <!-- tab -->
        <div id="tab1" class="tab-pane active ">
            <div class="products-slick" data-nav="#slick-nav-1">';
   $topsell=new Topsell;
   $getnewproducts =$topsell ->getTypeSell($_GET['typeprotopsell']);
       foreach($getnewproducts as $value)
       {
       
       $img=$value['image'];
       $name=$value['name'];
       $oldprice=$value['price'];
       $newprice=$oldprice*((100-0.03)/100);
       $VND=number_format($newprice);
       $VNDoldprice=number_format($oldprice);
       $tempt=" VND";
       $id=$value['id'];
       $typeid =$value['type_id'];
       $tex .= "<div class='col-md-3'> <div class='product'>
       <div class='product-img' >
   
           <img src='./img/$img' alt=''>
           <div class='product-label'>
               <span class='sale'>-30%</span>
               <span class='new'>NEW</span>
           </div>
       </div>
       <div class='product-body'>
           <p style = 'display : none' id = 'getid' style = >$id</p>
           <p class='product-category'>Category</p>
           <h3 class='product-name'><a href='detail.php?id=$id&typeid=$typeid'>$name</a></h3>
           <h4 class='product-old-price'>$VNDoldprice$tempt TO</h4>
           <h4 class='product-price'>$VND$tempt</h4>
           <div class='product-rating'>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
               <i class='fa fa-star'></i>
           </div>
           <div class='product-btns'>
               <button id = 'wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
               <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
               <button id=$id type='button' data-toggle='modal' data-target='#exampleModal' class='quick-view'><i class='fa fa-eye edit'></i><span class='tooltipp' >quick view</span></button>
               </div>
       </div>
       <div class='add-to-cart'>
       <div class = 'sua'>
       <button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
       </div> <br>
           <button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
       </div>
   </div>
   </div>";
   }
   $tex .= '</div>
   <div id="slick-nav-1" class="products-slick-nav"></div>

</div>
<!-- /tab -->

</div>
</div>';
   echo json_encode(["tex"=>$tex]);
}
?>