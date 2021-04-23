<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Genshin Impact Guide</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('karakter') ?>">Karakter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('senjata') ?>">Senjata</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('artifak') ?>">Artifak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">Portal Berita Genshin Impact</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Tanggal Rilis Genshin Impact!</h5>
					<p>Genshin Impact adalah permainan free-to-play action RPG dunia terbuka yang dikembangkan oleh miHoYo. 
					Genshin Impact juga merupakan IP kedua yang dibesut oleh miHoYo setelah Honkai Impact 3. 
					Game ini dirilis pada tanggal 28 September 2020 di platform Android, iOS, Windows, dan PlayStation 4, 
					serta 28 April 2021 di platform PlayStation 5.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Update Genshin Impact 1.1</h5>
					<p>PEMBARUAN 1.1 game Genshin Impact akan datang pada 11 November. 
					Tanggal rilis ini akan menjadi hari penting bagi komunitas pemain Genshin Impact. 
					Update 1.1 sangat dinantikan oleh para penggemar, karena menghadirkan banyak konten baru, 
					misalnya peningkatan kualitas hidup dan kelanjutan alur cerita Liyue. Selain itu, 
					pemain bakal memiliki kesempatan menarik empat karakter baru melalui sistem gach game.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Update Genshin Impact 1.2</h5>
					<p>Setelah sebelumnya miHoYo menghadirkan update versi 1.2 untuk game 
					Genshin Impact yang membawa sejumlah karakter dan berbagai fitur baru, kini mereka sudah bersiap untuk menghadirkan update
					 1.2 yang akan menghadirkan lokasi baru untuk dijelajahi. 
					Ya, diketahui bahwa update yang bertajuk 'Chalk Prince and the Dragon' tersebut bakal diluncurkan pada tanggal 23 Desember 2020 
					mendatang dan lokasi gunung bersalju 'Dragonspine' juga terbuka. Pemain nantinya dapat menemukan misi-misi baru ketika berpetualang
					 ke area Dragonspine.</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> CI News</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>