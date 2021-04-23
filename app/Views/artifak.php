<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artifak</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
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
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <div class="container">
    <h1>Artifak Genshin Impact</h1>
        <table border=2 width="600px">
            <thead>
                <tr>
                    <th>Nama Artifak</th>
                    <th>Gambar</th>
                    <th>Efek</th>
                </tr>
            </thead>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'genshin');

                $query = " SELECT * FROM artifak ";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['gambar']).'" alt="Image" style="width: 100px; height:100px"'; ?></td>
                        <td><?php echo $row['efek'] ?> <br> <?php echo $row['efek2'] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>

        



    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> CI News</div>
	</footer>

    	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>