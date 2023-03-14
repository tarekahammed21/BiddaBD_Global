 <?php
    
    $obj = new show();
    $item = $obj->show_education();
    ?>
 <section id="" class="hlearn">
     <!--Container-1 Start-->
     <div class="section container-fluid about" id="about" style="background-color: #005BA4;">
         <div class="row">
             <?php while ($element = mysqli_fetch_assoc($item)) { ?>
                 <div class="col-md-4 col-12">
                     <img src="admin/storage/education/<?php echo $element['image']; ?>" alt="learning img" style="height: 250px; width:330px; padding-top:12px; padding-bottom:12px;">
                 </div>
            

             <div class="col-md-8 col-12">
                 <div class="content">
                     <h2 style="color: #fff; text-transform: uppercase">WELCOME TO BIDDABD GLOBAL EDUCATION</h2>
                    
                         <p style="color: #fff; text-transform: capitalize; font-family:Verdana, Geneva, Tahoma, sans-serif"> <?php echo $element['text']; ?>
                         </p>
                     <?php } ?>
                 </div>
             </div>
         </div>
     </div>
     <br>
 </section>