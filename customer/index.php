<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Broow Store</title> 
	<meta name="description" content="Website, Corporate, Bekasi, Garment, Sablon, Konveksi"/>
	<meta name="keywords" content="Bahan, Pakaian, Baju, Sablon" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
		<div class="da-slide">
				<h2>Kaos</h2>
				<p>Kami menjual kaos surf premium yang terbuat dari cotton 30s combed reaktif yang memiliki beberapa motif,warna dan ukuran. Kaos kami ini ada yang sablon discharge,print,ruber,raster, dan plastisol tidak pecah dan tahan panas nyaman untuk di pakai. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../img/parallax-slider/sliderkaos.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Kemeja</h2>
				<p>Kami menjual kemeja yang terbuat dari cotton. Kemeja kami memiliki beberapa kategori yaitu kemeja import premium, kemeja lokal, dan kemeja biasa.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../img/parallax-slider/kemeja2.png" alt="image03" /></div>
				
			</div>
			<div class="da-slide">
				<h2>Boxer</h2>
				<p>Kami menjual boxer premium berbahan katun halus 30s, untuk design nya full print dan ukuran nya all size. Boxer ini sangat nyaman di gunakan dan tidak terasa panas.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../img/parallax-slider/sliderboxer.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Celana Pendek</h2>
				<p>Kami menjual celana pendek berbahan twill import yang sangat nyaman di pakai. Celana pendek kami ada yang full motif dan ada juga polosan. Celana pendek ini sangat cocok untuk laki laki yang mengikuti trend di jaman sekarang. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../img/parallax-slider/slidercelanapendek.png" alt="image04" /></div>
			</div>
			<div class="da-slide">
				<h2>Jaket</h2>
				<p>Kami menjual produk jaket berbahan canvas twill tebal, untuk masalah size jaket kita ini memiliki size unisex bisa di pakai cowok dan cewek. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="../img/parallax-slider/sliderjaket.png" alt="image05" /></div>
			</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
				Broow Store merupakan toko online yang menyediakan berbagai macam kebutuhan pakaian anda, mulai dari Kaos, Kemeja, Boxer, Celana Pendek, dan Jaket. Kualitas barang tidak di ragukan lagi, untuk material bahan pakaian sangat nyaman digunakan untuk berbagai aktifitas. Harga yang kami tawarkan juga terbilang lebih murah daripada toko lain.
                </p>
        		<p><a class="btn btn-success btn-large" href="profil.php">About Us &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
			 
    		<!-- <div class="row justify-content-center">
			<div class="col-md-12"> -->
            
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 150");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span3">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="../admin/<?php echo $data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-danger">Details</a> <a href="addtocart.php?kd=<?php echo $data['kode'];?>" class="btn btn-lg btn-success">Buy &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              
              
              ?>
<!---->
      			<!-- </div>
				</div> -->
			</div>
			<!-- end: Row -->
      		
		<!--	<hr> -->
		
			<!-- start Clients List -->	
		<!--	<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>		
				</ul>
		
			</div> -->
			<!-- end Clients List -->
		
			<hr>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Kualitas Terbaik</h3>
								<p>Kami memberikan kualitas terbaik karena kepuasan pelanggan adalah tujuan utama kami.
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Kualitas Export</h3>
								<p>Kami tidak hanya menjual produk ke dalam negeri saja melainkan kami juga menjual produk ke luar negeri.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di Eat Them T-Shirt praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Sosial Media</h3>
								<p>Follow Instagram dan fanspage Facebook kami untuk mendapatkan info promo spesial setiap harinya.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					 <!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="../img/logo_nm_broow.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">
							
						<li><a href="kemeja.php">Kemeja</a></li>

						<li><a href="produk.php">Kaos</a></li>

						<li><a href="boxer.php">Boxer</a></li>

						<li><a href="celanapendek.php">Celana Pendek</a></li>

						<li><a href="jaket.php">Jaket</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->
<?php include "footer.php"; ?>


</body>
</html>