<html>
	<head>
		<title>
			Social Network
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="script/w3.css">
		<link rel="stylesheet" href="script/w3-theme-blue.css">
	</head>
	<body>
		<header class='w3-container w3-theme'>
			<h1>Social Network</h1>
		</header>
		<div class='w3-row'>
			<div class='w3-col m4 l2 w3-padding'>
				Profil
			</div>
			<div class='w3-col m8 l10 w3-padding'>
				<?PHP
					if(isset($_GET['halaman'])) {
						$halaman=$_GET['halaman'];
						$halaman .= '.php';
						include ($halaman);
					} else {
						include ('halamanutama.php');
					}		
				?>
			</div>
		</div>
	</body>
</html>

<!-- Diharapkan untuk tidak menghapus komentar ini -->
<!-- Created by Arfan Asri (rahfan) -->