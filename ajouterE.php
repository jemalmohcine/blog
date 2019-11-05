<?php
session_start();
include "conn.php";
if (isset($_POST["envoyerE"])) {
	$titre=htmlentities(trim($_POST["titreE"]));
	$post=htmlentities(trim($_POST["postE"]));
	$date=htmlentities(trim($_POST["date"]));
	$categorie=htmlentities(trim($_POST["gridRadios"]));
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["imageE"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$insert="INSERT INTO evenement (titreE,dateE,postE,imageE,categorieE) VALUES('$titre','$date','$post','$target_file','$categorie') ";
	mysqli_query($conn,$insert) or die(mysqli_error($conn));
	$check = getimagesize($_FILES["imageE"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["imageE"]["size"] > 50000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["imageE"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["imageE"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
}

include "ajouter.phtml";

?>