<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_about_text();
$card = $obj->show_overview();
?>

<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->

	<!-- ============================== main section ================================= -->

	<section class="container my-5">

		<div class="row pb-5">

			<div id="about_img" class="mx-auto">
				<img src="assets/images/logo.png" class="rounded mx-auto d-block" style="width: 90px; height: 90px;" alt="">
				<h2 class="text-center mx-auto text-danger font-weight-bold" style="padding-top: 10px;">BiddaBD Global</h2>
			</div>

			<div class="row w-100">

			</div>


			<div class="row mx-auto mt-5" id="about_glance">
				<p class="mx-auto font-weight-bold" style="font-size: 17px; border-bottom: 2px solid red;">About us at a Glance</p>
				<?php while ($element = mysqli_fetch_assoc($item)) { ?>
					<div id="about-text">
						<p><?php echo $element['text']; ?></p>
					</div>
				<?php } ?>
			</div>


			<section class="container mt-5 pt-5 pb-5 btn-warning" id="study-solution">
				<div class="row pt-5 pb-5">

					<!-- -------------- one ------------- -->
					<?php while ($element = mysqli_fetch_assoc($card)) { ?>
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body">

									<h4 class="my-3 text-center"><?php echo $element['heading']; ?></h4>

									<div class="my-4 text-justify">

										<p><?php echo $element['text']; ?></p>

									</div>

								</div>
							</div>
						</div>
					<?php } ?>

					<!-- ----------------- two ------------------ -->

					<!-- <div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<h4 class="my-3 text-center">TESTIMONIAL</h4>
								<div class="my-4 text-justify">

									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae perferendis, error magni facere reiciendis libero sapiente consectetur reprehenderit illum ipsa saepe tenetur earum fugit. Quae tempora esse est adipisci ex ab nostrum nisi exercitationem? Distinctio, molestias laboriosam eaque tempore dicta optio nostrum illum voluptatum, tenetur incidunt. Repellendus cum voluptatibus molestiae excepturi molestias culpa. Ratione dignissimos itaque quo</p>

								</div>
							</div>
						</div>
					</div> -->

					<!-- ------------------------ three -------------------------- -->

					<!-- <div class="col-lg-4">
						<div class="card">
							<div class="card-body ">
								<h4 class="my-3 text-center"> CONCERN</h4>
								<div class="my-4 text-justify">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae perferendis, error magni facere reiciendis libero sapiente consectetur reprehenderit illum ipsa saepe tenetur earum fugit. Quae tempora esse est adipisci ex ab nostrum nisi exercitationem? Distinctio, molestias laboriosam eaque tempore dicta optio nostrum illum voluptatum, tenetur incidunt. Repellendus cum voluptatibus molestiae excepturi molestias culpa. Ratione dignissimos itaque quo</p>
								</div>
							</div>
						</div>
					</div> -->

				</div>
			</section>

		</div>
	</section>

	<!-- ============================== main section end ================================= -->

	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->



</body>

</html>