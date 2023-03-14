<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_service_students();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->
	<div id="about_img" class="mx-auto" style="padding-top: 15px;">

		<h2 class="text-center mx-auto text-danger font-weight-bold">STUDENT</h2>
	</div>

	<!-- ============================== main section ================================= -->

	<section class="container my-5 d-flex justify-content-center">
		<div class="row">
			<div class="col-md-6">

				<!-- Accordion -->
				<div id="accordion" role="tablist" class="py-3">
					<?php while ($element = mysqli_fetch_assoc($item)) { ?>
						<div class="card">

							<div class="card-header" role="tab">
								<h5 class="mb-0" data-toggle="collapse" href="#collapse1"><?php echo $element['heading']; ?></h5>
							</div>
							<div id="collapse1" class="collapse show" data-parent="#accordion">
								<div class="card-body">
									<p class="lead"><?php echo $element['text']; ?></p>
								</div>
							</div>
						</div>
					<?php } ?>


				</div>
			</div>

			<div class="col-md-6">
				<img src="img/wlc-2.jpg" alt="" class="mb-1">
				<img src="img/wlc-2.jpg" alt="" class="mb-1">
				<img src="img/wlc-2.jpg" alt="" class="mb-1">
			</div>


		</div>
	</section>


	<!-- ============================== main section end ================================= -->
	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->



</body>

</html>