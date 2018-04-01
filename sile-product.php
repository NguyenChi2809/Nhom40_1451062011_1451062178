<?php 
include 'connect.php';

$sql="SELECT * FROM product LIMIT 0,10 ";
$sp_moi = mysqli_query($conn,$sql);

$sql_img = "SELECT * from image_header ORDER BY id_img DESC LIMIT 1,3";
$img_header= mysqli_query($conn,$sql_img);


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="puclic/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<!-- <script src="puclic/plugins/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="puclic/plugins/JS/jquery.js"></script>
	<!-- <script src="puclic/plugins/JS/slide_product.js"></script> -->

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	/*.mySlides {display:block;}*/
	</style>
</head>
<body>
	<h2 class="w3-center">Manual Slideshow</h2>

<div class="w3-content w3-section" >
	
  <div class="row " style="border: 1px solid green; ">
     <div class="mySlides">
     	<img class="col-xs-4" src="image/c212a-1-chuot-sa-kim-1-90x90.jpg">
     </div>
      <div class="mySlides">
     	<img class="col-xs-4" src="image/c052a-ty-huu-xanh-1-90x90.jpg">
     </div>
      <div class="mySlides">
     	<img class="col-xs-4" src="image/s6058-cu-thach-anh-vang-90x90.jpg">
     </div>
      <div class="">
     	<img class="col-xs-4" src="image/c052a-ty-huu-xanh-1-90x90.jpg">
     </div>

		
		<!-- <img class="mySlides col-xs-4" src="image/c052a-ty-huu-xanh-1-90x90.jpg">
		<img class="mySlides col-xs-4" src="image/c212a-1-chuot-sa-kim-1-90x90.jpg">
		<img class="mySlides col-xs-4" src="image/c052a-ty-huu-xanh-90x90.jpg"> -->
		
  </div>
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>

// var myIndex = 0;
// carousel();
// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";  
//     }
//     myIndex++;
//     if (myIndex > x.length) {myIndex = 1}    
//     x[myIndex-1].style.display = "block";  
//     setTimeout(carousel, 2000); // Change image every 2 seconds
// }
// var slideIndex = 3;
// showDivs(slideIndex);

// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }

// function showDivs(n) {
//   var i;
//   var x = document.getElementsByClassName("mySlides");
//   if (n > x.length) {slideIndex = 3}    
//   if (n < 3) {slideIndex = x.length}
//   for (i = 1; i < x.length; i++) {
//      x[i].style.display = "none";  
//   }
//   x[slideIndex-3].style.display = "block";  
// }

</script>

</body>
</html>