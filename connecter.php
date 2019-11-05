<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blogbase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"]))
 {
		$mail=htmlentities(trim($_POST["mail"]));
		$password=htmlentities(trim($_POST["password"]));
	if ($mail&&$password) 
	{
		$password=md5($password);
		$sql = "SELECT * FROM membre WHERE mail='$mail' && password='$password'";

		$result =mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) 
		{ 
			$_SESSION['mail']=$mail;
			header("location:index.php");
			echo "connexion reussi";
		}		
		else echo "mail ou mdp incorrects";


		
	}
	else echo "veuillez saisir tout les champs";
	
}





include "connecter.phtml";
?>
