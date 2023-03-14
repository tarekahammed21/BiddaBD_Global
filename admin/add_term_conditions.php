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
                        <form action="term_conditions.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Terms Description: </label>
                                        <textarea class="form-control" name="terms_description" placeholder="Input Your Terms Description Here" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <!-- <div id="emailHelp" class="form-text">Text</div> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Conditions Description: </label>
                                        <textarea class="form-control" name="conditions_description" placeholder="Input Your Conditions Description Here" id="exampleFormControlTextarea1" rows="3"></textarea>
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