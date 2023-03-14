<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_news();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->

	<!-- services page header  -->
	<div>
		<h2 class="text-center text-danger" style="padding-top: 25px;" >News</h2>
	</div>

	<!-- ============================== main section ================================= -->
	<div class=" main_s" style="width: 50%; margin: 50px auto;">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-append">
					<button class="btn btn-secondary" type="button">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
	</div>
	<!-- ======================  news and blogs  ================== -->


	<section class="pb-5 pl-5 pr-5" style="text-decoration: none;">
		<div class="row pt-5">
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>
				<!-- -------------- one ------------- -->
				<div class="col-lg-4 mb-4">
					<div class="card">
						<img style="height:fit-content" src="admin/storage/add_news/<?php echo $element['image']; ?>" class="img-fluid" id="news_event_img">
						<div class="card-body ">

							<a href="#" class="my-3 text-success text-justify" style="font-size:25px;line-height:22px"><?php echo $element['heading']; ?></a>

							<p style="font-size:17px;" class="mt-3"><?php echo $element['details']; ?></p>

							<a href="#">Read More >></a>


						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</section>

	<!-- ============================== main section end ================================= -->

	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->
</body>

</html>