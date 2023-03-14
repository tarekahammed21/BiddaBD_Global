<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_events_text_documentation();
?>
<!DOCTYPE html>
<html>
<?php include('head.php'); ?>

<body>

	<!--============================== nav section ================== -->
	<?php include('nav.php'); ?>
	<!-- ====================== end nav section =======================-->

	<!-- services page header  -->
	<div class="col mt-4 pt-5 text-center ">
		<h2 class="text-danger">Apply Now</h2>
	</div>


	<!-- ============================== main section ================================= -->

	<section class="container my-5">

		<div class="row pb-5">




			<!-- ============== form ========== -->
			<div class="col-md-6 bg-light py-3">

				<h3>Apply Now</h3>
				<form class="pt-3" action="event_application_process.php" method="POST">
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" name="first_name" class="form-control" id="firstname">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" name="last_name" class="form-control" id="lastname">
					</div>
					<div class="form-group">
						<label for="select_country">Select Country Code</label>
						<select class="form-control" name="country_code" id="select_country">
							<option>---Select---</option>
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
						<label for="cell">Mobile Number</label>
						<input type="text" name="mobile_number" class="form-control" id="mobile_number">
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="study_destination">Study Destination</label>
						<select class="form-control" name="study_destination" id="study_destination">
							<option>---select---</option>
							<option>Select</option>
							<option>Germany</option>
							<option>USA</option>
							<option>UK</option>
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
						<select class="form-control" name="course_level" id="course">
							<option>---select---</option>
							<option>Bachelor's degree</option>
							<option>Diploma</option>
							<option>Master's</option>

						</select>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" name="subject" class="form-control" id="subject">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" id="message" class="form-control"></textarea>
					</div>

					<!-- <div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="check">
						<label class="form-check-label" for="check">Yes, I agree with the <a href="privacy_plicy.html">privacy & policy</a> as well as agree to receive communications from BiddaBD Global.</label>
					</div> -->
					<button type="submit" name="add" class="btn btn-danger btn-block">Submit</button>
				</form>
			</div>


			<div class="col-md-6" id="">
				<div class="" id="">
					<?php while ($element = mysqli_fetch_assoc($item)) { ?>
						<div class="py-3">

							<h3><?php echo $element['header']; ?></h3>
							<p><?php echo $element['text']; ?></p>
						</div>
					<?php } ?>

					<!-- <div class="">
							<h3>Tanin</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint harum deleniti ea rerum debitis, fugit? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, pariatur!</p>
						</div> -->
				</div>


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