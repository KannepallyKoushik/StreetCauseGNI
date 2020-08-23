<?php
include_once("admin/db.php");
if(!empty($_REQUEST['tid']))
{
	$tid=$_REQUEST['tid'];
	
	
	$data=mysqli_query($conn,"select * from boardmembers where term_id='".$tid."' and post_name='president'") or die(mysqli_error($conn));
	$data1=mysqli_query($conn,"select * from boardmembers where term_id='".$tid."' and post_name!='president'") or die(mysqli_error($conn));
	
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
	<style>
	.term  a
	{
		text-decoration:none;
	}
	.term li
	{
		list-style-type:none;
		float:left;
		margin-right:35px;
		border:1px solid #5b85fa;
		border-radius:15px;
		color:black;
		font-weight:bold;
		padding:15px;
	}
	.term
	{
		margin-bottom:61px;
	}
	</style>
</head>
<body class="single-page causes-page">
    <?php include("header.php"); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Our Board Members</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="featured-cause">
        <div class="container">
		
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Executive Board</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->
<ul class="term">
<?php $term=mysqli_query($conn,"select * from batch");
while($res=mysqli_fetch_array($term))
{
	?>
	<a href="board.php?tid=<?php echo $res['id']; ?>"><li><?php echo $res['term']; ?></li></a>
<?php } ?>
</ul>       

<?php if(!empty($_REQUEST['tid'])) 
{ 
?>

            <div class="row">
			<?php 
			while($res=mysqli_fetch_array($data))
	{ ?>
		
                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="admin/boardmembers/<?php echo $res['image'];  ?>" alt="" style="height:217px;width:252px">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><?php echo $res['name']; ?></h3>

                                <div class="posted-date">
                                    <a href="#"><?php echo "phone:".$res['phone']; ?></a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#"><h6><?php echo $res['post_name']; ?></h6></a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0"><?php echo "portfolio:  ".$res['portfolio']; ?></p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                           

                            
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

	<?php } ?>
            </div><!-- .row -->
<?php }  ?>

        </div><!-- .container -->
    </div><!-- .featured-cause -->
<?php if(!empty($_REQUEST['tid'])) { ?>
    <div class="our-causes pt-0">
        <div class="container">
            <div class="row">
			<?php 
			while($res1=mysqli_fetch_array($data1))
	{ ?>
			
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="admin/boardmembers/<?php echo $res1['image'];  ?>" alt="" style="height:217px;width:252px">

                            
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#"><?php echo $res1['name']; ?></a></h3>
                            </header><!-- .entry-header -->
							
							
							<div class="posted-date">
                                    <a href="#"><?php echo "phone:".$res1['phone']; ?></a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#"><h6><?php echo $res1['post_name']; ?></h6></a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0"><?php echo "portfolio:  ".$res1['portfolio']; ?></p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                

                                
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
	<?php } ?>

      </div>          
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
<?php } ?>
  
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