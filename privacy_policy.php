<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_privacy_policy();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->








	<!-- services page header  -->
	<div class="row">
		<div class="col mt-4 pt-5">
			<h2 class=" text-center text-danger">Privacy and Policy</h2>
		</div>
	</div>


	<!-- ============================== main section ================================= -->

	<section class="container my-5">

		<div class="row pb-5">

			<h3 style="text-decoration: underline;" class="mb-5 d-block">PRIVACY AND POLICY:</h3>
			<h5>Privacy item:</h5>
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>
				<p><?php echo $element['privacy_description']; ?></p>
			<?php } ?>

			<h5>Policy item:</h5>
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>
				<p><?php echo $element['policy_description']; ?></p>
			<?php } ?>
		</div>
	</section>
	<!-- ============================== main section end ================================= -->
	<!-- =================== Script ================= -->
	<?php include('footer.php'); ?>
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->
</body>

</html>