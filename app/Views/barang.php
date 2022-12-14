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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&family=Roboto:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
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
					<li><a  style="background: white;" class="p3 nav-link active" href="http://localhost:8080/barang">Daftar Barang</a></li>
					<li><a  class="p3 nav-link " href="http://localhost:8080/tentang">Tentang Kami</a></li>
					<li><button style="width: 35px; height: 35px;" class="button-1" role="button" onclick="window.location='trolley';"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button></li>
					<li><button class="button-79" role="button">Jual di Kepul</button></li>

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</div>
	</header><!-- End Header -->

	<!-- start banner Area -->
	<section>
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000" class="row">
                <img src="asset/foto/sampah.png" alt="Responsive image" class="img-fluid mx-auto d-block" style="width: 350px; height: 350px;">
            </div>
            <div class="row justify-content-center">
                <p class="p12" style="margin-top: -50px;">Jual lebih dari 30 jenis sampah organik dan non-organik</p>
            </div>
        </div>
    </section>


    <section id="barang" class="barang" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-top: 20px;">
        <div class="container">
            <div class="row" style="justify-content: space-evenly; padding-bottom: 20px;">
                <button class="button-3" onclick="Semua()">Semua</button>
                <button class="button-3" onclick="Plastik()">Plastik</button>
                <button class="button-3" onclick="Elektronik()">Elektronik</button>
                <button class="button-3" onclick="Kaca()">Kaca</button>
                <button class="button-3" onclick="Besi()">Besi</button>
                <button class="button-3" onclick="Kertas()">Kertas</button>
                <button class="button-3" onclick="Minyak()">Minyak</button>
            </div>
        </div>
    </section>

	<script>
		function Semua() {
			document.getElementById('cup').style.display = "block";
			document.getElementById('botolplastik').style.display = "block";
			document.getElementById('ac').style.display = "block";
			document.getElementById('koran').style.display = "block";
			document.getElementById('kaleng').style.display = "block";
			document.getElementById('kardus').style.display = "block";
			document.getElementById('kipas').style.display = "block";
			document.getElementById('hvs').style.display = "block";
			document.getElementById('botolkaca').style.display = "block";
			document.getElementById('jelantah').style.display = "block";
			document.getElementById('logam').style.display = "block";
			document.getElementById('aluminium').style.display = "block";
		}
		function Plastik() {
			document.getElementById('cup').style.display = "block";
			document.getElementById('botolplastik').style.display = "block";
			document.getElementById('ac').style.display = "none";
			document.getElementById('koran').style.display = "none";
			document.getElementById('kaleng').style.display = "none";
			document.getElementById('kardus').style.display = "none";
			document.getElementById('kipas').style.display = "none";
			document.getElementById('hvs').style.display = "none";
			document.getElementById('botolkaca').style.display = "none";
			document.getElementById('jelantah').style.display = "none";
			document.getElementById('logam').style.display = "none";
			document.getElementById('aluminium').style.display = "none";
		}
		function Elektronik() {
			document.getElementById('cup').style.display = "none";
			document.getElementById('botolplastik').style.display = "none";
			document.getElementById('ac').style.display = "block";
			document.getElementById('koran').style.display = "none";
			document.getElementById('kaleng').style.display = "none";
			document.getElementById('kardus').style.display = "none";
			document.getElementById('kipas').style.display = "block";
			document.getElementById('hvs').style.display = "none";
			document.getElementById('botolkaca').style.display = "none";
			document.getElementById('jelantah').style.display = "none";
			document.getElementById('logam').style.display = "none";
			document.getElementById('aluminium').style.display = "none";
		}
		function Kaca() {
			document.getElementById('cup').style.display = "none";
			document.getElementById('botolplastik').style.display = "none";
			document.getElementById('ac').style.display = "none";
			document.getElementById('koran').style.display = "none";
			document.getElementById('kaleng').style.display = "none";
			document.getElementById('kardus').style.display = "none";
			document.getElementById('kipas').style.display = "none";
			document.getElementById('hvs').style.display = "none";
			document.getElementById('botolkaca').style.display = "block";
			document.getElementById('jelantah').style.display = "none";
			document.getElementById('logam').style.display = "none";
			document.getElementById('aluminium').style.display = "none";
		}
		function Besi() {
			document.getElementById('cup').style.display = "none";
			document.getElementById('botolplastik').style.display = "none";
			document.getElementById('ac').style.display = "none";
			document.getElementById('koran').style.display = "none";
			document.getElementById('kaleng').style.display = "block";
			document.getElementById('kardus').style.display = "none";
			document.getElementById('kipas').style.display = "none";
			document.getElementById('hvs').style.display = "none";
			document.getElementById('botolkaca').style.display = "none";
			document.getElementById('jelantah').style.display = "none";
			document.getElementById('logam').style.display = "block";
			document.getElementById('aluminium').style.display = "block";
		}
		function Kertas() {
			document.getElementById('cup').style.display = "none";
			document.getElementById('botolplastik').style.display = "none";
			document.getElementById('ac').style.display = "none";
			document.getElementById('koran').style.display = "block";
			document.getElementById('kaleng').style.display = "none";
			document.getElementById('kardus').style.display = "block";
			document.getElementById('kipas').style.display = "none";
			document.getElementById('hvs').style.display = "block";
			document.getElementById('botolkaca').style.display = "none";
			document.getElementById('jelantah').style.display = "none";
			document.getElementById('logam').style.display = "none";
			document.getElementById('aluminium').style.display = "none";
		}
		function Minyak() {
			document.getElementById('cup').style.display = "none";
			document.getElementById('botolplastik').style.display = "none";
			document.getElementById('ac').style.display = "none";
			document.getElementById('koran').style.display = "none";
			document.getElementById('kaleng').style.display = "none";
			document.getElementById('kardus').style.display = "none";
			document.getElementById('kipas').style.display = "none";
			document.getElementById('hvs').style.display = "none";
			document.getElementById('botolkaca').style.display = "none";
			document.getElementById('jelantah').style.display = "block";
			document.getElementById('logam').style.display = "none";
			document.getElementById('aluminium').style.display = "none";
		}
	</script>

    <section id="isibarang" class="isibarang">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000" id="row1" class="row" style="justify-content: center;">
                <div id="cup" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-cupplastik.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Cup Plastik</p>
                    <p class="p10">Rp. 1.000 - 2.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="botolplastik" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-botolplastik.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Botol Plastik</p>
                    <p class="p10">Rp. 1.000 - 2.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="ac" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-ac.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">AC</p>
                    <p class="p10">Rp. 20.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="koran" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-koran.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Koran Bekas</p>
                    <p class="p10">Rp. 3.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
				<div id="kaleng" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-kaleng.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Kaleng</p>
                    <p class="p10">Rp. 3.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="kardus" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-kardus.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Kardus</p>
                    <p class="p10">Rp. 1.000 - 2.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="kipas" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-kipas.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Kipas Angin</p>
                    <p class="p10">Rp. 15.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
                <div id="hvs" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-hvs.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Kertas HVS</p>
                    <p class="p10">Rp. 1.000 - 2.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
				<div id="botolkaca" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-botolkaca.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Botol Kaca</p>
                    <p class="p10">Rp. 4.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
				<div id="jelantah" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-jelantah.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Minyak Jelantah</p>
                    <p class="p10">Rp. 1.000 - 2.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
				<div id="logam" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-logam.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Logam</p>
                    <p class="p10">Rp. 5.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
				<div id="aluminium" class="card2">
                    <img class="img" style="width: 180px; height: 180px;" src="AsetCompanyKepul/CompanyAsset-Kepul_sampah-aluminium.png" 
                    alt="Card image cap">
                    <p class="h6" style="line-height: 30px; text-align: center;">Aluminium</p>
                    <p class="p10">Rp. 7.000/Kg</p>
                    <button style="float: right; margin-right: 20px;" class="button-1" role="button"><img style="width: 32px; height: 32px;" src="asset/foto/shopping-cart.png" alt="Responsive image"></button>
                </div>
            </div>
            
			<div class="row" style="justify-content: center; margin-top: 30px; margin-bottom: 100px;">
				<button style="border-radius: 1px; background: #4298F6; border: 1px solid #C4C4C4; width: 557px; height: 80px;
				font-family: 'Montserrat';
				font-style: normal;
				font-weight: 500;
				font-size: 20px;
				line-height: 24px;
				text-align: center;
				letter-spacing: 0.02em;
				color: #262626;" 
				class="button-79" role="button">Lihat Lainnya</button>
			</div>
        </div>
    </section>

	<section id="contact" class="contact">
		<div class="container" style="margin-top: 40px;">
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