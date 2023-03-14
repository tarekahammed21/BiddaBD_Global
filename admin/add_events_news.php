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
                        <form action="events_news_process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlFile1">Event Image:</label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1">Event Name:</label>
                                        <textarea class="form-control" name="event_name" placeholder="Input Your Event Name Here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlFile1">Time: </label>
                                        <input type="time" name="time" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlFile1">Date: </label>
                                        <input type="date" name="date" class="form-control-file" id="exampleFormControlFile1">
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