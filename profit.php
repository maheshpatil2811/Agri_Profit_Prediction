<?php

 $farm_name=$_REQUEST['farm_name'];
 $crop_name=$_REQUEST['crop_name'];
 
 
?>
<?php
include "header.php"; 
 
?> 
<main id="main" class="main">
   <section class="section">

    <div class="card">
        <div class="card-body">
              <h5 class="card-title">Manage-Farm</h5>
              <p><code></code></p>
                <!-- Table Variants -->
              <table class="table">
                 <thead>
                  <tr>
                   
                    <th scope="col">Farm-Name</th>
                    <th scope="col">Crop-Name</th>
                    <th scope="col">Expence-type</th>
                    <th scope="col">Expence-Details</th>
                    <th scope="col">Cost</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <?php

                    // $id=$_SESSION['id'];
                    $conn=mysqli_connect("localhost", "root", "", "farm_manage");
                    $q="select * from expence where farm_name='$farm_name' and crop_name='$crop_name'";
                                  // print_r($q);
                    $res = mysqli_query($conn, $q);
                    $count = mysqli_num_rows($res);
                    if ($count == 0) {
                 ?>
                      <tr>

                          <td colspan="4" align="center">
                              <h3 style="color:red">No record found</h3>
                          </td>
                      <tr>

                 <?php
                    } else {
                    $cost=0;

                    while ($row = mysqli_fetch_array($res)) {

                    $cost = $row['cost']+ $cost;  
                   
                 ?>       
     
                 <tr>
                  <td><?php echo $farm_name ?></td>
                  <td> <h5><strong> <?php echo $crop_name ?></strong></h5></td>
                  <td><?php echo $row['expence_type'] ?></td>
                  <td><?php echo $row['expence_detail'] ?></td>
                  <td>
                  
                  <?php echo $row['cost']; ?>
                  </td>
                  
                 </tr>
                      <?php
                        }
                        ?>
                        <tr>
                          <td colspan="4">
                            Total
                          </td>
                          <td><?php echo $cost; ?></td>

                        </tr>
                        
    
                    <tr bgcolor="skyblue">
                    <td colspan="4">
                        <?php
                         $_SERVER["REQUEST_METHOD"] == "POST";
                         $production = $_POST["production"];                        
                        ?>
                     <b>Total  profit precdiction in <?php echo $farm_name ?> farm in crop is <?php echo $crop_name?><td><b><?php echo  $production-$cost ?></b></td>
                    </td>
                    </tr>
 
                </tbody>
               </table>
        </div>
     </div>
  </section>
</main>
<?php } ?>

 <?php
include "footer.php";
 ?>
 