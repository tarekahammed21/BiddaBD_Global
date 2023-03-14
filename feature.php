 <?php
	$obj = new show();
	$item = $obj->show_features();
	?>
 <div class="container">
 	<div class="text-center">
 		<h2 class="d-inline-block px-5" style="border-bottom: 2px solid #000;">OUR FEATURES</h2>
 	</div>
 	<div class="row flexbox">
 		<?php while ($element = mysqli_fetch_assoc($item)) { ?>
 			<div class="col-md-4 item">
 				<div class="featured-box">
 					<div class="box-content">
 						<img src="assets/images/icon.jpg" style="margin-right: 50px;" class="img-fluid rounded-circle w-50 " id="study_img_icon">
 						<h4 class="text-uppercase mohsin"><?php echo $element['heading']; ?></h4>
 						<p><?php echo $element['text']; ?></p>
 					</div> 
 				</div>
 			</div>
 		<?php } ?>
 	</div>
 </div>
 <br>