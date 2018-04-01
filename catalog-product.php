<?php 
include('header.php');
$id = $_GET['id'];
$sql="SELECT * FROM product,catalog 
	  where (product.id_catalog=catalog.id_catalog) and (product.id_catalog = $id)
	  ORDER BY id_product DESC";
 // $sql = " SELECT * FROM product where id_catalog=$id " ;
$sp_moi = mysqli_query($conn,$sql);
$row_moinhat = mysqli_fetch_array($sp_moi);
   
// '<pre>';
	

// var_dump($row_moinhat);die;
?>

	<main class="containers">
		<!-- new-product -->
		<section class="new-product common-product">
			<div class="title">
				<h2>
					<a href="">
					 <?php 
                        
						echo $row_moinhat['name_catalog']; 
					  ?>
				    </a>
				</h2>
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
    </main>

<?php
include('footer.php');
 ?>