<?php
	$target_dir = "upload/";
	$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	if(isset($_POST["submit"])){
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false){
			echo "File is an image -". $check["mime"];
			$uploadOk = 1;
		}
		else {
			echo "File is not image";
			$uploadOk = 0;
		}
	}
?>
