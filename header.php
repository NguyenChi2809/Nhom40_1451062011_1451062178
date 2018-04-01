<?php 
include 'connect.php';
$sql = "select * from catalog";
$result= mysqli_query($conn,$sql);
// $stmt = $conn -> prepare($sql);
// $stmt ->execute();
// $result = $stmt -> fetchAll();

$sql_img = "SELECT * from image_header ORDER BY id_img DESC LIMIT 1,3";
$img_header= mysqli_query($conn,$sql_img);
// $stmt_img = $conn ->prepare($sql_img);
// $stmt_img ->execute();
// $img_header = $stmt_img ->fetchAll();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="puclic/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="puclic/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="puclic/plugins/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="puclic/plugins/JS/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- <script src="puclic/plugins/JS/slide_product.js"></script> -->
</head>
<body>
	<header>
		<!-- begin contact -->
		<div class="contact ">
			<div class="containers">
				<div style="padding: 15px;" class=" row ">
					<div class="col-md-4 ">
						<i class="fa fa-phone-square fa-2x" style=" color: #FF9900;"   aria-hidden="true"></i>
						
						<span>0989535530 (24/7)</span>
					</div>
					<div class="col-md-4">
						<a class="a" href="">
							<i class="fa fa-envelope fa-2x" style=" color: #FF9900;" aria-hidden="true">
								
							</i>
							<span>nguyenchi28091995@gmail.com</span>
						</a>
						
					</div>
					<div class="col-md-4 ">
						<a style="margin-left: 90px;" class="a" href="cart.php">
							<i class="fa fa-shopping-cart fa-2x" style=" color: #FF9900;" aria-hidden="true">
								
							</i>
							<span>Giỏ Hàng</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end contact -->
		<!-- begin logo -->
		<div class="menu1">
			<div class="containers">
				<div class="row">
					<a href="homepage.php">
						<div class="col-md-2 ">
							<img class="img-logo" src="image/logo.jpg" alt="">
							
						</div>
						<div class="tittle-logo col-md-4 ">
							<h1> PHONG THỦY VIỆT</h1> 
							
						</div>
					</a>
					
					<div class="col-md-6">
						<!-- <div class="banner"> -->
							<!-- <img class="img-banner" src="image/banner-demo.jpg" alt=""> -->
						<!-- </div> -->
							<div class="form-search">
							
								<form action="search-product.php" method="POST">
									<input class="search" type="text" name="search-keywords" value="" placeholder="Nhập từ tìm kiếm..."> 
									<button class="button-search" type="submit" name="btn-search">Tìm Kiếm</button>
								</form>
							</div>	
						</div>
					

				</div>
			</div>
			
		</div>
		<!-- end logo -->
		<!-- begin menu -->
			<!-- <nav class="menu ">
				<div class="containers">
					<ul>
						<li><a href="index.php">Trang Chủ</a></li>
						<li>
							<a href="">Sản phẩm</a>
							<ul class="sub-menu">
								<?php foreach ($result as $row):?>
									<li><a href="catalog-product.php?id=<?php echo $row['id_catalog'] ?>"> <?php echo $row['name_catalog']; ?></a></li>
								<?php 
								endforeach
								 ?>
								
							</ul>
						</li>
						<li><a href="">Tin Tức</a></li>
						<li><a href="">Giới Thiệu</a></li>
						<li><a href="">Liên hệ</a></li>
					</ul> 

				</div>
			</nav> -->
            <nav class="menu">
				<div id="menu">
				    <ul>
				        <li><a href="index.php">Trang Chủ</a></li>
				        <li><a href="#">Giới thiệu</a></li>
				        <li><a href="">Sản phẩm</a>
							<ul class="sub-menu">
								<?php foreach ($result as $row):?>
									<li><a href="catalog-product.php?id=<?php echo $row['id_catalog'] ?>"> <?php echo $row['name_catalog']; ?></a></li>
								<?php 
								endforeach
								 ?>
								
							</ul>
						</li>
				        <li><a href="huongdan.php">Hướng dẫn mua hàng</a></li>
						<!-- <li><a href="">Giới Thiệu</a></li>
						<li><a href="">Liên hệ</a></li> -->
				    </ul>
				</div>
			</nav>
		<!-- end menu -->
		
		<!-- begin header-img -->
		 <div class="slideshow_imgheader  containers">
			
					 <div class="w3-content w3-section" >
					<?php foreach ($img_header as $row_img){?>
				         <img class="mySlides" style="height:450px;" src="image/<?php echo $row_img['image'] ?>" alt="">
						<div class="text-header"><?php echo $row_img['tittle'] ?></div>
						
				    <?php
					} ?>
					<button style="margin-left: 250px;margin-top: 140px;" class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
					<button style="margin-right:250px;margin-top: 140px;" class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>


					</div>	
											
		</div> 
		<!-- end header-img -->

		

	</header>
	<script>

		var myIndex = 0;
		carousel();
		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 80000); // Change image every 2 seconds
		}
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}

	</script>
</body>
</html>