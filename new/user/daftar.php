<?PHP 

	//memperkirakan tahun agar mudah ditemukan
	$tahun = date("Y");
	$tahun = $tahun - 17;
	$tanggallahir = date("m-d");
	$tanggallahir = $tahun."-".$tanggallahir;
	echo $tanggallahir;

?>
	<div class='w3-group'>
		<input class='w3-input' name='tanggallahir' type='date' value='<?PHP echo $tanggallahir;?>' style='width:95%' required>
		<label class='w3-label'>Tanggal Lahir</label>
	</div>
	<div class='w3-group'>
		<br><input class='w3-text' name='foto' type='file' style='width:95%' required>
		<label class='w3-label'>Foto</label>
	</div>
