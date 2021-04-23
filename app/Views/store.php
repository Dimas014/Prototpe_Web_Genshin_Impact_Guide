<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Store Data</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
    label{
        text-align: left;
    }
    </style>
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
						<a class="nav-link" href="<?= base_url('store') ?>">Store Data</a>
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
					<h1 class="h1">Store Data</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Store Data Karakter</h5>
                    <form action="insert.php" method="post">
                    
                    <p>
                        <label for="firstName">First Name&emsp;:</label>
                        <input type="text" name="first_name" id="firstName">
                    </p>
            
            
                        
                    <p>
                        <label for="lastName">Last Name&emsp;: </label>
                        <input type="text" name="last_name" id="lastName">
                    </p>
            
            
                        
                    <p>
                        <label for="Gender">Gender&emsp;:</label>
                        <input type="text" name="gender" id="Gender">
                    </p>
            
                        
                        
                    <p>
                        <label for="Address">Address&emsp;:</label>
                        <input type="text" name="address" id="Address">
                    </p>
            
                        
                        
                    <p>
                        <label for="emailAddress">Email Address&emsp;:</label>
                        <input type="text" name="email" id="emailAddress">
                    </p>
            
                        
                    <input type="submit" value="Submit">
                    </form>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Store Data Senjata</h5>
					
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Storoe Data Artifak</h5>
					
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