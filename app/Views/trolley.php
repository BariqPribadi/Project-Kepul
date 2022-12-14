<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="kepul.png">
	<title>Beranda Kepul</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/04ec86b6ec.js" crossorigin="anonymous"></script>
	<!-- Template Main CSS File -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="asset/css/style.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&family=Roboto:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center" style="margin-top: 10px;">
				<p class="p1">Aplikasi jual sampah daur ulang di kota Medan</p>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="#" class="p2">F.A.Q</a>
				<a href="#" class="p2" style="margin-left: 53px;">Contact Us</a>
				<a href="#" class="p2" style="margin-left: 53px;">hello@kepul.id</a>
				<a href="https://www.instagram.com/kepul.id/" style="margin-left: 53px;" ><i class="fa-brands fa-instagram fa-lg"></i></a>
				<a href="https://www.facebook.com/ptindonesiabebassampah"><i class="fa-brands fa-facebook fa-lg"></i></a>
				<a href="https://twitter.com/kepul_id"><i class="fa-brands fa-twitter fa-lg"></i></a>
				<a href="https://www.youtube.com/@kepul1255"><i class="fa-brands fa-youtube fa-lg"></i></a>
			</div>
		</div>
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">
			<a href="kepul.php"><img class="img-fluid" alt="Responsive image" src="asset/foto/logo.png"></a>
			<nav id="navbar" class="navbar">
				<ul>
				<li><a class="p3 nav-link" href="http://localhost:8080/kepul.php" >Beranda</a></li>
					<li><a class="p3 nav-link" href="#">Program</a></li>
					<li><a class="p3 nav-link" href="http://localhost:8080/barang">Daftar Barang</a></li>
					<li><a class="p3 nav-link" href="http://localhost:8080/tentang">Tentang Kami</a></li>
					<li><button style="width: 35px; height: 35px;" class="button-1" role="button" onclick="window.location='trolley';"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button></li>
					<li><button class="button-79" role="button">Jual di Kepul</button></li>

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->

	<!-- start banner Area -->
	
    <section class="trolley" id="trolley">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p class="h10" style="padding-top: 28px; margin-left: 23px;">Kantong Barang</p>
					<div class="row" style="margin-left: 23px;">
						<button id="trolleyall" class="button-4" role="button" onclick="trolley()"><img style="float: left; width: 14px; height: 14px;" src="asset/foto/check.png" alt="Responsive image"></button>
						<p class="h11" style="margin: auto auto auto 10px;">Pilih Semua</p>
					</div>
                    <div class="card card3 flex-row" style="width: 646px;
						height: 129px;
						background: #FFFBFB;
						border: 1px solid #F3F1F1;
						box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
						border-radius: 10px;
						margin-top: 34px;">
                        <button id="trolley1" style="margin: auto auto auto 22px;" class="button-4" role="button" onclick="trolley1()"><img style="float: left; width: 14px; height: 14px;" src="asset/foto/check.png" alt="Responsive image"></button>
                        <img src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-koran.png" class="card-img-left" alt="Responsive image">
                        <div class="card-body">
                            <p class="card-title h10" style="color: black; margin-top: 10px;">Koran Bekas</p>
                            <p class="card-text p15">Rp. 3.000/Kg</p>
                        </div>
                    </div>
					<div class="card card3 flex-row" style="width: 646px;
						height: 129px;
						background: #FFFBFB;
						border: 1px solid #F3F1F1;
						box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
						border-radius: 10px;
						margin-top: 24px;">
                        <button id="trolley2" style="margin: auto auto auto 22px;" class="button-4" role="button" onclick="trolley2()"><img style="float: left; width: 14px; height: 14px;" src="asset/foto/check.png" alt="Responsive image"></button>
                        <img src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-ac.png" class="card-img-left" alt="Responsive image">
                        <div class="card-body">
                            <p class="card-title h10" style="color: black; margin-top: 10px;">AC</p>
                            <p class="card-text p15">Rp. 20.000/Kg</p>
                        </div>
                    </div>
					<div class="card card3 flex-row" style="width: 646px;
						height: 129px;
						background: #FFFBFB;
						border: 1px solid #F3F1F1;
						box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
						border-radius: 10px;
						margin-top: 24px;">
                        <button id="trolley3" style="margin: auto auto auto 22px;" class="button-4" role="button" onclick="trolley3()"><img style="float: left; width: 14px; height: 14px;" src="asset/foto/check.png" alt="Responsive image"></button>
                        <img src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-kaleng.png" class="card-img-left" alt="Responsive image">
                        <div class="card-body">
                            <p class="card-title h10" style="color: black; margin-top: 10px;">Kaleng</p>
                            <p class="card-text p15">Rp. 3.000/Kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
					<div class="card4">
						<p class="h12">Detail Penjualan</p>
						<form>
							<label class="p16" for="jadwal">Jadwal Penjemputan</label>
  							<input class="form-input" type="text" id="jadwal" name="jadwal"><br>
							<label class="p16" for="alamat" style="margin-top: 12px;">Alamat Penjemputan</label>
  							<input class="form-input" style="height: 117px;" type="text" id="alamat" name="alamat">
						</form>
						<div class="row justify-content-center" style="margin-top: 24px;">
							<button class="button-79" role="button" 
							style="width: 325px;
							height: 65px;
							background: #007AFF;
							border-radius: 10px;
							font-family: 'Roboto';
							font-style: normal;
							font-weight: 700;
							font-size: 15px;
							line-height: 18px;
							letter-spacing: 0.05em;
							color: #FFFFFF;
							float: center;
							margin: auto;">Ajukan Penjemputan</button>
						</div>
					</div>
                </div>
            </div>
        </div>
		<script>
			var flag = true;
			function trolley() {
				var x = document.getElementById('trolleyall');
				var one = document.getElementById("trolley1");
				var two = document.getElementById("trolley2");
				var three = document.getElementById("trolley3");
				if(flag){
					x.style.backgroundColor = '#007AFF';
					one.style.backgroundColor = '#007AFF';
					two.style.backgroundColor = '#007AFF';
					three.style.backgroundColor = '#007AFF';
				}
				else{
					x.style.backgroundColor = '#6C6C6C';
					one.style.backgroundColor = '#6C6C6C';
					two.style.backgroundColor = '#6C6C6C';
					three.style.backgroundColor = '#6C6C6C';
				}
				flag = !flag
			}
			function trolley1() {
				var one = document.getElementById("trolley1");
				if(flag){
					one.style.backgroundColor = '#007AFF';
				}
				else{
					one.style.backgroundColor = '#6C6C6C';
				}
				flag = !flag
			}
			function trolley2() {
				var two = document.getElementById("trolley2");
				if(flag){
					two.style.backgroundColor = '#007AFF';
				}
				else{
					two.style.backgroundColor = '#6C6C6C';
				}
				flag = !flag
			}
			function trolley3() {
				var three = document.getElementById("trolley3");
				if(flag){
					three.style.backgroundColor = '#007AFF';
				}
				else{
					three.style.backgroundColor = '#6C6C6C';
				}
				flag = !flag
			}
		</script>
    </section>
    
    <section id="contact" class="contact" style="margin-top: 99px;">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<img class="img-fluid" style="width: 220px; height: 100.09px; margin-top: -45px;" src="asset/foto/logo.png" alt="Responsive image">
					<p class="p9">Aplikasi kepul merupakan sebuah aplikasi dalam upaya optimalisasi 
					jual beli sampah yang dapat didaur ulang </p>
					<div class="row">
						<div class="col-2">
							<img class="img-fluid" style="width: 20px; height: 20px; margin-top: 20px;" src="asset/foto/location.png" alt="Responsive image">
						</div>
						<div class="col-10" style="margin-left: -35px;">
							<p class="p9">Jalan Gurilla No. 109 Sei Kera Hilir I Medan Perjuangan Kota Medan, Sumatera Utara</p>
						</div>
					</div>
				</div>
				<div class="col-2">
					<p class="h6" style="margin-bottom: 26px;">Telusuri</p>
					<a href="#pertanyaan" class="p11">FAQ</a><br>
					<a href="#" class="p11">Tentang Kami</a><br>
					<a href="#" class="p11">Projek</a><br>
				</div>
				<div class="col-2">
					<p class="h6" style="margin-bottom: 26px;">Karir</p>
					<a href="#" class="p11">Mikro Driver</a><br>
					<a href="#" class="p11">Mikro Usaha</a><br>
					<a href="#" class="p11">Internship</a><br>
					<a href="#" class="p11">Lowongan</a><br>
				</div>
				<div class="col-2">
					<p class="h6" style="margin-bottom: 26px;">Kontak</p>
					<p class="p11" style="margin-bottom: 0px;">hello@kepul.id</p>
					<a href="#" class="p11">Tentang</a><br>
					<p class="p11">+6285373474968</p>
				</div>
				<div class="col-2">
					<p class="h6" style="margin-bottom: 26px;">Download</p>
					<a href="https://play.google.com/store/apps/details?id=com.kepulcorporation.kepul" 
					class="button-1"><img style="width: 150px; height: 45.76px;" src="asset/foto/playstore.png"></a>
					<div class="row" style="margin-top: 20px; margin-left: 0px;">
						<a style="margin-right: 16px;" href="https://www.instagram.com/kepul.id/"><i class="fa-brands fa-instagram fa-xl"></i></a>
						<a style="margin-right: 16px;" href="https://www.facebook.com/ptindonesiabebassampah"><i class="fa-brands fa-facebook fa-xl"></i></a>
						<a style="margin-right: 16px;" href="https://twitter.com/kepul_id"><i class="fa-brands fa-twitter fa-xl"></i></a>
						<a style="margin-right: 16px;" href="https://www.youtube.com/@kepul1255"><i class="fa-brands fa-youtube fa-xl"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="footer" class="footer" style="background: #F3F3F3;">
		<div class="container">
			<div class="row">
				<div class="col-8" style="margin-top: 26px; margin-bottom: 16px;">
					<img class="img-fluid" style="width: 20px; height: 20px; display: inline;" src="asset/foto/copyright.png" alt="Responsive image">
					<p class="p2" style="letter-spacing: 0.05em; color: #6C6C6C; display: inline;">2021 Kepul.id</p>
				</div>
				<div class="col-2" style="margin-top: 26px; margin-bottom: 16px;">
					<a href="#" class="p2" style="letter-spacing: 0.05em; color: #6C6C6C;">Syarat & Ketentuan</a>
				</div>
				<div class="col-2" style="margin-top: 26px; margin-bottom: 16px;">
				<a href="#"class="p2" style="letter-spacing: 0.05em; color: #6C6C6C; ">Kebijakan Privasi</a>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<!-- Template Main JS File -->
	<script src="asset/js/main.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

</body>

</html>