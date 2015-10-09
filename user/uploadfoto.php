<?PHP

	$uploadsiap = 1;
	$tempattarger = "gambar/fotoprofil/"; //folder lokasi tempat penyimpanan
	$filetarget = $tempattarger . basename($_FILES["foto"]["name"]);
	$tipegambar = pathinfo($filetarget,PATHINFO_EXTENSION); //tipe gambar yang diupload
	$cek = getimagesize($_FILES["foto"]["tmp_name"]);
	if($cek !== false){
		$uploadsiap = 1;
	} else {
		$uploadsiap = 0;
	}
	if($_FILES["foto"]["size"] > 500000) { //ukuran gambar harus dibawah 500kb
		$uploadsiap = 0;
	}
	if($tipegambar != "jpg" && $tipegambar != "png" && $tipegambar != "jpeg" && $tipegambar != "gif"){ //tipe gambar harus
		$uploadsiap = 0;
	}
	$filetarget = $tempattarger . $username .".". $tipegambar; //lokasi dan nama file ketika di upload
	if($uploadsiap == 0){
		$uploadsiap = 0;
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $filetarget)) {
			$uploadsiap = 1;
		} else {
			$uploadsiap = 0;
		}
	}

?>