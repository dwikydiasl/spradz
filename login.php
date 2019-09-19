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
				<div class="login-form h-log">
					<div class="title-login">
						<h1 class="pink"><b>Login</b></h1>
						<p class="">
							Selamat datang kembali !
						</p>
					</div>
					
					<form class="form-input ">
						<div class="form-group mb-3">
							<label for="">Alamat Email</label>
							<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Alamat Email">
						</div>
						<div class="form-group mb-3">
							<div class="d-flex bd-highlight">
								<div class="mr-auto p-2 bd-highlight">
									<label for="">Password</label>
								</div>
								<div class="p-2 bd-highlight">
									<a href="" class="pink"><i>Lupa Password?</i></a>
								</div>
							</div>
							
							<input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password">
							<span onclick="seePassword()">
								<i class="fas fa-eye" ></i>
							</span>
						</div>
						<div class="btn-submit2 my-5">
							<li>
								<a href="" class="btn-blue ">
									<i class="fab fa-facebook-f"></i> Login with Facebook
								</a>
							</li>
							<li>
								<button type="submit" class="">Masuk</button>
							</li>
						</div>
						<p class="link_register ">
							Belum punya akun? <a href="register.php">Daftar Sekarang</a> 
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>