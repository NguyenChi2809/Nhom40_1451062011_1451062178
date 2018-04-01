<?php 
include'connect.php';
$sql="SELECT * FROM product LIMIT 0,6 ";
$sp_moi = mysqli_query($conn,$sql);

// $stmt = $conn -> prepare($sql);
// $stmt -> execute();
// $sp_moi = $stmt -> fetchAll();

$sql_sale = "SELECT * FROM product WHERE sale>0 LIMIT 0,6";
$sp_sale = mysqli_query($conn,$sql_sale);
// $stmt_sale =$conn ->prepare($sql_sale);
// $stmt_sale -> execute();
// $sp_sale = $stmt_sale -> fetchAll();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="puclic/plugins/bootstrap/css/bootstrap.min.css">
	<script src="puclic/plugins/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="puclic/plugins/font-awesome/css/font-awesome.min.css">
	<script src="puclic/plugins/JS/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="puclic/plugins/JS/slide_product.js"></script>
</head>
<body>
	<main class="containers">
		<!-- sale-upto -->
		 <div class="sale-upto">
		 	<div class="img-sale">
		 		<img src="" alt="">
		 	</div>
		 </div>
		<!-- sale-upto -->
		<!-- new-product -->
		<section class="new-product common-product">
			<div class="title">
				<h2><a href="new-product.php">Sản phẩm mới</a></h2>
			</div>	
			<!-- product -->		
			<div class=" clearfix">

				<?php foreach ($sp_moi as $row_sp_moi):?>
				<div class="  col-xs-4">
					<div class="product">
						<div class="img-product">
							<a href="productdetail.php?id=<?php echo $row_sp_moi['id_product'] ?>"><img src="image/<?php echo $row_sp_moi['image'] ?>" alt=""></a>
						</div>
						<div class="name">
							<h3>
								<a href=""><?php echo $row_sp_moi['name_product'] ?></a>
							</h3>
						</div>
						<div class="price clearfix">
							<p class="new"><?php echo $row_sp_moi['price'] ?>Vnđ</p>
							<p class="old"><?php echo $row_sp_moi['sale'] ?></p>
						</div>

						<a class=" a cart" href="add-cart.php?id=<?php echo $row_sp_moi['id_product'] ?>">
							<div class="add-cart">
							     <span>
							     	Đặt Mua
							     </span>
						    </div>
						</a>
					</div>
				</div>	
				<?php
				  endforeach	
				?>			
			</div>
			<!-- product -->			
		</section>
		<!-- new-product -->

		<!-- sale-product -->
		<section class="sale-product">
			<div class="title">
				<h2><a href="sale-product.php">Sản phẩm khuyến mại</a></h2>
			</div>
			<!-- product -->
			<div class="  clearfix">
				<?php foreach ($sp_sale as $row_sp_sale): ?>
					<div class="  col-xs-4">
						<div class="product">
							<div class="img-product">
								<a href=""><img src="image/<?php echo $row_sp_sale['image'] ?>" alt=""></a>
							</div>
							<div class="name">
								<h3>
									<a href=""><?php echo $row_sp_sale['name_product'] ?></a>
								</h3>
							</div>
							<div class="price clearfix">
								<p class="new"><?php echo $row_sp_sale['price'] ?></p>
								<p class="old"><?php echo $row_sp_sale['sale'] ?></p>
							</div>

							<a class=" a cart" href="add-cart.php?id=<?php echo $row_sp_sale['id_product'] ?>">
								<div class="add-cart">
								     <span>
								     	Đặt Mua
								     </span>
							    </div>
							</a>
						</div>
					</div>	

				<?php 
                endforeach
				 ?>			
			</div>			
			<!-- product -->
		</section>
		<!-- sale-product -->


		<section class="banner">
			<div class="containers">
				<!-- <div class="col-xs-4">
					<img class=".img-circle" src="image/heo.jpg" alt="">
				</div> -->
			</div>
		</section>

		<div class="containers">
			
			<div class="sign-up">
				<h3>Đăng ký nhận tin</h3>
				<form action="puclic/plugins/dki_mail.php" method="POST">
					<input class="email" type="text" name="email" value="" placeholder="Nhập địa chỉ emai của ban..."> 
					<button class="button-email" type="submit">Đăng ký</button>
				</form>
			</div>
			
		</div>




	</main>
</body>
</html>