<?php include "header.php"; ?>

<main id="main" class="main">
    <section class="section">

<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">update Crop</h5>

    <!-- Vertical Form -->
    <form class="row g-3" action="crop-update-save.php" method="post">
   
             <?php
                                             $crop_id=$_REQUEST['crop_id'];
                                            include "db.php";
                                            $q= " select * from crop where crop_id=$crop_id";
                                            $res = mysqli_query($conn, $q);
                                            $user_data=mysqli_fetch_array($res);

?>
                                       
      <div class="col-12">
      <input type='hidden'  name='crop_id' value="<?php echo $user_data['crop_id'];?>">
        <label for="" class="form-label">Farm-Name</label>
        <input type="text" class="form-control" name="farm_name"  value="<?php echo $user_data['farm_name'];?>" >
      </div>
      <div class="col-12">
      <label for="" class="form-label">Crop Name</label>
        <input type="text" class="form-control" name="crop_name"  value="<?php echo $user_data['crop_name'];?>">
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
<?php// include "footer.php"; ?>
