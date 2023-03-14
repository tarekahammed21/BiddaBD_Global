<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <?php include('head.php'); ?>
    <style>
        .table {
            padding: 20px;
        }
    </style>
</head>

<body>
    <!--============================== nav section ================== -->
    <?php include('nav.php'); ?>
    <!-- ====================== end nav section =======================-->
    <br>
    <div class="card">

        <div class="card-body">
            <blockquote class="blockquote mb-0" style="height: 300px;">
                <img src="assets/images/career.jpg" alt="" style="width: 1500px; height:300px">

            </blockquote>
        </div>
    </div>
    <br><br>

    <div class="card">
        <div class="card-body">
            <form action="apply_process.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name Here">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Email Here">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone Number Here">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Post Name Here">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Resume</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br><br>


    <!-- =================== end request form ========== -->
    <?php include('footer.php'); ?>

    <!-- =================== Script ================= -->
    <?php include('script.php'); ?>
    <!-- =================== end Script ========== -->
</body>

</html>