<?php include "header.php"; ?>

<main id="main" class="main">
  <section class="section">

    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Check Prediction</h5>



          <!---<form class="row g-3" action="crop-add-save.php" method="post">---->
          <form class="row g-3" action="" method="post">
            <select name="category_name" id="category_id" class="form-control">
              <option>Select category</option>
              <?php
              include "db.php";
              $q = "select * from category";
              $res = mysqli_query($conn, $q);
              while ($row = mysqli_fetch_array($res)) {
                echo "<option class='category' value='" . $row["category_id"] . "'>" . $row["category_name"] . "</option>";

              }
              ?>


            </select>
            <select name="crop_name" class="form-control">
              <option>Select crop</option>
              <?php
              include "db.php";
              $q = "select * from crop_prediction";
              $res1 = mysqli_query($conn, $q);
              while ($row = mysqli_fetch_array($res1)) {
                echo "<option  class='crop cat-" . $row['category_id'] . "' value='" . $row["crop_name"] . "'>" . $row["crop_name"] . "</option>";

              }
              ?>


            </select>

            <!--<div class="col-12">
        <label for="" class="form-label">Crop Name</label>
        <input type="text" class="form-control" name="crop_name"required>
      </div>---->
            
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</main>

<?php include "footer.php"; ?>
<script>
  $(document).ready(function () {
    $('#category_id').change(function () {
      var cat = $('#category_id').find("option:selected").val();
      $(".crop").hide();
      $(".cat-" + cat).show();

    });
  });
</script>