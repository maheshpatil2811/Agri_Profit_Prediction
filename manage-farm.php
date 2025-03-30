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
                    <th scope="col">Farm-Id</th>
                    <th scope="col">Farm-Name</th>
                    <th scope="col" colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
              
            
        
       <?php
        
               $conn=mysqli_connect("localhost", "root", "", "farm_manage");
              // $farm_id=$_REQUEST['farm_id'];
               $q="select * from farm";
               $res = mysqli_query($conn, $q);
               $row=mysqli_fetch_array($res);
               foreach($res as $q) {
                //while($row=mysqli_fetch_array($res)){
                   ?>
               
                
                <tr class="table-info">
                    <th scope="row"><?php echo $q['farm_id']; ?></th>
                    <th scope="row"><?php echo $q['farm_name']; ?></th>
                    <?php echo "<td><a  onclick=return confirm(\" Are u sure want to update this record?\" );' href='farm-update.php?farm_id={$row['farm_id']}'>update</a></td>";?>
                    <?php echo "<td><a  onclick=return confirm(\" Are u sure want to update this record?\" );' href='farm-delete.php?farm_id={$row['farm_id']}'>delete</a></td>";?>
                  
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
 