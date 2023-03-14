<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_service_institute();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>
	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->
	<div id="about_head" class="mx-auto" style="padding-top: 10px;">
		<h2 class="text-center mx-auto text-danger font-weight-bold">Partner Institute</h2>
	</div>
	<div style="margin-left: 80px; margin-right: 80px; padding:10px; text-align:justify; border: 1px solid blue;">
		Details of Partnars: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ullam id ut repellendus et incidunt,
	</div>

	<!-- ============================== main section ================================= -->

	<section class="mt-4" class="welcome_section">
		<div class="section container-fluid about" id="about" style="background-color: #fff;">
			<div class="row">
				<center>
					<h2 style="  padding-bottom: 25px;  text-decoration: underline; color: green; text-transform: uppercase">WELCOME TO BIDDABD GLOBAL EDUCATION</h2>
				</center>

				<?php while ($element = mysqli_fetch_assoc($item)) { ?>
					<div class="card pt-3" style="width: 18rem;">
						<img class="card-img-top " src="admin/storage/service_institute/<?php echo $element['image']; ?>" alt="Card image cap">
						<div class="card-body">
							<p class="card-text"><?php echo $element['text']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<hr>

	</section>

	<!-- ============================== main section end ================================= -->
	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->
</body>

</html>