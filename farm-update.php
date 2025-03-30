<?php
include "header.php";

?>

<main id="main" class="main">
   <!---- <section class="section">----->

<?php
$id=$_REQUEST['farm_id'];
$farm_id=$_REQUEST['farm_id'];
$conn=mysqli_connect("localhost", "root", "", "farm_manage");
$q="select * from farm where farm_id=$farm_id";
//$q="select * from farm";
$res = mysqli_query($conn, $q);

foreach ($res as $q) {
  // while($row=mysqli_fetch_array($res)){
  //  $farm_data=mysqli_fetch_array($res);
  
  ?>
    
<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <!-- Vertical Form -->
    <form class="row g-3" action="farm-update-save.php" method="post">
    <div class="col-sm-10">
        <input type="hidden" class="form-control" name="farm_id" value='<?php echo  $farm_id; ?>'>
     </div>

    <div class="col-12">
        <label for="" class="form-label">Farm Name</label>
        <input type="text" class="form-control" name="farm_name" value="<?php echo  $q['farm_name']; ?>">
      </div>
           
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
</div>
   
<?php
}
 include "footer.php";
 ?>
  </section>
</main>