<?php
session_start();
									require "db.php";
									require "config.php";
									require "cart.php";
									require "wishlist.php";
									require "manufactures.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.int
			{
				width: 30px;
			}
			.products-slick .slick-list {
				padding-bottom:100px;
			}
			.but1
			{
				width: 30px;
			}
			.but
			{
				width: 30px;
			}
			.header-ctn
			{
				display: inline;
			}
		</style>
    </head>
	<body>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><div class="dropdown">
									<a id = 'kk' class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-heart-o"></i>
										<span id='kk'>My acounnt</span>
										<div class="qty"></div>
									</a>
									<div id = 'hh' class="cart-dropdown">
										<div class="cart-btns">
											<a href="#">View profile</a>
											<a href="unset.php">Log out <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
							</li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="result.php?soTrang=1" method="get">
									<select class="input-select" name="choice">
										<option value="Categories">All Categories</option>
										<option value="Laptops">Laptops</option>
										<option value="Smartphones">Smartphones</option>
										<option value="PC">PC</option>
										<option value="Speakers">Speakers</option>
										<option value="Tablets">Tablets</option>
									</select>
									<input style="display:none;" class="input" value ="1" name="soTrang" placeholder="Search here">
									<input class="input" name="keyword" placeholder="Search here">
									<button type="submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div class="dropdown">
										<a id = 'lili' class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-heart-o"></i>
										<span >Your Wish</span>
										<div id= "sl" class="qty"></div>
										</a>
										<div id = 'hh' class=" wishpro cart-dropdown" >
											<div class=" cart-list">
											<?php
												if(isset($_SESSION['user']))
												{
												$wish=new Wishlist;
												$getwish =$wish->getwishtype($_SESSION['user']);
												foreach ($getwish as $value){
													$id=$value['id'];
													$typeid=$value['type_id'];
											?>
											<div  class="product-widget">
												<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
												</div>
												<div class="product-body">

													<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><?php echo number_format($value['price']).'VND'?></h4>
												</div>
												<div class = "kkk ooo" id = "<?php echo $value['id']; ?>"><button id = "<?php echo $value['id']; ?>" class="delete"><i class="fa fa-close"></i></button></div>
												
											</div>
											<?php }}?>
											<div class="cart-btns">
												<a href="viewwishlist.php">View Wishlist</a>
											</div>
										</div>
									</div>
								</div>							
								<!-- /Wishlist -->
								<!-- Cart -->
								
								<div class="dropdown">
									<a id = 'jj' class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div id= "sl1" class="qty"></div>
											</a>
											<div id = 'hehe' class="cartpro cart-dropdown" >
												<div class=" cart-list">
													<?php
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
															$id=$value['id'];
													$typeid=$value['type_id'];
													?>
													<div  class="product-widget">
													<div class="product-img">
													<img src="./img/<?php echo $value['image'] ?>" alt="">
													</div>
													<div class="product-body">
													<h3 class="product-name"><a href="detail.php?id=<?php echo $id ?>&typeid=<?php echo $typeid ?>"><?php echo $value['name'] ?></a></h3>
													<h4 class="product-price"><span class="qty"><?php echo $value['soLuong'].'x'; ?></span><?php echo number_format($value['price']).'VND'?></h4>
													</div>
													<div class = "hhh" id = "<?php echo $value['id']; ?>"><button class="delete"><i class="fa fa-close"></i></button></div>
													<?php }}?>
												</div>
												<div class="cart-summary">
												<small><?php echo $a ?> Item(s) selected</small>
												<h5>SUBTOTAL: <?php echo number_format($sum).'VND' ?></h5>
												</div>
												<div class="cart-btns">
												<a href="viewcart.php">View Cart</a>
												<a href="viewDonHang.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
									</div>
								</div>
								
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->	
			</div>
			<!-- /MAIN HEADER -->
		</header>
<!-- NAVIGATION -->
<nav id="navigation">
<!-- container -->
<div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
        <!-- NAV -->
        <ul class="main-nav nav navbar-nav">
			<li ><a href="index.php">Home</a></li>
						<li><a href="store.php?Typeid=0&soTrang=1">Hot Deals</a></li>
						<li><a href="store.php?Typeid=1&soTrang=1">Laptops</a></li>
						<li><a href="store.php?Typeid=4&soTrang=1">PC</a></li>
						<li><a href="store.php?Typeid=3&soTrang=1">Speaker</a></li>
						<li><a href="store.php?Typeid=5&soTrang=1">tablets</a></li>
						<li><a href="store.php?Typeid=2&soTrang=1">Smartphones</a></li>			
        </ul>
        <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
</div>
<!-- /container -->
</nav>
