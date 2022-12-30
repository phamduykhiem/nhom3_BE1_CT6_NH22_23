<?php
include 'headers.php';
require_once "newproducts.php";
$products=new Newproducts;
$getproduct =$products->getproductsid($_GET['id']);
$productstype=new Newproducts;
$getproducttype =$productstype->getproducts($_GET['typeid']);
$getnametype=$products->getnametype($_GET['typeid']);
$details = new Newproducts;
$getdetails = $details->getdetails($_GET['id']);
$review = new Newproducts;
$getreview = $review ->getreview($_GET['id']);
 ?>
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
							<?php 
								foreach($getnametype as $value){
								$typeid=$value['type_id'];
							?>
							<li><a href="store.php?Typeid=<?php echo $typeid?>"><?php echo $value['type_name'] ?></a></li>
							<?php };?>
							<?php 
								foreach($getproduct as $value){
							?>
							<li class="active"><?php echo $value['name'] ?></li>
							<?php };?>
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
					<!-- Product main img -->
					<?php foreach ($getproduct as $key => $value) { ?>
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-1'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-2'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-3'] ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-1'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-2'] ?>" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/<?php echo $value['image-3'] ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->

					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $value['name']?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price"><?php echo number_format($value['price'])?> <del class="product-old-price">$990.00</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?php echo $value['desciption'] ?></p>
							<div class="add-to-cart">
							<button  id = '<?php echo $value['id']; ?>' class="addcc add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
							</ul>
							<ul class="product-links">
								<li>Category:</li>
								<?php 
								foreach($getnametype as $value){
								$typeid=$value['type_id'];
								?>
								<li><a href="store.php?Typeid=<?php echo $typeid; ?>"><?php echo $value['type_name'] ?></a></li>
							<?php };?>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<?php }?>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
									<?php 
								foreach($getproduct as $value){
							?>
										<div class="col-md-12">
											<p><?php echo $value['desciption'] ?></p>
										</div>
										<?php };?>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<?php
											foreach($getdetails as $values){
												?>
												<div class="col-md-12">
													<h4>MÀN HÌNH: <?php echo $values['screen'];?></h4>
													<h4>CPU: <?php echo $values['cpu'];?></h4>
													<h4>RAM: <?php echo $values['ram'];?></h4>
													<h4>ĐỒ HỌA: <?php echo $values['graphics'];?></h4>
													<h4>HỆ ĐIỀU HÀNH: <?php echo $values['osystem'];?></h4>
												</div>
											<?php
											}
											?>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										
										<div class="col-md-6">
											<div id="reviews">
											<div class="box-scroll">
												<ul class="reviews">
													<li>
													
														<div class="review-heading">
															<?php
															foreach($getreview as $values){
															?>
																<h5 class="name"><?php echo $values['nameuser']?></h5>
																<p class="date"><?php echo $values['sub_time']?></p>
																<?php
																//Đánh giá bằng sao
																?>
																<div class="rating-stars">
																<?php
																$star = 5 - $values['rating'];
																if($values['rating']>0){
																	while($values['rating'] > 0){
																	?>
														
																	<i class="fa fa-star"></i>
																	
																	<?php
																	$values['rating']--;
																	}
																	if($star > 0){
																		while($star > 0){
																	?>
																		
																		<i class="fa fa-star-o"></i>	
																		
																	<?php
																		$star--;
																		}
																	}
																}
																?>
															</div>													
															<div class="review-body">
																<p><?php echo $values['reviewuser']?></p>
															</div>
															<?php
																}
															?>
														</div>
													
													</li>
												</ul>
												</div>
											</div>
										</div>
										
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form" action="addreview.php?id=<?php echo $_GET['id'];?>&typeid=<?php echo $_GET['typeid'];?>" method="post">
													<input class="input" type="text" name="userName" placeholder="Your Name">
													<input class="input" type="email" name="userEmail" placeholder="Your Email">
													<textarea class="input" name="userReview" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn" type="submit" value="Submit">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->				
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<?php	
								$count = 0;
								foreach($getproducttype as $row) {
									$count++;
									if($count <= 4){
									$id=$row['id'];
									$typeid=$row['type_id'];
							?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
							<a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><img src="./img/<?php echo $row['image']?>" alt=""></a>
								<div class="product-label">
									<span class="sale"><?php echo $row['discountproducts'] ?>%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $row['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($row['price']) ?></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button  class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div>
					<?php }}?>
					<!-- /product -->

					<!-- product -->
					
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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
		<?php require "js/eventdetails.php"; ?>		
		<style>
			.box-scroll{
				width: 550px;
				height: 400px;
				
				overflow-y: scroll;
				padding: 0 10px;
			}
			.product-img a img{
                height: 200px;
				width: 100%;
            }
		</style>
	</body>
</html>