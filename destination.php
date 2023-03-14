<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_study_destination();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

  <!--============================== nav section ================== -->
  <?php include('nav.php'); ?>
  <!-- ====================== end nav section =======================-->

  <!-- ============================== main section ================================= -->
  <div id="about_img" class="mx-5" style="padding-top: 10px;">
    <!-- <img src="assets/images/logo.png" class="rounded mx-auto d-block" style="width: 90px; height: 90px;" alt=""> -->
    <h2 class="text-center mx-auto text-danger font-weight-bold" style="padding-top: 10px;">STUDY DESTINATION</h2>
  </div>
  <div class="row row-cols-1 row-cols-md-4 g-5" style="padding: 5px">
    <?php while ($element = mysqli_fetch_assoc($item)) { ?>
      <div class="col">
        <div class="card" style="width: 300px;">
          <img src="admin/storage/add_study_destination/<?php echo $element['image']; ?>" style="width: 300px; height: 150px;" class="card-img-top" alt="Hollywood Sign on The Hill" />
          <div class="card-body">
            <a class="btn btn-warning" href="#" role="button"><?php echo $element['university_name']; ?></a>
            <p class="card-text"><?php echo $element['university_details']; ?></p>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
  <!-- ============================== main section end ================================= -->

  <?php include('footer.php'); ?>
  <!-- =================== Script ================= -->
  <?php include('script.php'); ?>
  <!-- =================== end Script ========== -->



</body>

</html>