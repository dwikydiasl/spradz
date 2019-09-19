<?php
include "header.php";
?>

<section id="home" class="home">
	<div class="bg-color-overlay"></div>

	<!-- Header Menu -->

	<?php
		include "header_menu.php";
	?>

	<div class="content-home">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-7 col-lg-6">
					<div class="home-left hidden-text">
						<div>
							<h1 class="white lh-55 mb-5">
								<b>Satu Platform untuk Maksimalkan Pendapatan Anda</b>
							</h1>
							<p class="white">
								Spradz merupakan platform social media marketing yang memudahkan Influencer dan Buzzer mendapatkan campaign dari berbagai brand yang sesuai dengan kriteria
							</p>
						</div>
						<div class="btn-home">
							<a href="" data-toggle="modal" data-target=".modal-join-now" class="btn-pink mr-3">
								Coba Sekarang!
							</a>
							<a href="" class="btn-play video-btn" data-toggle="modal" data-target="#modalVideo">
								<i class="fas fa-play-circle"></i>  Lihat Video
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-6">
					<div class="hero-img hidden-hero">
						<img src="assets/img/ilustration/hero.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="masking"></div>
<!-- Modal Video-->
<div class="modal modal-video fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content bg-modal-content">
			<div class="">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<video controls id="video1">
					<source src="assets/video/spradz.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Join Now -->
	<div class="modal fade modal-join-now" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="bg-join-now">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fas fa-times"></i></span>
					</button>
					<div class="img-join">
						<img src="assets/img/ilustration/join-icon.png">
					</div>
					<div class="title-join">
						<h1><b>Gabung Spradz <br>Sekarang!</b></h1>
					</div>
				</div>
				<div class="footer-modal" align="center">
					<li>
						<a href="" class="btn-pink">Mendaftar Buzzer</a>
					</li>
					<li>
						<a href="" class="btn-pink">Mendaftar Influencer</a>
					</li>
				</div>
			</div>
		</div>
	</div>

	<section id=" panel-box" class=" panel-box">
		<div class="container" align="center">
			<li>
				<div class="item-slide item-left bg-white mobile-margin-top">
					<div class="arrow-left">
						<img src="assets/img/ilustration/left.png">
					</div>
					<img src="assets/img/ilustration/buzz.png" >
					<h4 class="purple mt-5"><b>Buzzer</b></h4>
					<div class="item-overlay right">
						<div class="description">
							<h4><b>Buzzer</b></h4>
							<p>
								Hanya dengan membagikan link bisa mendapatkan penghasilan tambahan. 
							</p>
						</div>
						<div class="detail-btn" align="center">
							<div class="btn-outline-white mb-3"> 
								<a href="" class="btn ">Pelajari Lebih</a>
							</div>
							<div class="btn-pink3">
								<a href="" class="btn ">Menjadi Buzzer</a>
							</div>								
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="item-slide item-right bg-white">
					<div class="arrow-right">
						<img src="assets/img/ilustration/right.png">
					</div>
					<img src="assets/img/ilustration/influe.png">
					<h4 class="purple mt-5"><b>Influencer</b></h4>
					<div class="item-overlay left">
						<div class="description">
							<h4><b>Influencer</b></h4>
							<p>
								Akses ke banyak campaign dari berbagai brand, produk, dan event yang bisa memaksimalkan pendapatanmu
								sebagai Influencer
							</p>
						</div>
						<div class="detail-btn" align="center">
							<div class="btn-outline-white mb-3"> 
								<a href="" class="btn ">Pelajari Lebih</a>
							</div>
							<div class="btn-pink3">
								<a href="" class="btn">Menjadi Influencer</a>
							</div>								
						</div>
					</div>
				</div>
			</li>
		</div>
	</section>

	<section id="content-influ-buzz" class="content-influ-buzz">
		<div class="container">
			<div class="row ">
				<div class="col-12 col-sm-12 col-md-8 col-lg-7">
					<div class="description-text">
						<h3 class="purple">
							Tempat yang tepat bagi<b> Influencer</b> dan <b>Buzzer</b>
							mendapatkan Campaign
						</h3>
						<p class="grey">
							Spradz merupakan platform social media marketing yang memudahkan Influencer dan Buzzer mendapatkan campaign dari berbagai brand yang sesuai dengan kriteria
						</p>
					</div>					
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-5" align="center">
					<div class="influencer-img">
						<img src="assets/img/ilustration/Influencer-image.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimoni" class="testimoni">
		<div class="container">
			<div id="slide-all-testimoni" class="content-testimoni">
				<div class="spradz-logo" align="center">
					<img src="assets/img/icon/favicon.png">
				</div>
				<h4 class="white my-3" align="center">Dengar <b> Cerita </b> Mereka!</h4>

				<div class="box-comment" align="center">
					<p class="white" >
						“Nggak perlu keahlian khusus, yang penting ada teman-teman dan jaringan aja, kamu juga harus coba!”
					</p>
				</div>

				<div class="slide-testimoni">
					<div class="owl-nav">
						<div class="owl-next">
							<i class="fas fa-chevron-left"></i>
						</div>
					</div>						
					<div class="owl-nav">
						<div class="owl-prev">
							<i class="fas fa-chevron-right"></i>
						</div>
					</div>
					<div class="owl-carousel owl-carousel2 owl-theme owl-loaded margin-owl">
						<div class="owl-stage-outer ">
							<div class="owl-stage">
								<div class="owl-item">
									<div class="slider-testimoni" align="center" > 
										<img src="assets/img/avatar/profil.png" class="avatar" >
										<h5 class="blue">Raymond Gonzales</h5>
										<p class="grey">Buzzer</p>
									</div>
								</div>
								<div class="owl-item">
									<div class="slider-testimoni" align="center" > 
										<img src="assets/img/avatar/profil2.jpg" class="avatar">
										<h5 class="blue">Chris Evans</h5>
										<p class="grey">Influencer</p>
									</div>
								</div>
								<div class="owl-item">
									<div class="slider-testimoni" align="center" > 
										<img src="assets/img/avatar/profil3.jpg" class="avatar">
										<h5 class="blue">Gal Gadot</h5>
										<p class="grey">Buzzer</p>
									</div>
								</div>
								<div class="owl-item">
									<div class="slider-testimoni" align="center" > 
										<img src="assets/img/avatar/profil4.jpg" class="avatar">
										<h5 class="blue">Tony Stark</h5>
										<p class="grey">Influencer</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="advertiser" class="advertiser bg-color2">
		<div class="container">
			<div class="content-adv">
				<div class="row ">
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<div class="img-adv hidden-hero">
							<img src="assets/img/ilustration/adv.png">
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-8 col-lg-8">							
						<div class="description-adv hidden-text2">
							<h2 class="pink ">Percayakan<b> Campaign</b> Anda!</h2>
							<p class="grey ">
								Menjadi Advertiser Spradz, menyebarkan campaign menjadi lebih cepat, tersebar luas dan berpotensi Viral. Menyebarkan campaign tentu saja menjadi lebih hemat dan efisien karena Spradz! didukung oleh jaringan Influencer dan Buzzer yang tervalidasi dengan baik.
							</p>
							<div class="img-adv-mobile">
								<img src="assets/img/ilustration/adv.png">
							</div>
							<div class="btn-readmore">
								<a href="" class="btn-pink ">Selengkapnya</a>
							</div>								
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="client" class="bg-mask3 ">
		<div class="container">
			<div id="slide-all-client" class="content-client">
				<div align="center">
					<h4 class="blue ">Client Kami</h4>
				</div>
				<div class="slide-client">
					<div class="owl-nav">
						<div class="owl-next">
							<i class="fas fa-chevron-left"></i>
						</div>
					</div>						
					<div class="owl-nav">
						<div class="owl-prev">
							<i class="fas fa-chevron-right"></i>
						</div>
					</div>
					<div class="owl-carousel owl-theme   mt-5">
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/hatari.png">
							</div>
						</div>
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/victoria.png">
							</div>
						</div>
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/asset.png">
							</div>
						</div>
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/selection.png">
							</div>
						</div>
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/m-king.png">
							</div>
						</div>
						<div class="item">
							<div class="slider-client" align="center"> 
								<img src="assets/img/ilustration/bio7.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include "footer.php";
	?>