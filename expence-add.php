<?php include "header.php"; ?>

<main id="main" class="main">
  <section class="section">

    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add - Expence</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="expence-add-save.php" method="post">
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
            <select name="expence_type" class="form-control">
              <option>Select-Expence-type</option>
              <option>cultivation</option>
              <option>labours</option>
              <option>Sprayer</option>
              <option>Seeds</option>
              <option>Other</option>
            </select>


            <select name="crop_name" class="form-control">
              <option>Select crop-name</option>
              <?php
              include "db.php";
              $q = "select * from crop";
              $res = mysqli_query($conn, $q);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option value='" . $row["crop_name"] . "'>" . $row["crop_name"] . "</option>";

              }
              ?>
            </select>
            <select name="acre" class="form-control">
              <option>Select Acre</option>
              <option>0.5 Acre</option>
              <option>1 Acre</option>
              <option>1.5 Acre</option>
              <option>2 Acre</option>
              <option>2.5 Acre</option>
              <option>3 Acre</option>
              <option>3.5 Acre</option>
              <option>4 Acre</option>
              <option>4.5 Acre</option>
              <option>5 Acre</option>
            </select>
            <!--<label for="" class="form-label">Crop Name</label>
        <input type="text" class="form-control" name="crop_name" placeholder="Enter crop name">
        ------>

            <div class="col-12">
              <label for="" class="form-label">Expence_details :</label>
              <!---<input type="textArea" class="form-control" name="expence_name" placeholder="Enter Expence Details">--->
       
              <textarea class="form-control"   name="expence_details" style="height: 100px"></textarea>
        </textarea>
            </div>
            <div class="col-12">
              <label for="" class="form-label">Cost</label>
              <input type="number" class="form-control" name="cost" placeholder="Enter expence cost">
            </div>

            <div class="col-12">
              <label for="" class="form-label">Date</label>
              <input type="date" class="form-control" name="date">
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