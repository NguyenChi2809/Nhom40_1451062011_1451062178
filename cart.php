<?php 
session_start();
include 'header.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- <link rel="stylesheet" href="puclic/plugins/fontawesome-free-5.0.6/web-fonts-with-css/"> -->
	<script src="puclic/plugins/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.js"></script>
	<script src="puclic/plugins/JS/jquery.js"></script>
	 <script src="puclic/plugins/JS/update_delete.js" type="text/javascript" charset="utf-8" async defer></script>
	<style>
		.tittle_cart{
			color: #e00000;
			font-weight: 15px;
			border-bottom: 4px solid #d3d1d1;
			margin-top:50px;
		}
		.table-cart{
			margin-top: 40px;
			margin-bottom: 50px;
			border-collapse: collapse;
			width: 100%;
			font-size: 15px;
		}
		.table-cart,.table-cart tr, .table-cart td{
			border: 1px solid black;
		}
		.table-cart tr{
			height: 50px;
		}
		.table-cart tbody tr:hover {background-color: #e5e5e5;}
		.table-cart thead{
			background: #56aaff;
			font-size: 20px;
			color: #fff;
			text-align: center;
		}
		
		

	</style>
</head>
<body>
	
	<div class="containers">
		<!-- table -->
		<div class="tittle_cart">
			<h2>GIỎ HÀNG</h2>
		</div>
		<?php 
		// cap nhat gio hang
		if (isset($_GET["id"]) && isset($_GET["sl"])) {
			// $sql="SELECT * FROM product where id_product=".$_GET["id"];
			// $stmt = $conn -> prepare($sql);
			// $stmt -> execute();
			// $data = $stmt -> fetch();
			$sql="SELECT * FROM product where id_product=".$_GET["id"];
			$data_sql = mysqli_query($conn,$sql);
            $data = mysqli_fetch_array($data_sql);
			if ($_GET["sl"]>0) {
				$_SESSION["cart"][$_GET["id"]]=array(
					 'sl' =>$_GET["sl"],
	                 "image" =>$data['image'],
	                 'name' =>$data['name_product'] ,
	                 "id" =>$data['id_product'],
	                  "sale"=>$data['sale'],
	                 "price"=>$data['price']);

				
			}
			else{
				unset($_SESSION["cart"][$_GET["id"]]);
			}
			
		}
		if (isset($_GET["id"]) && isset($_GET["action"])) {
                   unset($_SESSION["cart"][$_GET["id"]]);
		}

		 ?>
		<table class="table-cart">
			<thead>
				<tr>
					<td>STT</td>
					<td>Ảnh sản phẩm</td>
					<td>Tên sản phẩm</td>
					<td>Số lượng</td>
					<td>Giá bán</td>
					<!-- <td>Giá KM</td> -->
					<td>Thành Tiền</td>
					<td>Công cụ</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				// $cart=$_SESSION['cart'];
				// if (isset($_POST['update']) && count($cart) != "") {
				// 	$soluong_cn = $_POST['soluong'];
				// 	foreach ($soluong_cn as $id => $sl) {
				// 		$_SESSION['cart'][$id] =$sl;
				// 	}
				// }
                
				if (!empty($_SESSION['cart'])) {
					 $total = 0;
					$i=0;
					foreach ($_SESSION['cart'] as $row){
						$i++;
						?>
						<tr>
							<td><?php echo $i ?></td>

							<td><img style="width: 100px;height: 100px; margin:10px 0px 10px 80px;" src="image/<?php echo $row["image"] ?>" alt=""></td>

							<td><?php echo $row["name"] ?></td>

							<td><input size="2" type="text" name="sl_<?php echo $row["id"] ?>" id = "sl_<?php echo $row["id"] ?>" value="<?php echo $row["sl"]; ?>"></td>
							<!-- <td><?php echo $row["sl"]; ?></td> -->

							  <td><?php if($row["sale"]!=0)
							           {
							           	echo $row["price"];
							            echo '<br>';
							           	echo 'Sản phẩm KM : ';
							           	echo $row["sale"];
							           }
							           else{
							           	echo $row["price"];
							           } ?></td> 
							  <!--  <td><?php echo $row["price"];?> </td> 

							  <td><?php echo $subtotal = ($row["sl"]) * ($row["price"]) ?></td>   -->

							   <td><?php if($row["sale"]!=0)
							       {
							        echo $subtotal = ($row["sl"]) * ($row["sale"]);
							       }
							       else{
							        echo $subtotal = ($row["sl"]) * ($row["price"]);
							       
							       }?></td>
							<td> 
								<a class="a" href="javascript:void(0)" onclick="updateItem(<?php echo $row["id"]?>)">
									<i style="margin-left: 20px;" class="fas fa-edit"></i>
								
								</a>
									
								<a href="javascript:void(0)" onclick="deleteItem(<?php echo $row["id"] ?>)">
									<i class="far fa-trash-alt"></i>
								</a>
							</td>


						</tr>
					
                <?php
                $total +=  $subtotal;
                    }
				}
				else{
					 $total = 0;
				} ?>
				

				<tr>				    					
					<td style="color:#333333; font-size:25px; " colspan="7">
						<div style="float: right;">
							<h2>Tổng Tiền: <?php echo $total ?></h2>
						</div>
                        
					</td>
				</tr>
			</tbody>
		</table>
		
		<div style="margin:0 0 40px 750px; ">

			<a class="a" href="custommer.php" type="button" style="background:#FDA30E; color: #fff;height: 35px; width: 90px; text-align:center; padding-top:6px; " >Thanh toán</a>
			<!-- <button href="custommer.php">Thanh toán</button> -->
			<a class="a" href="index.php" type="button" style="background:#FDA30E; color: #fff;height: 35px; width: 150px; text-align:center; padding-top:6px; " >Tiếp tục mua hàng</a>
		</div>
	</div>
	
</body>
</html>

<?php include 'footer.php'; ?>