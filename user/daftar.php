<?PHP

	//menkoneksikan database
	include("script/koneksi.php");
	
	if(isset($_POST['daftar'])){
		include("user/aksi.php");
		exit;
	}

	//memperkirakan tahun agar mudah ditemukan
	$tahun = date("Y");
	$tahun = $tahun - 17;
	$tanggallahir = date("m-d");
	$tanggallahir = $tahun."-".$tanggallahir;

?>

<!-- Form untuk mendaftar user -->
<form class='w3-container w3-card-4' method='post'>
	<div class='w3-group'>
		<input class='w3-input' name='username' type='text' style='width:95%' required>
		<label class='w3-label'>Username</label>
	</div>
	<div class='w3-group'>
		<input class='w3-input' name='password' type='password' style='width:95%' required>
		<label class='w3-label'>Password</label>
	</div>
	<div class='w3-group'>
		<input class='w3-input' name='nama' type='text' style='width:95%' required>
		<label class='w3-label'>Nama Lengkap</label>
	</div>
	<div class='w3-group'>
		<input class='w3-input' name='tanggallahir' type='date' value='<?PHP echo $tanggallahir;?>' style='width:95%' required>
		<label class='w3-label'>Tanggal Lahir</label>
	</div>
	<div class='w3-group'>
		<br><input class='w3-text' name='foto' type='file' style='width:95%' required>
		<label class='w3-label'>Foto</label>
	</div>
	<div class='w3-group'>
		<textarea class='w3-input' name='biodata' style='width:95%' required></textarea>
		<label class='w3-label'>Biodata</label>
	</div>
	<div class='w3-half'>
		<p>Jenis Kelamin ?</p>
		<label class='w3-checkbox'>
			<input type='radio' name='jenkel' value='Laki-laki' checked>
			<div class='w3-checkmark'>
			</div>
			Laki-laki
		</label>
		<br>
		<label class='w3-checkbox'>
			<input type='radio' name='jenkel' value='Perempuan'>
			<div class='w3-checkmark'>
			</div>
			Perempuan
		</label>
	</div>
	<div class='w3-half'>
		<input type='submit' class='w3-btn w3-right' name='daftar' value='Daftar'>
	</div>
	
</form>

<!-- Diharapkan untuk tidak menghapus komentar ini -->
<!-- Created by Arfan Asri (rahfan) -->