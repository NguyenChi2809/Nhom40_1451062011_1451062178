<?php 
// var_dump($_GET['id']);
session_start();
// session_destroy();
// echo '<pre>';
// print_r($_SESSION);die;

include 'connect.php';


if(isset($_GET['id'])){
    // echo $id;
    $id = $_GET['id'];
    $sql="SELECT * FROM product where id_product=$id";
    var_dump($sql);
    $kq = mysqli_query($conn,$sql);
    $detail= mysqli_fetch_array($kq);
      // var_dump($detail);die;
      
	// $stmt = $conn -> prepare($sql);
	// $stmt -> execute();
	// $detail = $stmt -> fetch();
    if (!empty($_SESSION['cart'])) {
    	
    	if (isset($_SESSION['cart'][$id])) {
		
			$_SESSION['cart'][$id] =  array('sl'=>$_SESSION['cart'][$id]['sl']+1,
				                            "image" =>$detail['image'],
				                            'name' =>$detail['name_product'] ,
				                            "id" =>$detail['id_product'],
				                            "sale" =>$detail['sale'],
				                             "price"=>$detail['price']);
			
		}
		else{
		
			$_SESSION['cart'][$id] =  array('sl' =>1,
				                            "image" =>$detail['image'],
				                            'name' =>$detail['name_product'] ,
				                            "id" =>$detail['id_product'], 
				                            "sale" =>$detail['sale'],
				                            "price"=>$detail['price']);
		
		}
    }
    else{
 
    	 $_SESSION['cart'][$id] =  array('sl' =>1,
    	 	                             "image" =>$detail['image'],
    	 	                             'name' =>$detail['name_product'] ,
    	 	                             "id" =>$detail['id_product'], 
    	 	                             "sale" =>$detail['sale'],
    	 	                             "price"=>$detail['price']);
		
    }
     
   ($_SESSION['cart']);
    
 }
 else{
 	
 }
 // echo '<pre>'; 	
 // var_dump($_SESSION['cart']);die;
 header("location:cart.php");
 ?>