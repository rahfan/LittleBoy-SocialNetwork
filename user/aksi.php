<?PHP

	//Jika tombol daftar yang ditekan
	if(isset($_POST['daftar'])){
		
		//Mengambil nilai pada form
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$nama = $_POST['nama'];
		$tanggallahir = $_POST['tanggallahir'];
		$biodata = addslashes($_POST['biodata']);
		$jeniskelamin = $_POST['jenkel'];
		
		//Membuat sql untuk memasukkan ke tabel
		$sql = "INSERT INTO user (username, password, nama, tanggal_lahir, biodata, jenis_kelamin) VALUES ('$username','$password','$nama','$tanggallahir','$biodata','$jeniskelamin')";
		
		//Mengecek apakah kueri sql berhasil dikerjakan
		if(mysqli_query($koneksi, $sql)){
			echo "User Berhasil Ditambahkan";
		} else {
			echo "Gagal : ".mysqli_error();
		}
	}

?>