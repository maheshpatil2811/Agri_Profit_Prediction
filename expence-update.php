<?php
include "header.php";
?>

<main id="main" class="main">
    <section class="section">

<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Update - Expence</h5>


<?php
//$id=$_REQUEST['expence_id'];
$expence_id=$_REQUEST['expence_id'];
$conn=mysqli_connect("localhost", "root", "", "farm_manage");
$q="select * from expence where expence_id=$expence_id";
//$q="select * from farm";
$res = mysqli_query($conn, $q);
$user_data = mysqli_fetch_array($res);

foreach ($res as $q) {  ?>
  <!-- while($row=mysqli_fetch_array($res)){
  //  $farm_data=mysqli_fetch_array($res);------->
  <form class="row g-3" action="expence-update-save.php" method="post">
  <div class="col-12">
        
        <input type="hidden" class="form-control" name="expence_id"  value="<?php echo  $user_data['expence_id']; ?>">
      </div>
  
  <div class="col-12">
        <label for="" class="form-label">Farm Name</label>
        <input type="text" class="form-control" name="farm_name"  value="<?php echo  $user_data['farm_name']; ?>"readonly>
      </div>
                                            <?php
                                          /*  include "db.php";
                                            $q = "select * from expence";
                                            $res = mysqli_query($conn, $q);
                                            while ($row = mysqli_fetch_array($res)) {
                                               echo "<option value='" . $row["farm_name"] . "'>" . $row["farm_name"] . "</option>";
                                              
                                            }*/
                                            ?>


                                        </select>
      <div class="col-12">
        <label for="" class="form-label">Crop Name</label>
        <input type="text" class="form-control" name="crop_name"  value="<?php echo  $user_data['crop_name']; ?>"readonly>
      </div>
      <div class="col-12">
        <label for="" class="form-label">Expence_Name</label>
        <input type="text" class="form-control" name="expence_type" value="<?php echo  $user_data['expence_type']; ?>">
      </div>
      <div class="col-12">
        <label for="" class="form-label">Cost</label>
        <input type="number" class="form-control" name="cost" value="<?php echo  $user_data['cost']; ?>">
      </div>
     
      <div class="col-12">
        <label for="" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo  $user_data['date']; ?>">
      </div>
     
     
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
</div>
    </section>
</main>

<?php
  }
  ?>
