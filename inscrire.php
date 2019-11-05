<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blogbase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection==
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"]))
 {
		$nom=htmlentities(trim($_POST["nom"]));
		$mail=htmlentities(trim($_POST["mail"]));
		$password=htmlentities(trim($_POST["password"]));
		$repeterpassword=htmlentities(trim($_POST["repeterpassword"]));
	if ($nom&&$mail&&$password&&$repeterpassword) 
	{

		if ($password==$repeterpassword) 
		{
			$password=md5($password);
			
				$insert="INSERT INTO membre (nom,mail,password) VALUES('$nom','$mail','$password') ";
				mysqli_query($conn,$insert);
				die("Inscription terminée <a href='connecter.phtml'>connectez </a> vous");	
		}
		else echo "les deux mots de passe ne sont pas identique";
	}
	else echo "veuillez saisir tout les champs";
	
}






include "inscrire.phtml";
?>