<?php
include("backend/show.php");
$obj = new show();
$item = $obj->show_jobpost();
?>
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
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl.No</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Last Date</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($element = mysqli_fetch_assoc($item)) { ?>
                    <tr>
                        <th scope="row"><?php echo $element['id']; ?></th>
                        <td><?php echo $element['post_name']; ?></td>
                        <td><?php echo $element['last_date']; ?></td>
                        <td><a class="btn btn-primary" href="career_details.php?data=show&&job_id=<?php echo $element['id'];?>" role="button">View</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- =================== end request form ========== -->
    <?php include('footer.php'); ?>

    <!-- =================== Script ================= -->
    <?php include('script.php'); ?>
    <!-- =================== end Script ========== -->
</body>

</html>