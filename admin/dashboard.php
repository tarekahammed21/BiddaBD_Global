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
                             <div class="col-md-12">
                                 <div class="overview-wrap">
                                     <center>
                                         <h2 class="title-1">Welcome to Biddabd Globals Admin Dashboard</h2>
                                     </center>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <br>
                         <div class="row">
                             <div class="col-sm-6 col-lg-3">
                                 <div class="overview-item overview-item--c1">
                                     <div class="overview__inner">
                                         <div class="overview-box clearfix">
                                             <div class="icon">
                                                 <i class="zmdi zmdi-account-o"></i>
                                             </div>
                                             <div class="text">
                                                 <h2>10368</h2>
                                                 <span>members online</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="overview-item overview-item--c2">
                                     <div class="overview__inner">
                                         <div class="overview-box clearfix">
                                             <div class="icon">
                                                 <i class="zmdi zmdi-shopping-cart"></i>
                                             </div>
                                             <div class="text">
                                                 <h2>388,688</h2>
                                                 <span>items solid</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="overview-item overview-item--c3">
                                     <div class="overview__inner">
                                         <div class="overview-box clearfix">
                                             <div class="icon">
                                                 <i class="zmdi zmdi-shopping-cart"></i>
                                             </div><br>
                                             <div class="text">
                                                 <h2>1,086</h2>
                                                 <span>this week</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="overview-item overview-item--c4">
                                     <div class="overview__inner">
                                         <div class="overview-box clearfix">
                                             <div class="icon">
                                                 <i class="zmdi zmdi-money"></i>
                                             </div>
                                             <div class="text">
                                                 <h2>$1,060,386</h2>
                                                 <span>total earnings</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
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