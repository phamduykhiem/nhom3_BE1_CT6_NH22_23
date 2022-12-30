<?php
        require "db.php";
        require "newproducts.php";
        require "config.php";
        $newproducts = new Newproducts();
        if(isset($_POST['action']))
        {
            $query = "SELECT * FROM `products` WHERE type_id = ".$_POST['type'];
        if(isset($_POST['min'])&&isset($_POST['max']))
        {
            $query .= " AND price BETWEEN ".$_POST['min']." AND ".$_POST['max'];
        }
        if(isset($_POST['brand']))
        {
            $brand_fitler = implode(",",$_POST['brand']);
            $query .= " AND manu_id IN($brand_fitler)";
        }
        $rerult = $newproducts -> getAjax($query);
        echo '
        <div class="clearfix visible-sm visible-xs"></div>
							<!-- product -->
							';	
								foreach($rerult as $row) {
							echo '
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/'.$row["image"].'" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">'.$row["name"].'</a></h3>
										<h4 class="product-price">'. number_format($row['price']).' VND<del class="product-old-price"> $990.00</del></h4>
										<div class="product-rating">
													</div>
													<div class="product-btns">
													<button id = "wishlist" class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													</div>
												</div>
												<div class="add-to-cart">
											<div class = "sua">
											<button class = "but">-</button><input class = "int" value = "1" type="text"><button class = "but1">+</button>
											</div> <br>
												<button id = "addc" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
											</div>
											</div>
							';
								}
    }
?>