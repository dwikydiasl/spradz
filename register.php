<?php
include "header.php";
?>

<div class="container-fluid">
	<div id="login" class="login">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="icon-login">
					<a href="index.php">
						<img src="assets/img/icon/spradz-logo.png">
					</a>
				</div>
				<div class="img-hero-login">
					<img src="assets/img/ilustration/ilustrasi-login.png">
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 bg-mobile">
				<div class="bg-overlay-mobile"></div>
				<div class="login-form">
					<div class="title-login">
						<h1 class="pink"><b>Gabung Spradz!</b></h1>
						<p class="">
							Gabung bersama komunitas kami, dan maksimalkan penghasilanmu secara langsung !
						</p>
					</div>
					
					<form class="form-input ">
						<div class="form-group mb-3">
							<label for="">Nama</label>
							<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nama Anda">
						</div>
						<div class="form-group mb-3">
							<label for="">Alamat Email</label>
							<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Alamat Email">
						</div>
						<div class="form-group mb-3">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password">
							<span onclick="seePassword()">
								<i class="fas fa-eye" ></i>
							</span>
						</div>
						<div class="form-group mb-3">
							<label for="">Mendaftar sebagai</label>
							<select class="form-control" id="">
								<option>Buzzer</option>
								<option>Influencer</option>
								<option>Advertiser</option>
							</select>
							<span >
								<i class="fas fa-sort-down"></i>
							</span>
						</div>
						<div class="form-group mb-3">
							<label for="">Punya Kode Refferal?</label>
							<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukan Kode Referral bila ada">
						</div>
						<p class=" s_k">
							Dengan melakukan klik pada tombol Daftar Sekarang,
							Anda dianggap menyetujui <a href=""> syarat dan ketentuan layanan</a>
							menjadi member di Spradz.com
						</p>
						<div class="btn-submit my-5">
							<li>
								<a href="login.php" class="btn-outline-pink ">Login</a>
							</li>
							<li>
								<button type="submit" class=" ">Daftar Sekarang !</button>
							</li>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>