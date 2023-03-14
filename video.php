<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_videoes();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

  <!--============================== nav section ================== -->
  <?php include('nav.php'); ?>
  <!-- ====================== end nav section =======================-->

  <div>
    <h2 style="padding-top: 25px;" class="text-center text-danger">Videos</h2>
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-5" style="margin: 5px">
    <?php while ($element = mysqli_fetch_assoc($item)) { ?>
      <div class="col">
        <div class="card" style="width: 300px;">
          <div class="ratio ratio-16x9">
            <iframe src="<?php echo $element['url']; ?>" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>


</body>
<!-- Modal gallery -->

<!-- <div class="container">
  <div class="row">
    <div class="col-sm-6">
      
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe>
      </div>
    </div>
    <div class="col-sm-6">
        <div></div>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe>
      </div>
    </div>
  </div>
</div> -->

<?php include('footer.php'); ?>
<!-- =================== Script ================= -->
<?php include('script.php'); ?>
<!-- =================== end Script ========== -->
</body>

</html>