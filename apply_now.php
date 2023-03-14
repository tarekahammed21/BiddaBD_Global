<?php
include("backend/show.php");
$obj = new show();
$item = $obj->apply_now_text();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->

	<!-- services page header  -->
	<div class="col mt-4 pt-5" style="text-align: center;">
		<h2 class="text-danger">Apply Now</h2>
	</div>
	<!-- ============================== main section ================================= -->

	<section class="container my-5">

		<div class="row pb-5">

			<!-- ============== form ========== -->
			<div class="col-md-6 bg-dark py-3 text-white">
				<form class="pt-3" action="apply_now_process.php" method="POST">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" id="firstname" required>
					</div>
					<div class="form-group">
						<label for="cell" required>Mobile Number</label>
						<input type="text" name="mobile_number" class="form-control" id="cell" required>
					</div>
					<div class="form-group">
						<label for="email" required>Email Address</label>
						<input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="study_destination">Study Destination</label>
						<select class="form-control" name="study_destination" id="study_destination" required>
							<option>Select</option>
							<option>Germany</option>
							<option>USA</option>
							<option>UK</option>
							<option>Canada</option>
							<option>Spain</option>
							<option>France</option>
							<option>Italy</option>
							<option>Sweden</option>
							<option>Switzerland</option>
							<option>New Zealand</option>
							<option>Japan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="course">Course Level</label>
						<select class="form-control" name="course_level" id="course" required>
							<option>Select</option>
							<option>Bachelor's degree</option>
							<option>Diploma</option>
							<option>Master's</option>

						</select>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" name="subject" class="form-control" id="subject" required>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" id="message" class="form-control"></textarea>
					</div>

					
					<button type="submit" name="add" class="btn btn-danger btn-block">Submit</button>
				</form>
			</div>


			<div class="col-md-6" id="">
				<?php while ($element = mysqli_fetch_assoc($item)) { ?>
					<div class="" id="">

						<div class="py-3">
							<h3><?php echo $element['heading']; ?></h3>
							<p><?php echo $element['description']; ?></p>
						</div>
					</div>
				<?php } ?>

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