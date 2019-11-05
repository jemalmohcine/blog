<?php 
  session_start();
  include "menu.php"; 
?>
<div class="container">
 <div class="row">
          <?php
          $id=$_GET['id'];
          $sql = "SELECT id,titreE,dateE,postE,imageE,categorieE FROM evenement WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

         <div class="col-12 ">
			<div class="card mb-3" style="max-width: 1040px;margin-top: 40px">
			  	<div class="row no-gutters">
			    	<div class="col-md-4">
			      		<img src="<?php echo $row["imageE"]; ?>" class="card-img" alt="...">
			    	</div>
			    	<div class="col-md-8">
			      		<div class="card-body">
				        	<h5 class="card-title"><?php echo $row["titreE"]; ?></h5>
				        	<p class="card-text"><?php echo $row["postE"]; ?></p>
				        	
			      		</div>
			    	</div>
			    </div>
			</div>
         </div>
          <?php

            }
            }
          ?>
          <?php 
         if (isset($_POST["addcoment"]))
      {
        $comment=htmlentities(trim($_POST["comment"]));
        $idAr=htmlentities(trim($_POST["idAr"]));
  
        $insert="INSERT INTO evenementE (commentaireE,id_event) VALUES('$comment','$idAr') ";
        mysqli_query($conn,$insert);
        
  
      }
      $sql = "SELECT commentaireE FROM evenementE WHERE id_event=$id ";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          ?>  

          <div class="col-12">
            <div class="card" style="margin-top: 40px;" >
              <div class="card-body">
                <p class="card-text"><?php echo $row["commentaireE"]; ?></p>

                
              </div>
            </div>
          </div>
          <?php

            }
            }
          ?>

      

          <div class="col-12">
            <form  method="POST" class="form" enctype="multipart/form-data">        <div class="form-group">
           <label for="inputDesc"> Your comment :</label>
           <textarea class="form-control" id="inputDesc" rows="5" name="comment"></textarea>
         </div>
         <input type="hidden" name="idAr" value="<?php echo $id ?>">
         <input type="submit" name="addcoment" value="Add your comment">      </form>
  
      
            
          </div>
          
	       

 			

      
          

        </div>  
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
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