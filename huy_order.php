<!-- <script> -->
	<!--  // confirm("Bạn có muốn hủy đơn hàng?");
	 //  if (result == true) {
	 //  alert("Cám ơn đã truy cập!");
	  // <?php 
   //        session_start();
		 //  session_destroy();
	  //  ?>
	    // window.location = "index.php"; 
	}
	// else {
	//    window.location = "custommer.php"; 
	// }  -->
<!-- </script> -->
<?php
session_start();
session_destroy();
echo '<pre>';
 ?>
  <script>
  	alert("Đơn hàng của bạn đã bị hủy");
  window.location="index.php";
</script>