
<?php include "header.php"; ?>

<main id="main" class="main">
    <section class="section">

<div class="col-lg-6">
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Show Expence</h5>

    <!-- Vertical Form -->
    
    <form class="row g-3" action="profit.php" method="post">
    <select name="farm_name" class="form-control">
    <option>Select Farm</option>
                                            <?php
                                            include "db.php";
                                            $q = "select * from farm";
                                            $res = mysqli_query($conn, $q);
                                            while ($row = mysqli_fetch_array($res)) {
                                               echo "<option value='" . $row["farm_name"] . "'>" . $row["farm_name"] . "</option>";
                                              
                                            }
                                            ?>


                                        </select>
                                        <select name="crop_name" class="form-control">
    <option>Select Crop</option>
                                            <?php
                                            include "db.php";
                                            $q = "select * from crop";
                                            $res = mysqli_query($conn, $q);
                                            while ($row = mysqli_fetch_array($res)) {
                                               echo "<option value='" . $row["crop_name"] . "'>" . $row["crop_name"] . "</option>";
                                              
                                            }
                                            ?>


                                        </select>
                                        <div class="col-12">
              <label for="" class="form-label">total production</label>
              <input type="number" class="form-control" name="production" placeholder="Enter production">
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
<?php include "footer.php"; ?>
