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
                           <div class="row">
                               <div class="col">
                                   <center><img src="images/sucess.jpg" alt="image_sucess"></center>
                               </div>
                           </div>
                           <br>
                           <hr>
                           <br>
                           <?php
                            include("backend/delete.php");
                            $obj = new Delete();
                            if (isset($_GET['data'])) {
                                $contact_id = $_GET['contact_id'];
                                if ($_GET['data'] == 'delete') {
                                    $msg = $obj->delete_contact_id($contact_id);
                                }
                            }
                            ?>
                           <div class="row">
                               <div class="col">
                                   <div class="card">
                                       <div class="card-body">
                                           <center>
                                               <h3>
                                                   <?php
                                                    if (isset($msg)) {
                                                        echo $msg;
                                                    }
                                                    ?>
                                               </h3>
                                           </center>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <br>
                           <hr>
                           <br>
                           <div class="row">
                               <div class="col">
                                   <center><a class="btn btn-primary" href="show_contact.php" role="button">Back</a></center>
                               </div>
                           </div>
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