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
                    <th scope="col">Crop-Id</th>
                    <th scope="col">Farm-Name</th>
                    <th scope="col">Crop-Name</th>
                    <th scope="col" colspan="4">Actions</th>
                  </tr>
                </thead>
                <tbody>
              
            
        
       <?php
      // $crop_id = $_REQUEST['crop_id'];
               $conn=mysqli_connect("localhost", "root", "", "farm_manage");
               $q="select * from crop";
               $res = mysqli_query($conn, $q);
               //foreach($res as $q) {
               while($row=mysqli_fetch_array($res)){
                   ?>
               
                
                <tr class="table-info">
                    <th scope="row"><?php echo $row['crop_id']; ?></th>
                    <th scope="row"><?php echo $row['farm_name']; ?></th>
                    <th scope="row"><?php echo $row['crop_name']; ?></th>
             
                      <?php echo "<td><a onclick=return confirm(\"Are u sure want to update this record?\" );' href='crop-update.php? crop_id={$row['crop_id']}'>Update</a></td> ";?> 
                      <?php echo "<td><a onclick=return confirm(\"Are u sure want to update this record?\" );' href='crop-delete.php? crop_id={$row['crop_id']}'>Delete</a></td> ";?> 
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
 