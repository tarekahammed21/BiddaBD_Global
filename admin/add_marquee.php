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

                         <form action="marquee_process.php" method="POST" >
                             <div class="mb-3">
                                 <label for="exampleInputEmail1" class="form-label">Text: </label>
                                 <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 <!-- <div id="emailHelp" class="form-text">Text</div> -->
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