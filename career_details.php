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
    <?php
    include("backend/show.php");
    $obj = new Show();
    if (isset($_GET['data'])) {
        $job_id = $_GET['job_id'];
        if ($_GET['data'] == 'show') {
            $msg = $obj->show_job($job_id);
        }
    }
    ?>
    <div class="card">
        <?php while ($element = mysqli_fetch_assoc($msg)) { ?>
            <div class="card-body">
                <center><?php echo $element['post_name']; ?></center>
                <?php echo $element['job_description']; ?>
            </div>
        <?php } ?>
    </div>

    <br><br>
    <center><a class="btn btn-primary" href="apply.php" role="button">Apply</a></center>
    <br><br>

    <!-- =================== end request form ========== -->
    <?php include('footer.php'); ?>

    <!-- =================== Script ================= -->
    <?php include('script.php'); ?>
    <!-- =================== end Script ========== -->
</body>

</html>