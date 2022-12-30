<?php
include 'headers.php';
require_once "newproducts.php";
$products=new Newproducts;
$soLuong = ($_GET['soTrang'] - 1) * 6;
$getproduct =$products->getproduct($_GET['Typeid'],$soLuong);
$getHotDeal = $products -> getHotDeal($soLuong);
?>
    </head>
	<body>
		<!-- HEADER -->
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">All Categories</a></li>
							<li class="active">Laptops</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
				
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input class="brand" value="1" type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										Apple
									</label>
								</div>
								<div class="input-checkbox">
									<input class="brand" value="2" type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										Oppo
										
									</label>
								</div>
								<div class="input-checkbox">
									<input class="brand" value="3" type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										Samsung
									
									</label>
								</div>
								<div class="input-checkbox">
									<input class="brand" value="4" type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										Xiaomi
										
									</label>
								</div>
								<div class="input-checkbox">
									<input class="brand" value="5" type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										Nokia
										
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        <?php
                                $count = 0;
								foreach($getproduct as $row) {
								$id=$row['id'];
								$typeid=$row['type_id'];
                                $count++;
                                if($count <= 3){
							?>
							<div class="product-widget">
								<div class="product-img-topselling">
								<a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><img src="./img/<?php echo $row['image']?>" alt=""></a>
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $row['name']?></a></h3>
									<h4 class="product-price"><?php echo number_format($row['price']) ."VND "?><del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
                            <?php
                                }
								else{
									break;
								}
                                }
                            ?>
						</div> 
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<div class="clearfix visible-sm visible-xs"></div>
							<div class="hahahaha">
							<!--------------------------------------- product--------------------------------------------------------- -->
							<?php	
								if($_GET['Typeid'] == 0){
									foreach($getHotDeal as $row) {
										$id=$row['id'];
										$typeid=$row['type_id'];
										if($row['discount'] >= 25){
										?>
										<div class="col-md-4 col-xs-6">
											<div class="product">
											<p style = 'display : none' id = 'getid' ><?php echo $row['id']; ?></p>
												<div class="product-img">
												<a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><img src="./img/<?php echo $row['image']?>" alt=""></a>
													<div class='product-label'>
													<span class='sale'><?php echo $row['discount'].'%'?></span>
													<span class='new'>NEW</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $row['name']?></a></h3>
													<h4 class="product-price"><?php echo  number_format($row['price']-($row['price']*$row['discount']/100)).'VND ' ?><br><del class="product-old-price"><?php echo  number_format($row['price']).'VND ' ?></del></h4>
													<div class="product-rating">
													</div>
													<div class="product-btns">
													<button id = 'wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
													</div>
												</div>
												<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
											</div>
											</div>
										<?php
										}
								}
							}
								else{
								foreach($getproduct as $row) {
									$id=$row['id'];
									$typeid=$row['type_id'];
									if($row['discountproducts'] > 0){
							?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<p style = 'display : none' id = 'getid' ><?php echo $row['id']; ?></p>
									<div class="product-img">
									<a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><img src="./img/<?php echo $row['image']?>" alt=""></a>
										<div class='product-label'>
													<span class='sale'><?php echo $row['discountproducts'].'%'?></span>
													<span class='new'>NEW</span>
												</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $row['name']?></a></h3>
										<h4 class="product-price"><?php echo  number_format($row['price']-($row['price']*$row['discountproducts']/100)).'VND ' ?><br><del class="product-old-price"><?php echo  number_format($row['price']).'VND ' ?></del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										<button id = 'wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											
										</div>
									</div>
									<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
											</div>
											</div>
							<?php
									}
									else{
										$id=$row['id'];
										$typeid=$row['type_id'];
										?>
										<div class="col-md-4 col-xs-6">
								<div class="product">
									<p style = 'display : none' id = 'getid' ><?php echo $row['id']; ?></p>
									<div class="product-img">
									<a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><img src="./img/<?php echo $row['image']?>" alt=""></a>
										<div class='product-label'>
													<span class='new'>NEW</span>
												</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $row['name']?></a></h3>
										<h4 class="product-price"><?php echo  number_format($row['price']).'VND '?><br>&nbsp;</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										<button id = 'wishlist' class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											
										</div>
									</div>
									<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
											</div>
											</div>	
										<?php
									}
								}
							}
							?>
							</div>
							<!-- /product -->
						</div>
						<!-- /store products -->
						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<ul class="store-pagination">
								<li ><a href="store.php?Typeid=<?php echo $_GET['Typeid'];?>&soTrang=1">1</a></li>
								<li><a href="store.php?Typeid=<?php echo $_GET['Typeid'];?>&soTrang=2">2</a></li>
								<li><a href="store.php?Typeid=<?php echo $_GET['Typeid'];?>&soTrang=3">3</a></li>
								<li><a href="store.php?Typeid=<?php echo $_GET['Typeid'];?>&soTrang=4">4</a></li>
								<li><a href="store.php?Typeid=<?php echo $_GET['Typeid'];?>&soTrang=<?php $tang = $_GET['soTrang']+1; echo $tang;?>"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<?php require "js/events.php"; ?>
		<?php require "ajaxstore.php"; ?>
		<style>
            .product-img a img{
                height: 200px;
				width: 100%;
            }
			.product-img-topselling a img{
				height: 40px;
			}
        </style>
	</body>
</html>
