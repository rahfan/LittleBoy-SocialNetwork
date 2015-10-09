<?PHP

	$namaserver = "localhost";
	$username = "root";
	$password = "";
	$namadatabase = "littleboysocialnetwork";
	
	// Buat koneksi
	$koneksi = mysqli_connect($namaserver, $username, $password, $namadatabase);

	// Mengecek koneksi
	if (!$koneksi) {
		die("Koneksi gagal: " . mysqli_connect_error());
	}
?>