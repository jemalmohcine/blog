<?php
include "conn.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster|Rubik&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/c0fd15ce0b.js"></script>
</head>

<body>

  <html lang="en" class="full-height">

<!--Main Navigation-->
<header style="height: 0%">

  <nav class="navbar navbar-expand-lg navbar-dark black">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" style="font-family: 'Lobster', cursive;font-size: 20px;margin-left: 70px">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="association.phtml" style="font-family: 'Lobster', cursive;font-size: 20px">Association <span class="sr-only">(current)</span></a>
          </li>
          
          <?php if(!isset($_SESSION['mail'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="connecter.phtml" style="font-family: 'Lobster', cursive;font-size: 20px">se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscrire.phtml" style="font-family: 'Lobster', cursive;font-size: 20px">s'inscrire</a>
          </li>
          <?php } ?>
          
          <li class="nav-item">
            <a class="nav-link" href="ajouter.php" style="font-family: 'Lobster', cursive;font-size: 20px">Ajouter un article/Evenements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="articles.php" style="font-family: 'Lobster', cursive;font-size: 20px">ARTICLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Evenementss.php" style="font-family: 'Lobster', cursive;font-size: 20px">EVENEMENTS</a>
          </li>
          
          <?php if(isset($_SESSION['mail'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-family: 'Lobster', cursive;font-size: 20px"> <?php  echo $_SESSION['mail'];?></a><br>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="font-family: 'Lobster', cursive;font-size: 20px"> se deconnecter</a><br>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <header></header>