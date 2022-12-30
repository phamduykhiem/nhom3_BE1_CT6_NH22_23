<?php include 'headers.php';

?>
<style>
	.product-img a img{
		width: 100%;
		height: 200px;
	}
	.product-img-topsell img{
		width: 20%;
		height: 50px;
	}
</style>
		<!-- /NAVIGATION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
							<img src="./img/lapGaming1.jpg" alt="" srcset="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="store.php?Typeid=1&soTrang=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/newphone.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Smartphones<br>Collection</h3>
								<a href="store.php?Typeid=2&soTrang=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/lgload.webp	" alt="">
							</div>
							<div class="shop-body">
								<h3>Speakers<br>Collection</h3>
								<a href="store.php?Typeid=3&soTrang=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<li>
									<label class="phanLoai" id ="1" ><a>Laptops</a></label></li>
									<li><label class="phanLoai" id ="4" ><a>PC</a></li>
									<li><label class="phanLoai" id ="3" ><a>Speakers</a></li>
									<li><label class="phanLoai" id ="2" ><a>Smartphones</a></li>
									<li><label class="phanLoai" id ="5" ><a>Tablets</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="produu col-md-12">
						<div class="row">
							<div class="products-tabs" >
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php
										 require "newproducts.php";
										 require "protypes.php";
										$newproducts=new Newproducts;
										$getnewproducts =$newproducts ->getNEWproducts();
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
											echo "<div class='product'>
											<div class='product-img' >
										
											<a href='detail.php?id=$id&typeid=$typeid'><img src='./img/$img' alt=''></a></h3>
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
													</div>
											</div>
											<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
										</div>";
										}
										?>
									</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>
									
								</div>
								<!-- /tab -->
							
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class=" col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li><label class="phanLoaiSell" id ="1" ><a>Laptops</a></label></li>
									<li><label class="phanLoaiSell" id ="4" ><a>PC</a></li>
									<li><label class="phanLoaiSell" id ="3" ><a>Speakers</a></li>
									<li><label class="phanLoaiSell" id ="2" ><a>Smartphones</a></li>
									<li><label class="phanLoaiSell" id ="5" ><a>Tablets</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="prosell col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
										require_once "topsell.php";
										$topsell=new Topsell;
										$gettopsell=$topsell->gettopsell();
										foreach($gettopsell as $value)
										{
											
											$img=$value['image'];
											$name=$value['name'];
											$oldprice=$value['price'];
											$newprice=$oldprice*((100-0.03)/100);
											$VND=number_format($newprice);
											$VNDoldprice=number_format($oldprice);
											$tempt=" VND";
											$id=$value['id'];
										echo "<div class='product'>
											<div class='product-img'>
											<h3 class='product-name'><a href='detail.php?id=$id&typeid=$typeid'><img src='./img/$img' alt=''></a></h3>
												<div class='product-label'>
													<span class='sale'>-30%</span>
													<span class='new'>NEW</span>
												</div>
											</div>
											<div class='product-body'>
												<p class='product-category'>Category</p>
												<p style = 'display : none' id = 'getid' style = >$id</p>
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
												</div>
											</div>
											<div class='add-to-cart'>
											<div class = 'sua'>
											<button class = 'but'>-</button><input class = 'int' value = '1' type='text'><button class = 'but1'>+</button>
											</div> <br>
												<button id = 'addc' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
											</div>
										</div>";
										}
										
										?>	
									</div>
										<!-- /product -->
										<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
								<!-- product widget -->
								<?php 
								
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->get3topsell();
								foreach($gettopsell as $value):
								?>
								
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								
								<?php endforeach; ?>
								</div>
						<div>
								<!-- product widget -->
								<?php 
								
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->getnext3topsell();
								foreach($gettopsell as $value):
								?>
								
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								
								<?php endforeach; ?>
								</div>
								<!-- /product widget -->
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-4">
						<div>
								<?php 
								
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->getnext3topsell();
								foreach($gettopsell as $value):
								?>
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<?php endforeach;?>
							</div>
							<div>
								<?php 
								
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->get3topsell();
								foreach($gettopsell as $value):
								?>
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href=''detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<?php endforeach;?>
							</div>
								<!-- /product widget -->
						</div>
					</div>
					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
						<div>
								<?php 
								
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->getlast4topsell();
								foreach($gettopsell as $value):
								?>
								
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								
								<?php endforeach; ?>
								</div>
								<!-- product widget -->
								<div>
								<?php 
							
								require_once "topsell.php";
								$topsell=new Topsell;
								$gettopsell=$topsell->get3topsell();
								foreach($gettopsell as $value):
								?>
								
								<div class="product-widget">
									<div class="product-img-topsell">
									<a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><img style="width = 100px" src="./img/<?php echo $value['image']?>" alt=""></a></h3>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href='detail.php?id=<?php echo $value['id']?>&typeid=<?php echo $value['type_id']?>'><?php echo $value['name']?></a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								
								<?php endforeach; ?>
								</div>
								<!-- /product widget -->
						
					</div>
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
		<script src="js/event.js"></script>
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
	</body>
</html>
