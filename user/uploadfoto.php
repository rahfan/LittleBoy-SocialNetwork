<?PHP

	$uploadsiap = 1;
	$tempattarger = "gambar/fotoprofil/";
	$filetarget = $tempattarger . basename($_FILES["foto"]["name"]);
	$tipegambar = pathinfo($filetarget,PATHINFO_EXTENSION);
	$cek = getimagesize($_FILES["foto"]["tmp_name"]);
	if($cek !== false){
		$uploadsiap = 1;
	} else {
		$uploadsiap = 0;
	}
	if($_FILES["foto"]["size"] > 500000) {
		$uploadsiap = 0;
	}
	if($tipegambar != "jpg" && $tipegambar != "png" && $tipegambar != "jpeg" && $tipegambar != "gif"){
		$uploadsiap = 0;
	}
	$filetarget = $tempattarger . $username .".". $tipegambar;
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