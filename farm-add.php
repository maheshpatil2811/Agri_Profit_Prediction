<?php include "header.php"; ?>

<main id="main" class="main">
    <section class="section">

<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Farm</h5>

    <!-- Vertical Form -->

    <form class="row g-3" action="farm-add-save.php" method="post">
      <div class="col-12">
        <label for="" class="form-label">Farm Name</label>
        <input type="text" class="form-control" name="farm_name" required>
      </div>
           
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
