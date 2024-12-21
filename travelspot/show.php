<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Spot Travel | Home :: </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Spot" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- fot Agents css -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //fot Agents css -->
<!-- bootstrap icon links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<style>
  section.back{
    width: 100%;
    height: 100vh;
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("./images/3.jpg");
    position: fixed;
}

.table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    color:aliceblue;
    background-color: rgba(0,0,0,0.7);
    border-collapse: collapse;
}

.table thead td, th, tbody {
    color:#22a6b3;
    position: sticky;
    top: 0;
    padding: 15px 25px;
    text-align: center;
    border-collapse: collapse;
}

#table1{
  border-collapse: collapse;
}

/* width */
::-webkit-scrollbar {
    width: 20px;
  }
   
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,0.5); 
    border-radius: 5px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: rgba(0,0,0,0.1); 
  }


  </style>
  <body>

  <?php
    include "connect/connection.php";
    $result = mysqli_query($link,"SELECT * FROM travelinsert_tbl");
  ?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<section class="back">
    
<a href="index.php"><h1 class="ms-5 mt-3 text-center" style="color:#22a6b3; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i class="bi bi-airplane"></i> Show Data <i class="bi bi-airplane"></i></h1></a>
    <hr class="text-light fw-bold">
    <div style="width:100%; height:85vh; overflow:auto; scrollbar-color: #000">
    
  <table class="table table-hover container" id="table1">
  <thead>
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Address</td>
    <td>Mail</td>
    <td>Contact Number</td>
    <td>Tourist Destination</td>
    <td>Who Would You Travel With...?</td>
    <td>Number of Persons Traveling</td>
    <td>Trip Starts On</td>
    <td>Trip End On</td>
    <td>Gender</td>
    <td>Additional Information</td>
    <td>Action</td>
    
  </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["mail"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["destination"]; ?></td>
    <td><?php echo $row["withtravel"]; ?></td>
    <td><?php echo $row["personNo"]; ?></td>
    <td><?php echo $row["starttrip"]; ?></td>
    <td><?php echo $row["endtrip"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["message"]; ?></td>
    <td>
      <a href="update.php?id=<?php echo $row["id"];?>"><i class="bi bi-pencil-square text-info fw-bold fs-3"></i></a>
      <a onclick="dlt(<?php echo $row["id"];?>)"><i class="bi bi-archive ms-2 text-danger fw-bold fs-3" style="cursor:pointer"></i></a>
      
    </td>
    
    
</tr>
</tbody>
<?php
$i++;
}
?>
</table>
</div>
</section>
<?php
}
else{
    echo "No result found";
}
?> 
    

    <!-- main js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //main js -->

<!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!--bootstrap js -->
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- /gallery -->
	<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
		<link rel="stylesheet" href="css/smoothbox.css" type='text/css' >
		<!-- //gallery -->
<script src="js/easy-responsive-tabs.js"></script>
<script src="js/script.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script --> 
			
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	
	<!-- /start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
		<!-- //start-smooth-scrolling -->
    <!-- Placed at the end of the document so the pages load faster -->
  
</body>
</html>