
<?php
include "header.php"; 
      
?> 
<main id="main" class="main">
   <section class="section">

    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Crop Prediction</h5>
              <p><code></code></p>
                <!-- Table Variants -->
              <table class="table">
                 <thead>
                  <tr>
                   
                   
                    <th scope="col">Crop-Name</th>
                    <th scope="col">Ecre</th>
                    <th scope="col"> Crop_Expence</th>
                    <th scope="col">Crop_Output</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <?php

                    // $id=$_SESSION['id'];
                  include "db.php";
                    $q ="select * from crop_prediction";
                                  // print_r($q);
                    $res = mysqli_query($conn, $q);
                  while($rows = mysqli_fetch_array($res)){
                  //print_r( $res);
                 ?>       
     
                 <tr>
                 
                  <td> <i><strong> <?php echo $rows['crop_name'] ?></strong></i></td>
                  <td><?php echo $rows['crop_area'] ?></td>
                  <td><?php echo $rows['crop_expence'] ?></td>
                  <td>
                  <?php echo $rows['crop_output']; ?>
                  </td>
                  
                  
                 </tr>
                 

         <?php  }  ?>
                
                    
 
                </tbody>
               </table>
        </div>
     </div>
  </section>
</main>


 <?php
include "footer.php";
 ?>
 
