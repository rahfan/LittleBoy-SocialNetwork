<?PHP session_start(); ?>
<html>
	<head>
		<title>
			Social Network
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="script/littleboy.css">
		<link rel="stylesheet" href="script/w3.css">
		<link rel="stylesheet" href="script/w3-theme-blue.css">
	</head>
	<body>
		<header class='w3-container w3-theme'>
			<h1>Social Network</h1>
		</header>
		<div class='w3-row'>
			<div class='w3-col m4 l2'>
				Profil
			</div>
			<div class='w3-col m8 l10'>
				<?PHP
					if(isset($_SESSION['user'])){
						if(isset($_GET['halaman'])) {
							$halaman=$_GET['halaman'];
							$halaman .= '.php';
							include ($halaman);
						} else {
							include ('halamanutama.php');
						}		
					} else {
						include('login.php');
					}
					
				?>
			</div>
		</div>
	</body>
</html>

<!-- Diharapkan untuk tidak menghapus komentar ini -->
<!-- Created by Arfan Asri (rahfan) -->