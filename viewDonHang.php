<?php
require "headers.php";
?>
<style>
	.kk
	{
		position: fixed;
		background:black;
	bottom:0;
	padding: 5px;
	z-index: 500;
	}
</style>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Order</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Order</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<!-- cart -->
        <?php 
		$viewcart =new Cart;
		$getcart=$viewcart->viewgiohang($_SESSION['user']);
		?>
		<?php
										 require "newproducts.php";
										 require "protypes.php";
										$newproducts=new Newproducts;
										$getnewproducts =$newproducts ->getNEWproducts();
											foreach($getcart as $value)
											{?> <h3>ĐƠN HÀNG <?php echo $value['maDonHang']; ?></h3>
                                            <p>Địa chỉ giao: <?php echo $value['diaChi']; ?></p>
                                            <p>SĐT: <?php echo $value['phone']; ?></p>
                                            <p>Ghi chú: <?php echo $value['note']; ?></p>
                                            <p>Ngày đặt: <?php echo $value['ngay']; ?></p>
                                            <?php 
                                                    $getThongTin=$viewcart->viewthongtin($value['maDonHang']);
                                            foreach($getThongTin as $value1){?>
											<div style = "padding: 10px 0">
							<div class="col-md-12 products-tabs" >
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
<?php
											
											$img=$value1['image'];
											$name=$value1['name'];
											$oldprice=$value1['price'];
											$newprice=$oldprice*((100-0.03)/100);
											$VND=number_format($newprice);
											$VNDoldprice=number_format($oldprice);
											$tempt=" VND";
											$id=$value1['id'];
											$typeid =$value1['type_id'];
											echo "<div class='product' style = 'padding-botton=400px'>
											<div class='product-img' style='text-align:center'>
											<a href='detail.php?id=$id&typeid=$typeid'><img style='width: 300px;px' src='./img/$img' alt=''></a></h3>
												<div class='product-label'>
													<span class='sale'>-".$value1['discountproducts']."</span>
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
											<button class = 'but'>-</button><input class = 'int' value = '".$value1['soLuong']."' type='text'><button class = 'but1'>+</button>
											</div> <br>
											</div>
										</div>
									</div>
										<div id='slick-nav-1' class='products-slick-nav'></div>
								</div>
								<!-- /tab -->
							
							</div>
							</div>
						
						
					
	";	
	}} ?>
		<!-- /SECTION -->
		<div style="padding-top:200px"></div>
		<!-- NEWSLETTER -->
		<div id="newsletter"  class="section">
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
		<script>
			var brand=[];
		            function getFilter(name) {
                var filter = [];
                $('.'+name+':checked').each(function() {
                    filter.push($(this).val());
            });
            return filter;
            }
            $('.chose').click(function () {
                brand = getFilter('chose');
				console.log(brand);

            });
			$('.delee').click(function () {
                $.ajax({
                url: 'deleteviewcart.php',
                dataType: 'html',
                method: 'GET',
                data: {
                        'brand' : brand
                },
                success: function(html){
					alert(html);
                }
			});
            });
			$('.buy').click(function () {
				location.replace("checkout.php?brand="+brand);
            });
			function filterdata(brand) {
                var action = 'chay';
            
				alert(action);
                $.ajax({
                url: 'deleteviewcart.php',
                dataType: 'html',
                method: 'GET',
                data: {
                        'brand' : brand,'action':action
                },
                success: function(html){
                }
            });
		}
	</script>
		<?php require "js/events.php"; ?>
		<?php require "footer.php"; ?>
	</body>
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
</html>
