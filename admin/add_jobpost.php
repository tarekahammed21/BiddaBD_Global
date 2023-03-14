<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include('mheader.php'); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include('sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include('fheader.php'); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="job_post_process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Post Name: </label>
                                        <input type="text" class="form-control" name="post_name" id="exampleFormControlInput1" placeholder="Input Post Name Here">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Last Date: </label>
                                        <input type="date" class="form-control" name="last_date" id="exampleFormControlInput1">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Job Description: </label>
                                        <input type="text" class="form-control" name="job_description" id="exampleFormControlInput1" placeholder="Input Job Description Here">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="add">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>
</body>

</html>