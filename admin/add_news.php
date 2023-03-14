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
                        <form action="news_process.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">News Image: </label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">News Heading: </label>
                                        <textarea class="form-control" name="heading" placeholder="Input Your Heading Here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <!-- <div id="emailHelp" class="form-text">Text</div> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">News Details: </label>
                                        <textarea class="form-control" name="details" placeholder="Input Your Details Here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <!-- <div id="emailHelp" class="form-text">Text</div> -->
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