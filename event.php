<?php
include_once("admin/db.php");

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
<body class="single-page portfolio">
   <?php include("header.php"); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Events</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="portfolio-wrap">
        <div class="container">
            <div class="row portfolio-container">
			<?php
			$event=mysqli_query($conn,"select * from events") or die(mysqli_error($conn));
			while($res=mysqli_fetch_array($event))
			{
			?>
                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <a href="gallery.php?id=<?php echo $res['id']; ?>"><img src="admin/boardmembers/<?php echo $res['pics']; ?>" alt=""></a>

                        <h3 class="entry-title"><a href="gallery.php?id=<?php echo $res['id']; ?>"><?php echo $res['event_name']; ?></a></h3>
                        <h4><?php echo $res['date']; ?></h4>
                    </div>
                </div>
                <?php
			}
				?>
                </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-72">
                    <a href="#" class="btn gradient-bg load-more-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
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