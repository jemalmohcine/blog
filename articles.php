<?php 
  session_start();
  include "menu.php";

?>

<div class="container" >

	<div class="row" >
		<?php
          $sql = "SELECT idd,titre,description, image,categorie FROM blogpost";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

		<div class="col-12 col-md-6 col-lg-4">
			<div class="card border border-dark" style="height: 500px; margin-bottom: 30px;margin-top: 20px" >
              <div style="height: 200px; background-size: cover; background-image: url('<?php echo $row["image"]; ?>')" class="card-img-top img-fluide" alt="..."></div>
              <div class="card-body">
                <h3 style="color: blue;">Articles</h3>
                <h5 class="card-title"> <?php echo $row["titre"]; ?></h5>
                <p class="card-text"><?php echo substr($row["description"], 0, 100). "..."; ?></p>
                <p class="card-text" style="color: red;"><?php 
                if ($row["categorie"] == "") {
                  # code...
                } else {
                echo "#".$row["categorie"]; 
                        }


                ?></p>
                <?php $id=$row["idd"];
                ?>
                <a href="article.php?idd=<?php echo $id ?>" style="font-size: 11px;" class="btn btn-primary bouton">Read more</a>
                
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
<?php include'footer.php';  ?>
