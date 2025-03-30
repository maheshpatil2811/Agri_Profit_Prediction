<?php include "header.php"; ?>

<main id="main" class="main">
    <section class="section">

<div class="col-lg-6">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Change Password</h5>

    <!-- Vertical Form -->

    <form class="row g-3" action="change-password-save.php" method="post">
      <div class="col-12">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="old_password" placeholder="Old Password" required>
      </div>
      <div class="col-12">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="new_password" placeholder="New Password" required>
      </div>
      <div class="col-12">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="confirm_password" placeholder="Confirm New Password" required>
      </div>
           
        <button type="submit" class="btn btn-primary">Change</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
</div>
    </section>
</main>
<?php include "footer.php"; ?>
