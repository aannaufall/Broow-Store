<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="index.php"><img src="../img/logo_nm_broow.png" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="index.php">Home</a></li>
                                    <li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product</a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="produk.php">Kaos</a></li>
			                  				<li><a href="kemeja.php">Kemeja</a></li>
			                  				<li><a href="boxer.php">Boxer</a></li>
											<li><a href="celanapendek.php">Celana Pendek</a></li>
											<li><a href="jaket.php">Jaket</a></li>
			                			</ul>
			              			</li>
			              			<!-- <li><a href="customgambar.php">Custom</a></li>	            
									<li><a href="testimoni.php">Testimonial</a></li> -->
                                    <li><a href="detail.php">Cart</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: orange;"><b>Hi, <?php echo $_SESSION['fullname'] ?></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="index1.php">Dashboard Customer<b></b></a></li>
			                  				<li><a href="../logout.php">Logout</a></li>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->