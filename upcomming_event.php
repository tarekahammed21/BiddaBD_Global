<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_events_news();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->
	<div>
		<h2 class="text-center text-danger" style="padding-top: 10px;">Events</h2>
	</div>

	<section class="mt-5 pb-5 pt-5 pl-5 pr-5">
		<div class="row pt-5">
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>

				<!-- -------------- one ------------- -->
				<div class="col-lg-4 mb-4">
					<div class="card">
						<img src="admin/storage/events_news/<?php echo $element['image']; ?>" class="img-fluid" alt="" title="" id="home_event_img">
						<div class="card-body ">

							<a href="#" class="my-3 text-success text-justify" style="font-size:25px;line-height:22px"><?php echo $element['event_name']; ?></a>

							<p style="font-size:17px;font-weight: bold;"><?php echo $element['time']; ?></p>
							<p style="font-size:17px;font-weight: bold;"><?php echo $element['date']; ?></p>


						</div>
					</div>
				</div>
			<?php } ?>


		</div>
	</section>

	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->
</body>

</html>