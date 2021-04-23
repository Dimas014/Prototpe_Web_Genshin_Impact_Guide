<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>

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

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            
            <h3 class="h3">Hello <?= $name ?>!</h3>
            <p>Jika ada error silahkan hubungi kami melalui kontak berikut </p>
            <p>Email    : dimas05014@gmail.com </p>
            <p>No HP    : 087821643850 </p>
            <p>Facebook : Dimas Emeraldo </p>

            <form action="" class="form">

            </form>

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