<?PHP

	$login = "rahfan";
	
	include("script/koneksi.php");
	
	//Mengambil data profil dari database
	$sql = "SELECT * FROM user WHERE username='$login'";
	$kueri = mysqli_query($koneksi, $sql);
	if($kueri){
		$profil = mysqli_fetch_array($kueri);
	}
?>

<div class='w3-row w3-card-4 w3-theme-dark w3-theme-padding'>
	<div class='w3-col w3-padding l3 m5 s6'>
		<div class='w3-image w3-border lb-border-50'>
			<img class='lb-border-50' src='gambar/fotoprofil/<?PHP echo $profil["foto"];?>' alt='Foto Profil'>
		</div>
	</div>
	<div class='w3-col w3-padding l9 m7 s6'>
		<div class='w3-col w3-topnav w3-center'>
			<a href='index.php?halaman=user/edit'>Edit</a>
		</div>
		<div class='w3-col w3-padding l3'>
			<b>Nama Lengkap</b>
		</div>
		<div class='w3-col w3-padding l9'>
			<?php echo $profil["nama"];?>
		</div>
		<div class='w3-col w3-padding l3'>
			<b>Tanggal Lahir</b>
		</div>
		<div class='w3-col w3-padding l9'>
			<?php echo $profil["tanggal_lahir"];?>
		</div>
		<div class='w3-col w3-padding l3'>
			<b>Jenis Kelamin</b>
		</div>
		<div class='w3-col w3-padding l9'>
			<?php echo $profil["jenis_kelamin"];?>
		</div>
		<div class='w3-col w3-padding l3'>
			<b>Biodata</b>
		</div>
		<div class='w3-col w3-padding l9'>
			<?php echo $profil["biodata"];?>
		</div>
		<div class='w3-col w3-padding w3-theme-light w3-card-8 lb-border'>
			<!-- Lokasi Statusnya Nanti -->
			Status Berada Disini<br>
		</div>
	</div>
</div>