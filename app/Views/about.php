<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">About us</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.</p>
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