<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_term_conditions();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->








	<!-- services page header  -->
	<!-- <div class="row">
			<div class="col mt-4 pt-5">
				<h2 class=" text-center text-danger">Privacy and Policy</h2>				
			</div>
		</div> -->


	<!-- ============================== main section ================================= -->

	<section class="container my-5">

		<div class="row pb-5">

			<center>
				<h3 style="text-decoration: underline; color: red;" class="mb-5 d-block">Terms and Conditions</h3>
			</center>






			<h5>Terms Item:</h5>
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>
				<p><?php echo $element['terms_description']; ?></p>
			<?php } ?>

		</h5>
			<?php while ($element = mysqli_fetch_assoc($item)) { ?>
				<p><?php echo $element['conditions_description']; ?></p>
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