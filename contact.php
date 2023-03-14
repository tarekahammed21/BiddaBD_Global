<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_contact();
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


			<div class="col-md-6" id="">
				<?php while ($element = mysqli_fetch_assoc($item)) { ?>
					<div class="pb-3" id="">
						<h3 style="text-decoration:underline" class="text-danger mb-3">Head Office</h3>
						<h5 class="text-primary">Address</h5>
						<p><?php echo $element['address']; ?></p>
						<h5 class="text-primary">Phone</h5>
						<p><?php echo $element['phone_number']; ?></p>
						<h5 class="text-primary">Email</h5>
						<p><?php echo $element['email']; ?></p>
					</div>
				<?php } ?>

				<iframe height="35%" width="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=mohakhali%20amtoli&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

				<div class="mt-3" id="">
					<h3 style="text-decoration:none" class="text-danger">Our Branches</h3>
				</div>

			</div>


			<!-- ============== form ========== -->
			<div class="col-md-6 bg-light py-3">

				<h3>Apply Now</h3>
				<form class="pt-3">
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" id="firstname">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" id="lastname">
					</div>
					<div class="form-group">
						<label for="select_country">Select Country Code</label>
						<select class="form-control" name="" id="select_country">
							<option value="">---Select---</option>
							<option value="">Germany</option>
							<option value="">USA</option>
							<option value="">UK</option>
							<option value="">Spain</option>
							<option value="">France</option>
							<option value="">Italy</option>
							<option value="">Sweden</option>
							<option value="">Switzerland</option>
							<option value="">New Zealand</option>
							<option value="">Japan</option>
						</select>
					</div>

					<div class="form-group">
						<label for="cell">Mobile Number</label>
						<input type="number" class="form-control" id="cell">
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="study_destination">Study Destination</label>
						<select class="form-control" name="" id="study_destination">
							<option value="">--Select--</option>
							<option value="">Germany</option>
							<option value="">USA</option>
							<option value="">UK</option>
							<option value="">Spain</option>
							<option value="">France</option>
							<option value="">Italy</option>
							<option value="">Sweden</option>
							<option value="">Switzerland</option>
							<option value="">New Zealand</option>
							<option value="">Japan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="course">Course Level</label>
						<select class="form-control" name="" id="course">
							<option value="">select</option>
							<option value="">Select</option>
							<option value="">Bachelor's degree</option>
							<option value="">Diploma</option>
							<option value="">Master's</option>

						</select>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" class="form-control" id="subject">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="" id="message" class="form-control"></textarea>
					</div>

					<div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="check">
						<label class="form-check-label" for="check">Yes, I agree with the <a href="privacy_plicy.html">privacy & policy</a> as well as agree to receive communications from BiddaBD Global.</label>
					</div>
					<button type="submit" class="btn btn-danger btn-block">Submit</button>
				</form>
			</div>
		</div>
	</section>



	<!-- ============================== main section end ================================= -->




	<?php include('footer.php'); ?>
	<!-- =================== Script ================= -->
	<?php include('script.php'); ?>
	<!-- =================== end Script ========== -->

</body>

<!-- Mirrored from biddabd-global.netlify.app/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 13:42:36 GMT -->

</html>