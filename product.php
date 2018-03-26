<!doctype html>
<html lang="en">

<?php include 'source.php' ?>

<body id="page-top" data-spy="scroll" data-target="#fixed-collapse-navbar" data-offset="120">

<div class="loader">
<div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
</div>
<!-- Main-Navigation -->
<?php include 'header.php' ?>
<section class="produk-rotator">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
		  <div id="paralax-slider" class="owl-carousel" style="height:1000px">
			<div class="item">
			</div>
			
		  </div>		  
      </div>
    </div>
  </div>
</section><!-- What We Do Section -->
<section class="we-do bg-white padding">
	<h2 style="text-align:center;color:#A3CD69;margin: -50px 0 30px 0">Pilihan Produk</h2>
  <div class="container">
    <div class="row">
		<div class="col-lg-12">
			<div class="slider">
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="images/blue_sky.jpg" style="width:100%"></img> 
					<div class="do-wrap text-center" style="color:#a3cd69">
						<a href="#." class="readmore white-text">Sky Blue Closet</a>
					</div> 
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="images/pink.jpg" style="width:100%"></img> 
					<div class="do-wrap text-center" style="color:#a3cd69">
						<a href="#." class="readmore white-text">Pink Closet</a>
					</div>  
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="images/opaque.jpg" style="width:100%"></img> 
					<div class="do-wrap text-center" style="color:#a3cd69">
						<a href="#." class="readmore white-text">Opaque Closet</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<img src="images/ivory.jpg" style="width:100%"></img> 
					<div class="do-wrap text-center" style="color:#a3cd69">
						<a href="#." class="readmore white-text">Ivory Closet</a>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</section>




<!--What We Offer-->


<!-- Responsive image with left -->
<section id="responsive" class="padding" style="background:#d0e5b3">
	<h2 style="text-align:center;color:#fff;margin: -50px 0 30px 0">Apa Kata Mereka</h2>
  <div class="container-fluid">
    <div class="row responsive-pic">
		<div class="col-md-2 col-lg-2">
		</div>
		<div class="container wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
			<div class="row">
				<div class="col-md-5 col-sm-5" style="background:#fff;padding:50px;margin-left:30px">
					<div class="col-lg-10" style="margin-right:-10px">
						<h3 style="text-transform:unset">“Setelah beli toilet FWC
						untuk proyek saya, semua
						proyek lain saya hanya
						mau pakai FWC saja.
						Barangnya kuat dan
						mengkilap, pengiriman
						cepat, dan harganya juga
						bagus. Kalau pakai merk
						lain, kadang satu dua 
						produk yang harus di retur,
						kalau FWC 100% kualitas
						super.”</h3><br><br>
						<p>Budiman Nyotowidjojo</p>
						<h5><b>KONTRAKTOR</b></h5>
					</div>
				</div>
				<div class="col-md-3 col-sm-3" style="margin-left:-17px"> 
					<img src="images/testimoni.jpg" alt="fully responsive" class="img-responsive"> 
				</div>
			</div>
		</div>
		<div class="col-md-2 col-lg-2">
		</div>
    </div>
  </div>
</section>

<!-- Paralax Effect Section -->
<section id="slogan" class="wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms"style="background:#fff;color:rgb(163, 205, 105)"> 
  	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center padding">Kenapa Kamu Membutuhkan Kloset Jongkok?</h2>
			</div>
			<div class="col-lg-12">
				<div class="item"> 
					<div class="image text-center">
						<section id="slogan" class="wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms"> 
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<video src="movie.ogg" controls>
											Your browser does not support the video tag.
										</video> 
									</div>
								</div>
							</div>
						</section> 
					</div><br>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Us -->

<!-- Footer-->
<?php include 'footer.php' ?>

 <a href="#." class="go-top text-center"><i class="fa fa-angle-double-up"></i></a>

<?php include 'sourcejs.php' ?>
<script>
	$('.slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    infinite: true,
    cssEase: 'linear',
		arrows: true,
});
</script>
</body>
</html>
