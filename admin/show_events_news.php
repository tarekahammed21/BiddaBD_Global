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
             <?php
                include("backend/disply.php");
                $obj = new Display();
                $item = $obj->show_events_news();
                ?>
             <!-- MAIN CONTENT-->
             <div class="main-content">
                 <div class="section__content section__content--p30">
                     <div class="container-fluid">
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th scope="col">Sl No.</th>
                                     <th scope="col">Image</th>
                                     <th scope="col">Event Name</th>
                                     <th scope="col">Time</th>
                                     <th scope="col">Date</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php while ($element = mysqli_fetch_assoc($item)) { ?>
                                     <tr>
                                         <th><?php echo $element['id']; ?></th>
                                         <td><img src="storage/events_news/<?php echo $element['image']; ?>" alt="Event image" style="width:100px; height:100px;"></td>
                                         <th><?php echo $element['event_name']; ?></th>
                                         <th><?php echo $element['time']; ?></th>
                                         <th><?php echo $element['date']; ?></th>
                                         <td><a class="btn btn-danger" href="delete_events_news.php?data=delete&&events_news_id=<?php echo $element['id']; ?>" role="button"><i class="fa fa-trash"></i></a></td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
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