<?php
    include "connect/connection.php";
    
    if(isset($_POST['submit'])){
        $id =$_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mail = $_POST['mail'];
        $mobile = $_POST['mobile'];
        $destination = $_POST['destination'];
        $withtravel = $_POST['withtravel'];
        $personNo = $_POST['personNo'];
        $starttrip = $_POST['starttrip'];
        $endtrip = $_POST['endtrip'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];
        
        $sql = "UPDATE travelinsert_tbl SET name='$name',address='$address',mail='$mail',mobile='$mobile',destination='$destination',withtravel='$withtravel',personNo='$personNo',starttrip='$starttrip',endtrip='$endtrip',gender='$gender',message='$message' WHERE id = $id";
        
        $result = mysqli_query($link,$sql);
        
        if($result) {
            header("Location: show.php?msg=Record Update Successfully");
        }
        else{
            echo "Failed: " . mysqli_error($link);
        }
        }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Spot Travel | Home :: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Travel Spot" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->

    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- fot Agents css -->
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <!-- //fot Agents css -->
    <!-- bootstrap icon links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- web-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
</head>


<style>
    section.back {
        width: 100%;
        height: 100vh;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("./images/4.jpg");
        position: fixed;
    }

    .from-group {
        height: 90vh;
        overflow-x: auto;
        background-color: rgba(0, 0, 0, 0.5);
        margin-top: 5%;
        padding: 20px;
        width: 100%;
    }

    label {
        color: powderblue;
        font-weight: 600;
        margin-left: 1%;
        margin-top: 2%;
    }

    input[type=text],
    select {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: aliceblue;
        border: 2px solid #000;
        margin-top: 1%;
    }

    input[type=date] {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: aliceblue;
        border: 2px solid #000;
        margin-top: 1%;
    }

    input[type=file] {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: aliceblue;
        border: 2px solid #000;
        margin-top: 1%;
    }

    textarea {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: aliceblue;
        border: 2px solid #000;
        margin-top: 1%;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }


    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: rgba(0, 0, 0, 0.1);
    }


    #tourist {
        background: rgba(0, 0, 0, 0.5);
        border: 2px solid #000;
        margin-top: 1%;
        color: aliceblue;
    }

    .selected option {
        background: rgba(0, 0, 0, 0.5);
        padding: 10px !important;
    }

 
</style>

<body>

<?php
$sql = "SELECT * FROM travelinsert_tbl";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

?>

    <!--insert form-->
    <section class="back">



        <div class="container">
    <form action="update.php" class="from-group" method="Post" id="ajax_form" name="myForm"
        onsubmit="return validateForm()">
        <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
            
        </div>
        <a href="index.php">
            <h1 class="ms-5 text-center"
                style="color:#22a6b3; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><i
                    class="bi bi-airplane"></i> Tour Travel Tourism Journey Update Customer Details <i class="bi bi-airplane"></i></h1>
        </a>
        <hr class="text-secondary fw-bold">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <label>Name</label>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">

                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $row['address']?>">

                <label>Mail</label>
                <input type="text" class="form-control" name="mail" value="<?php echo $row['mail']?>">

                <label>Contact Number</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']?>">

                <div class="row mt-4 mb-3">
                    <div class="col-lg-6 col-md-6">

                        <label>Tourist Destination</label>
                        <select name="destination" id="tourist" class="custom-select form-control" selected="<?php echo $row['destination']?>">
                            <option>----Choose Destination-----</option>
                            <option value="<?php echo $row['destination']; ?>" selected><?php echo $row['destination']; ?></option>
                            <option class="selected form-control" value="agra">Agra</option>
                            <option class="selected form-control" value="mathura">Mathura</option>
                            <option class="selected form-control" value="nepal">Nepal</option>
                            <option class="selected form-control" value="kashmir">Kashmir</option>
                            <option class="selected form-control" value="manali">Manali</option>
                            <option class="selected form-control" value="rishikesh">Rishikesh</option>
                            <option class="selected form-control" value="simla">Simla</option>
                            <option class="selected form-control" value="goa">Goa</option>
                            <option class="selected form-control" value="goa">dubai</option>
                            <option class="selected form-control" value="gujrat">Gujrat</option>
                        <select>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label>Who Would You Travel With...?</label>
                        <select name="withtravel" id="tourist" class="custom-select form-control" value="<?php echo $row['withtravel']?>">
                            <option>----Select Type-----</option>
                            <option value="<?php echo $row['withtravel']; ?>" selected><?php echo $row['withtravel']; ?></option>
                            <option class="selected form-control" value="single">Single</option>
                            <br>
                            <option class="selected form-control" value="couple">Couple</option>
                            <br>
                            <option class="selected form-control" value="family">With Family</option>
                            <br>
                            <option class="selected form-control" value="friendgroup">With Friends</option>

                            <select>

                    </div>
                </div>

                <div class="mt-4">
                    <label>Number of Persons Traveling</label>
                    <input type="text" class="form-control" name="personNo" value="<?php echo $row['personNo']?>">
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col-lg-6 col-md-6">
                        <label>Trip Starts On </label>
                        <input type="date" id="d1" class="form-control" value="<?php echo $row['starttrip']?>" name="starttrip" min="<?php

                        $mydate = getdate(date("U"));
                        echo "$mydate[year]-$mydate[mon]-$mydate[mday]";
                        ?>
">
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <label>Trip Ends On </label>
                        <input type="date" id="d2" class="form-control" value="<?php echo $row['endtrip']?>" name="endtrip" min="<?php

                        $mydate = getdate(date("U"));
                        echo "$mydate[year]-$mydate[mon]-$mydate[mday]";
                        ?>
">
                    </div>

                </div>

                <div class="mt-3">
                    <label for="gender">Gender</label>
                    <input type="radio" class="ms-5" value="<?php echo $row['gender'];?>" name="gender" value="male" <?php if 
                            ($row['gender']=="male") { echo 'checked'; } else {} ?>> <span style="color:powderblue">Male</span> &nbsp;
                    
                    <input type="radio" class="ms-5" value="<?php echo $row['gender'];?>" name="gender" value="female" <?php if 
                            ($row['gender']=="female") { echo 'checked'; } else {} ?>> <span style="color:powderblue">female</span> &nbsp;
                    
                    <input type="radio" class="ms-5" value="<?php echo $row['gender'];?>" name="gender" value="other" <?php if 
                            ($row['gender']=="other") { echo 'checked'; } else {} ?>> <span style="color:powderblue">Other</span> &nbsp;
                
                </div>
                
                <label>Additional Information</label>
                <input type="text" name="message" value="<?php echo $row['message']?>" <?php if ($row['gender']=="other") { echo 'checked'; } else {} ?>>
                
                
                <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="date">

            </div>
        </div>
        <div class="mt-3 text-center">
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-info btn-lg ms-3">
            <button type="reset" class="btn btn-outline-success btn-lg ms-3" name="reset" value="reset">Reset</button>
            <a href="show.php" class="btn btn-outline-info btn-lg ms-3"> Show Data </a>
            
        </div>
    </form>
    <!--insert form end-->
    </div>
    </section>
    
<?php
header("Location:show.php");
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
        $(document).on('ready', function () {
            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                responsive: [{
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
    <link rel="stylesheet" href="css/smoothbox.css" type='text/css'>
    <!-- //gallery -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
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
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
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
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- /start-smooth-scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- //start-smooth-scrolling -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>

</html>
