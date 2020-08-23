<?php 
include("admin/db.php");

$data=mysqli_query($conn,"select * from contact");
$res=mysqli_fetch_array($data);

if(isset($_POST['s']))
{
	$name=$_POST['t1'];
	$email=$_POST['t2'];
	$ph=$_POST['t3'];
	$msg=$_POST['t4'];
	
	mysqli_query($conn,"insert into help (name,email,phone,message) values('$name','$email','$ph','$msg')") or die(mysqli_error($conn));
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page contact-page">
<?php include_once("header.php");?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                       

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="https://www.yooying.com/streetcause.gni"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/scgni1/"><i class="fa fa-facebook"></i></a></li>
                            
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span><?php echo $res['ph_num']; ?></span></li>
                            <li><i class="fa fa-envelope"></i><span><?php echo $res['email']; ?></span></li>
                            <li><i class="fa fa-map-marker"></i><span>Hyderabad</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form" method="POST">
                        <input type="text" placeholder="Name" name="t1">
                        <input type="text" placeholder="Email" name="t2">
						<input type="text" placeholder="Phone Number" name="t3">
                        <textarea rows="15" cols="6" placeholder="Messages" name="t4"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="Contact us" name="s">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <div class="col-12">
                    <div class="contact-gmap">
                    <?php echo $res['location']; ?>   
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

   <?php include_once("footer.php"); ?>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>