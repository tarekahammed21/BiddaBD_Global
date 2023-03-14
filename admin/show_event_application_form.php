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
                $item = $obj->event_apply_now(); 
                ?>
              <!-- MAIN CONTENT-->
              <div class="main-content">
                  <div class="section__content section__content--p30">
                      <div class="container-fluid" style="overflow-x:auto;">
                          <table class="table table-bordered ">
                              <thead>
                                  <tr>
                                      <th scope="col">Sl No.</th>
                                      <th scope="col">First Name</th>
                                      <th scope="col">Last Name</th>
                                      <th scope="col">Country Code</th>
                                      <th scope="col">Mobile Number</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Study Destination</th>
                                      <th scope="col">Course Level</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Message</th>
                                      <!-- <th scope="col">Action</th> -->
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php while ($element = mysqli_fetch_assoc($item)) { ?>
                                      <tr>
                                          <th><?php echo $element['id']; ?></th>
                                          <th><?php echo $element['first_name']; ?></th>
                                          <th><?php echo $element['last_name']; ?></th>
                                          <th><?php echo $element['country_code']; ?></th>
                                          <th><?php echo $element['mobile_number']; ?></th>
                                          <th><?php echo $element['email']; ?></th>
                                          <th><?php echo $element['study_destination']; ?></th>
                                          <th><?php echo $element['course_level']; ?></th>
                                          <th><?php echo $element['subject']; ?></th>
                                          <th><?php echo $element['message']; ?></th>
                                          <!-- <td><a class="btn btn-danger" href="delete_blog.php?data=delete&&blogs_id=<?php echo $element['id']; ?>" role="button"><i class="fa fa-trash"></i></a></td> -->
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