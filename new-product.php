<?php 
include('header.php');
$sql="SELECT * FROM product ORDER BY id_product DESC  ";
$sp_moi = mysqli_query($conn,$sql);
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body> -->
	<main class="containers">
		<!-- new-product -->
		<section class="new-product common-product">
			<div class="title">
				<h2><a href="">Sản phẩm mới</a></h2>
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
								<a href=""><?php echo $row_sp_moi['name'] ?></a>
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
    </main>
<!-- 	
</body>
</html> -->
<?php
include('footer.php');
 ?>