<!DOCTYPE html>
<html>
<?php include('head.php'); ?> 

<body>

    <!--============================== nav section ================== -->
    <?php include('nav.php'); ?>
    <!-- ====================== end nav section =======================-->
    <div class="container">
        <form action="request_process.php" method="POST">
            <h2 class="text-center" style="border-bottom: 2px solid #fff; text-transform:uppercase">REQUEST FORM</h2>
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name-f">Name</label>
                    <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your first name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="address-1">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="Enter your Address..." rows="3" required></textarea>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="zip">Postal-Code</label>
                    <input type="zip" class="form-control" name="postal_code" id="zip" placeholder="Postal-Code." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="Country">Country</label>
                    <select class="form-control" name="country" id="country">
							
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
                <div class="col-sm-6 form-group">
                    <label for="Date">Date Of Birth</label>
                    <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="sex">Gender</label>
                    <select class="form-select" name="gender" aria-label="Default select example">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Unspecified</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="ielts">Have IELTS?</label>
                    <select class="form-select" name="ielts" aria-label="Default select example">
                        <option>Select</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="address-1">Interested Course</label>
                    <input type="address" class="form-control" name="interested_course" id="address-1" placeholder="" required>
                </div>

                
                <div class="col-sm-12 form-group mb-0" style="padding-top: 8px;">
                    <button name="add" class="btn btn-primary float-left">Submit</button>
                </div>

            </div>
        </form>
    </div>

    <!-- =================== end request form ========== -->
    <?php include('footer.php'); ?>

    <!-- =================== Script ================= -->
    <?php include('script.php'); ?>
    <!-- =================== end Script ========== -->



</body>

</html>