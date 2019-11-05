<?php 
  session_start();
  include "menu.php";

?>

  

</header>
<!--Main Navigation-->

<!--Main Layout-->

<main  style="background: #696969; padding-top: 30px;background-image: url('https://cdn.wallpapersafari.com/19/23/z7MdVL.jpg');background-size: cover;" >

  <div class="container">
    <div class="row">
      <div class="col-12">
          <h1 style="margin-top: 80px; margin-left: 100px;text-align: center;font-family: 'Rubik', sans-serif;"><i class="fas fa-dumbbell" style="color: white"></i>ARTICLES ET EVENEMENTS DU MOMENT<i class="fas fa-dumbbell" style="color: white"></i></h1>
      </div>
      
    </div>
    <div class="row" style="margin-top: 50px;opacity: 0.7;">
      <div class="col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border border-dark" >
          <div style="height: 150px; background-size: cover; background-image: url('1.jpg')" class="card-img-top img-fluide" alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">JEMAL MOHCINE</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-lg-9 col-md-6 col-sm-12 col-12">
        <div class="row">
          <?php
          $sql = "SELECT idd,titre,description, image,categorie FROM blogpost ORDER BY idd DESC LIMIT 3";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border border-dark" style="height: 500px;margin-bottom: 30px;" >
              <img  src="<?php echo $row["image"]; ?>"style="height: 170px; background-size: cover;" class="card-img-top img-fluide" alt="..."></img>
              <div class="card-body">
                <h3 style="color: blue;">Articles</h3>
                <h5 class="card-title"> <?php echo $row["titre"]; ?></h5>
                <p class="card-text"><?php echo substr($row["description"], 0, 50). "..."; ?></p>
                <p class="card-text" style="color: red;">
                  <br>

                  <?php 
                if ($row["categorie"] == "") {
                  # code...
                } else {
                echo "#".$row["categorie"]; 
                        }


                ?></p>
                <?php $id=$row["idd"];
                ?>
                <br>
                <a href="article.php?idd=<?php echo $id ?>" style="font-size: 11px;" class="btn btn-primary bouton">Read more</a>
                
              </div>
            </div>
          </div>
          <?php

            }
            }
          ?>
          <?php
          $sql = "SELECT id,titreE,dateE,postE,imageE,categorieE FROM evenement ORDER BY id DESC LIMIT 3";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card" style="height: 500px; margin-bottom: 30px;" >
              <img  src="<?php echo $row["imageE"]; ?>"style="height: 170px; background-size: cover;" class="card-img-top img-fluide" alt="..."></img>
              <div class="card-body">
                <h3 style="color: green;">EVENT</h3>
                <h5 class="card-title"> <?php echo $row["titreE"]; ?></h5>
                <h5 class="card-title"> <?php echo $row["dateE"]; ?></h5>
                <p class="card-text"><?php echo substr($row["postE"], 0, 50). "..."; ?></p>
                <p class="card-text" style="color: red;"><?php 
                if ($row["categorieE"] == "") {
                  # code...
                } else {
                echo "#".$row["categorieE"]; 
                        }


                ?></p>
                <?php $id=$row["id"];
                ?>
                <a href="evenements.php?id=<?php echo $id ?>" style="font-size: 11px;" class="btn btn-primary bouton">Read more</a>
              </div>
            </div>
          </div>
          <?php

            }
            }
          ?>

          

        </div>  
      </div>
     
          

          

       
    </div>
  </div>
  <br>
  <br>

</main>
<?php include'footer.php';  ?>


<!--Main Layout-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
