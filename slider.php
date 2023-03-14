<?php
//index.php 
$connect = mysqli_connect("localhost", "root", "", "global");
function make_query($connect)
{
 $query = "SELECT * FROM slider";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="admin/storage/slider/'.$row["image"].'" alt="image_tarek"  style="height:450px; width: 100%"/>
   
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>



   <!-- <h2 align="center">How to Make Dynamic Bootstrap Carousel with PHP</h2> -->
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel" style="margin-top: -50px">
    <ol class="carousel-indicators" >
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>










<?php
include("backend/show.php");
$obj = new show();
$xyz= $obj->show_marquee(); 
?>
<div class="my-0 bg-dark text-light" style="padding-bottom: 5px;" id="marquee_id">
<?php while ($element = mysqli_fetch_assoc($xyz)) { ?>
	<marquee behavior="" direction="rtl" style="font-size: 19px;"><?php echo $element['text'];?></marquee>
	<?php } ?>
</div>