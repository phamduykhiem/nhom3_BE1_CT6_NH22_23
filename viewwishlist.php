<?php
require "headers.php";
?>
<style>
	.wishlistview
	{
		text-align:center;
	}
	#btncart
	{
		background-color:red;
		border-color:red;
	}
	#cart
	{
		color:white;
	}
</style>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Wishlists Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Wishlist </li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<!-- wishtlist -->
		<?php 
		$view =new Wishlist;
		$getwish=$view->getviewishlist($_SESSION['user']);
		?>
	<div class="container">
		<div class="row">
		<div class="produu col-md-12">
						<div class="row" style='padding:200px'>
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
											foreach($getwish as $value)
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
											<div class='product-img' style='text-align:center'  >
											<a href='detail.php?id=$id&typeid=$typeid'><img style='width:300px' src='./img/$img' alt=''></a></h3>
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
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
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
		<?php require "js/events.php"; ?>
		<?php require "footer.php"; ?>
	</body>
</html>
