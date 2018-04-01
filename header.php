<!-- begin header --> 
<header>
	<div class="logo">
		<a href="#">
			<img src="../images/logo.png" alt="">
		</a>
	</div>
	<div class="container">
		<div class="header-main">
			<div class="col-2">
				<div class="alert">
					<!-- <i class="fa fa-envelope icon-left" aria-hidden="true"></i>
					<i class="icon icon-right down-right fa fa-angle-right" aria-hidden="true"></i> -->
				</div>
				<div class="alert">
					<!-- <i class="fa fa-bell icon-left" aria-hidden="true"></i>
					<i class="icon icon-right down-right fa fa-angle-right" aria-hidden="true"></i> -->
				</div>
			</div>
			<div class="col-6">
				<form action="search.php" class="input-form">
					<input type="text" value="Tìm kiếm" name="" placeholder="Tìm kiếm ...." class="form-control">
					<button type="submit" class="btn-search">
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>
			<div class="col-4">
				
                 <img style="width: 25px; height: 25px; float: left; margin-left:30px;" src="../images/offline_user.ico" alt="">
				<p style="color: #fff;margin-top: 5px ;float: left;">
					

					<?php 
					 session_start();
					echo $_SESSION['username'];
					 ?>	 	
			    </p>
			     <img style="width: 25px; height: 25px; float: left; margin-left:20px;" src="../images/offline_user.ico" alt="">
				<a style="color: #fff;margin-top: 5px ;float: left;" href="../login/logout.php">
				Đăng xuất
			    </a>
			   <!--  <div style="float: right;">
			    	 <img style="width: 25px; height: 25px; float: left;" src="../images/logout.ico" alt="">
			    	 <a href="../login/logout.php">Đăng xuất</a>
			    </div> -->

			   
				<!-- <div class="account">	
					<p>
						<?php 

						 session_start();
						echo $_SESSION['username'];
						 ?>
					</p>
					
					<nav class="menu-account" id="menu"> -->
						<!-- <ul>
							<li>
								<a href="">
								<i class="fa fa-user icon-left" aria-hidden="true"></i>
								Tiểu sử
								</a>
							</li>
							<li>
								<a href="">
								<i class="fa fa-user icon-left" aria-hidden="true"></i>
								Thông báo
								</a>
							</li>
							<li>
								<a href="">
								<i class="fa fa-cog" aria-hidden="true"></i>
								Thiết lập
								</a>
							</li>
							<li>
								<a href="">
								<i class="fa fa-sign-out" aria-hidden="true"></i>
								Đăng xuất
								</a>
							</li>
						</ul> -->
				<!-- 	</nav>
				</div> -->
			</div>
	</div>	
</header>
	<!-- end header