<?php
include "header.php"; 
     
?> 
<main id="main" class="main">
    <section class="section">

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage-Expence</h5>
              <p><code></code></p>
                <!-- Table Variants -->
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Farm-Name</th>
                    <th scope="col">Expence-type</th>
                    <th scope="col">Crop-Name</th>
                    <th scope="col">Expence-details</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Date</th>
                    <th scope="col" colspan="">Actions</th>
                    <th scope="col" colspan="">Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
              
            
        
       <?php
      // $crop_id = $_REQUEST['crop_id'];
               $conn=mysqli_connect("localhost", "root", "", "farm_manage");
               $q="select * from expence";
               $res = mysqli_query($conn, $q);
               //foreach($res as $q) {
               while($row=mysqli_fetch_array($res)){
                   ?>
               
                  
                <tr class="table-info">
                    <th scope="row"><?php echo $row['expence_id']; ?></th>
                    <th scope="row"><?php echo $row['farm_name']; ?></th>
                    <th scope="row"><?php echo $row['expence_type']; ?></th>
                    <th scope="row"><?php echo $row['crop_name']; ?></th>
                    <th scope="row"><?php echo $row['expence_detail']; ?></th>
                    <th scope="row"><?php echo $row['cost']; ?></th>
                    <th scope="row"><?php echo $row['date']; ?></th>
             
                      <?php echo "<td><a onclick=return confirm(\"Are u sure want to update this record?\" );' href='expence-update.php? expence_id={$row['expence_id']}'>Update</a></td> ";?> 
                      <?php echo "<td><a onclick=return confirm(\"Are u sure want to update this record?\" );' href='expence-delete.php? expence_id={$row['expence_id']}'>Delete</a></td> ";?> 
                   </tr>
              
 <?php
  }
 ?>
       </tbody>
              </table>

 </div>
          </div>
    </section>
</main>
 <?php
include "footer.php";
 ?>
 