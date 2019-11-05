<?php 
  session_start();
  include "menu.php";

?>

<div class="container">

	<div class="row" style="margin-top: 30px">
		<?php
          $sql = "SELECT id,titreE,dateE,postE,imageE,categorieE FROM evenement ";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

		<div class="col-12 col-md-6 col-lg-4">
			<div class="card border border-dark" style="height: 500px; margin-bottom: 30px;" >
              <div style="height: 200px; background-size: cover; background-image: url('<?php echo $row["imageE"]; ?>')" class="card-img-top img-fluide" alt="..."></div>
              <div class="card-body">
                <h3 style="color: green;">Evenements</h3>
                <h5 class="card-title"> <?php echo $row["titreE"]; ?></h5>
                <p class="card-text"><?php echo substr($row["postE"], 0, 100). "..."; ?></p>
                <p class="card-text" style="color: green;"><?php 
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
<?php include'footer.php';  ?>
