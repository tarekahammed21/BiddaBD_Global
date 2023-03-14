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
                        <form action="events_process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Image: </label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Event Name: </label>
                                        <input type="text" class="form-control" name="event_name" id="exampleFormControlInput1" placeholder="Input Events Name Here">
                                    </div>
                                </div>

                                <!-- <br> <br> -->
                            </div> <br>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Event Time: </label>
                                        <input type="time" class="form-control" name="time" id="exampleFormControlInput1" placeholder="Input Events Name Here">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Event Date: </label>
                                        <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder="Input Events Name Here">
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