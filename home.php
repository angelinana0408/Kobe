<?php
session_start();
$username = empty($_SESSION["username"]) ? '' : $_SESSION["username"];

	// If the user is logged in, redirect them home
	if (!$username) {
		echo "<script>window.location.href='index.php';</script>";
	}

?>

<!DOCTYPE html>
<html lang="en" class="no-js" style="height:100%;width:100%">
<head>
<title>Kobe Bryant</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slimmenu.css" rel="stylesheet" media="screen">
<script src="js/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.min.js"></script>
</head>
<body style="height:100%;width:100%">
<div class="content" id="home" >
	<div class="wrap">
		<div class="header_style1">
			<!-- start h_logo -->
			<div class="logo">
				<h1><a href="index.html">Kobe Bryant</a></h1>
			</div>
			<!-- start h_menu -->
			<div class="h_menu">
				<ul class="flexy-menu thick orange">
					<li> <a href="#home" class="scroll">Home</a></li>
					<li><a href="#Portfolio" class="scroll">Videos</a></li>
					<li><a href="#skills" class="scroll">Skills</a> </li>
					<li><a class="scroll" href="#Experience">Timeline</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
          <li><a href="logout.php">
						<?php
						if($_SESSION['username'] != ""){
							echo "Hi," . $_SESSION['username']."(click to log out)";
						}
						else {
							echo "click to log in";
						}
						?>
          </a></li>
				</ul>
			</div>
			<!-- end h_menu -->
			<div class="clear"> </div>
		</div>
		<!---------menu-script------------->
		<!-- start manu -->
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<link href="css/header_style1.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!---------end-script-menu------------->
		<div class="slider" >
			<!---start-da-slider----->
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>All-Star MVP</h2>
					<p>Top Professional Basketball Player</p>
					<a href="#group_1" class="da-link scroll"><span>Let's begin</span></a> </div>
				<div class="da-slide">
					<h2>All-Star MVP</h2>
					<p>Top Professional Basketball Player</p>
					<a href="#group_1" class="da-link scroll"><span>Let's begin</span></a> </div>
				<div class="da-slide">
					<h2>All-Star MVP</h2>
					<p>Top Professional Basketball Player</p>
					<a href="#group_1" class="da-link scroll"><span> Let's begin</span></a> </div>
				<nav class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </nav>
			</div>
			<div class="down-arrow"> <a href="#group_1" class="scroll" ><span> </span></a> </div>
			<link rel="stylesheet" type="text/css" href="css/slider.css" />
			<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {

					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});

				});
			</script>
			<!---//End-da-slider----->
		</div>
	</div>
</div>
<!----start-team--------->
<div class="group_1" id="group_1">
	<div class="group_1-items">
		<div class="wrap">
			<div id="owl-demo" class="owl-carousel">
				<div class="item" >
					<div class="carousel">
						<div class="group_1_img">
							<img src="images/kobeSelfie.png" style="width:350px;height:254px">
							<div class="clear"> </div>
						</div>
						<div class="group_1_text">
							<h3>Personal Information</h3>
							<p>Born	:          	August 23, 1978
												         	Philadelphia, Pennsylvania
							</p>
							<p>
									Nationality	:   American
							</p>
							<p>
									Listed height : 6 ft 6 in (1.98 m)
							</p>
							<p>
									Listed weight :	212 lb (96 kg)
							</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="item">
					<div class="carousel">
						<div class="group_1_img">
							<img src="images/career.jpg" style="width:350px;height:254px">
							<div class="clear"> </div>
						</div>
						<div class="group_1_text">
							<h3>Career Information</h3>
							<p>
								High school : Lower Merion(Ardmore, Pennsylvania)
							</p>
							<p>
								NBA draft	: 1996 / Round: 1 / Pick: 13th overall
														Selected by the Charlotte Hornets
							</p>
							<p>
								Playing career : 1996–2016
							</p>
							<p>
								Position :	Shooting guard

							</p>
							<p>
								Number : 8, 24

							</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="item">
					<div class="carousel">
						<div class="group_1_img ">
							<img src="images/award.jpg" style="width:350px;height:254px">
							<div class="clear"> </div>
						</div>
						<div class="group_1_text">
							<h3>Career Highlights and Awards</h3>
							<p>
								5× NBA champion (2000–2002, 2009–2010)
							</p>
							<p>
								2× NBA Finals MVP (2009–2010)
							</p>
							<p>
								NBA Most Valuable Player (2008)
							</p>
							<p>
								18× NBA All-Star (1998, 2000–2016)
							</p>
							<p>
								4× NBA All-Star Game MVP (2002, 2007, 2009, 2011)
							</p>
							<p>
								11× All-NBA First Team (2002–2004, 2006–2013)
							</p>
							<p>
								2× All-NBA Second Team (2000–2001)
							</p>
							<p>
								2× All-NBA Third Team (1999, 2005)
							</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<div class="group_2" id="Portfolio">
	<h3 class="heading">Videos</h3>
	<div class="group_2_items">
		<div class="wrap">
			<div id="owl-demo1" class="owl-carousel">
				<div class="item" >
					<div class="carousel">
						<div class="group_2_img1">


                            <iframe width="675px" height="506px" src="https://www.youtube.com/embed/itIvUYr5UZI?autoplay=1" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="group_2_text2">
							<div class="desc">
								<h3>Dear Basketball: The Legend of Kobe Bryant (Retirement Tribute Mix)</h3>
								<h4>Thank you, Kobe. For all those nights where I sat in front of a flickering television, finding excitement and wonder from the craft you dedicated your life to. In your high flying highlights I found respite from a world that can be oh so cruel.</h4>
							</div>
							<div class="desc">

							</div>
							<div class="desc">

							</div>

						</div>
						<div class="clear"> </div>

					</div>
				</div>
				<div class="item">
					<div class="carousel">
						<div class="group_2_img1">
                        <iframe width="675px" height="506px" src="https://www.youtube.com/embed/QCdQ5LtJBGg" frameborder="0" allowfullscreen></iframe>
                        </div>

						<div class="group_2_text2">
							<div class="desc">
								<h3>The Legend - A Tribute To Kobe Bryant</h3>
								<h4>At 34 years and 104 days of age, Bryant became the youngest player in league history to reach 30,000 career points. He is also the all-time leading scorer in Lakers franchise history. </h4>
							</div>
							<div class="desc">

							</div>
							<div class="desc">

							</div>

						</div>
						<div class="clear"> </div>

					</div>
				</div>
				<div class="item">
					<div class="carousel">
						<div class="group_2_img1">
                        <iframe width="675px" height="506px" src="https://www.youtube.com/embed/vjPVa0_76Wg" frameborder="0" allowfullscreen></iframe>
                        </div>
						<div class="group_2_text2">
							<div class="desc">
								<h3>Kobe Bryant || A Legend Never Dies || “Tribute” ᴴᴰ</h3>
								<h4>Bryant was chosen to start every All-Star Game until his retirement for a record 18 consecutive appearances, and his four All-Star MVP Awards are tied for the most in NBA history. At the 2008 and 2012 Summer Olympics, he won gold medals as a member of the U.S. national team. Sporting News and TNT named Bryant the top NBA player of the 2000s.</h4>
							</div>
							<div class="desc">

							</div>
							<div class="desc">

							</div>

						</div>
						<div class="clear"> </div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="js/owl.carousel.js"></script>
<script>
		    $(document).ready(function() {

		      $("#owl-demo").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav :true,
			    scrollPerPage :true,
			    pagination : true,
    			paginationNumbers: false,
		      });

		    });
		    $(document).ready(function() {

		      $("#owl-demo1").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : false,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : true,
			    scrollPerPage :true,
			    pagination : false,
    			paginationNumbers: false,
		      });

		    });
		    $(document).ready(function() {

		      $("#owl-demo2").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : false,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage :true,
			    pagination : false,
    			paginationNumbers: false,
		      });

		    });
		    </script>
<!-- //Owl Carousel Assets -->
<div class="skills" id="skills">
	<section class="text-light">
		<div  class="wrap">
			<div class="row-content1">
				<h3 class="heading">Skills</h3>
				<p class="para">
					With career averages of 25.0 points, 5.2 rebounds, 4.7 assists, and 1.4 steals per game.<br/>
					he is considered one of the most complete players in NBA history.<br/>
					He was the first player in NBA history to have at least 30,000 career points and 6,000 career assists,<br/>
					and is one of only four players with 25,000 points, 6,000 rebounds and 6,000 assists.
				</p>
				<div class="chart" data-percent="99" data-bar-color="#35AFBA" data-animate="4000">
					<div class="chart-content">
						<div class="percent"></div>
						<div class="chart-title">Grade</div>
					</div>
					<!-- chart-content -->
				</div>
				<!-- chart -->
				<div class="chart" data-percent="60" data-bar-color="#FF6060" data-animate="2500">
					<div class="chart-content">
						<div class="percent"></div>
						<div class="chart-title">Defense</div>
					</div>
					<!-- chart-content -->
				</div>
				<!-- chart -->
				<div class="chart" data-percent="80" data-bar-color="#3AD079" data-animate="3000">
					<div class="chart-content">
						<div class="percent"></div>
						<div class="chart-title">Assists</div>
					</div>
					<!-- chart-content -->
				</div>
				<!-- chart -->
				<div class="chart" data-percent="30" data-bar-color="#58C0E3" data-animate="3500">
					<div class="chart-content">
						<div class="percent"></div>
						<div class="chart-title">Rebound</div>
					</div>
					<!-- chart-content -->
				</div>
				<!-- chart -->
				<div class="clear"> </div>
			</div>
		</div>
	</section>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
</div>

    <div class="exper" id="Experience" style="height:100%;width:100%">
	<div class="wrap" style="height:100%;width:100%">
		<h3 class="heading">Timeline</h3>


 <iframe style="height:100%;width:100%" src="jiaoben3246/index.html" frameborder="0" allowfullscreen></iframe>
<div><div>

<div class="group_3" id="gallery">
<h3 class="heading">Gallery</h3>
<br>
<br>
<iframe width="100%" height="560px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="index1.html"></iframe>

</div>


<div class="footer">
	<div class="wrap">
		<div class="row-content buffer clear-after">
			<section id="top-footer">
				<div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
					<h4>Menu</h4>
					<ul class="plain">
						<li> <a href="#home" class="scroll">Home</a> </li>
						<li><a href="#Portfolio" class="scroll">videos</a></li>
						<li><a href="#skills" class="scroll">Skills</a> </li>
						<li><a class="scroll" href="#Experience">Timeline</a></li>
						<li><a href="#gallery" class="scroll">Gallery</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="widget column three">

				</div>
				<div class="widget column three">

				</div>
				<div class="widget meta-social column three last">


				</div>
				<div class="clear"> </div>
			</section>
			<!-- top-footer -->

		</div>
		<!-- row-content -->
	</div>
	<!-- row -->
	<div class="copy">
		<p>© 2016 cs2830 final project </p>
	</div>
	<!-- scroll_top_btn -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {

				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
		 		};


				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a> </div>





</body>
</html>
