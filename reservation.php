<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Photo Factory | Reservation</title>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%3A500%2C700%7CRoboto+Condensed:700%7CRoboto%3A700&amp;display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/line-awesome.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/responsive.css"> 
	<link href="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.css" rel="stylesheet"/>
	<link href="https://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css" rel="stylesheet"/>

	<!-- Icon -->
	<link rel="icon" href="img/favicon.png" sizes="32x32" />
</head>
<body class="has-spotlight ashade-smooth-scroll">
    <!-- Header -->
	<header id="ashade-header">
        <div class="ashade-header-inner">
            <div class="ashade-logo-block">
                <a href="index.php" class="ashade-logo">
                	<img src="img/logo.png" alt="Ashade Logo" width="100" height="110">
                </a>
            </div>
            <div class="ashade-nav-block">
                <nav class="ashade-nav">
                    <ul class="main-menu">
                        <li class="menu-item-has-children"><a href="index.php">Home</a> </li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="portfolio.php">Portfolio</a></li> 
                        <li><a href="contacts.php">Contacts</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span> &nbsp; </span>
            Reserve Now
        </h1>
    </div>

    <main class="ashade-content-wrap">
		<div class="ashade-content-scroll">
			<div class="ashade-content">
				<section class="ashade-section">
					<div class="ashade-row">
                        <div class="ashade-col col-12">
                        
						</div>
					</div>
				</section>
				<section class="ashade-section">
					<div class="ashade-row">
						
						<div class="ashade-col col-12">
						<div id="signup-result-header"></div>
						<div id="signupform-hide-header">
							<form class="reservation" id="reservation" novalidate>
								<div class="ashade-row ashade-small-gap">
									<div class="col-md-6">
										<div class="ashade-col">
											<label for="">Name</label>
											<input type="text" id="name" name="name" placeholder="Your Name" required>
										</div>	
										<div class="ashade-col">
											<label for="">Vaneu</label>
											<input type="text" id="vanue" name="vanue" placeholder="Enter Your Vanue" required>
										</div>
										<div class="ashade-col">
											<label for="">No. Of Events</label>
											<input type="number" id="events" name="events" placeholder="No. of Events" required>
										</div> 
										<div class="ashade-col">
											<label for="Steadycam">Steadycam/Ronin</label>
											<input type="radio" name="steadycam" value="Yes">Yes
											<input type="radio" name="steadycam" value="No">No
											<label for="steadycam" generated="true" class="error"></label>
											 
										</div> 
										<div class="ashade-col">
											<label for="PrePost">Pre-Post Wedding Shoot </label>
											<input type="radio" name="prepost" value="Yes">Yes
											<input type="radio" name="prepost" value="No">No
											<label for="prepost" generated="true" class="error"></label>
 
										</div> 
									</div> 
									<div class="col-md-6">
										<div class="ashade-col">
											<label for="">Date</label>
											<input type="text" id="datePick" name="date" placeholder="Select Date" required>
										</div>
										<div class="ashade-col">
											<label>Photographer/s per event</label>
											<select name="photographer" id="">
												<option style="display: none;" value="" selected>No of Photographer</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="ashade-col">
											<label>Videographer/s per event</label>
											<select name="videographer" id="">
												<option style="display: none;" value="" selected>No of Videographer</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="ashade-col">
											<label for="album">Album</label>
											<input type="radio" name="album" id="album" value="Yes">Yes
											<input type="radio" name="album" id="album" value="No">No
											<label for="album" generated="true" class="error"></label>
											 
										</div>
										<div class="ashade-col">
											<label for="drone">Drone</label>
											<input type="radio" name="drone" value="Yes">Yes
											<input type="radio" name="drone" value="No">No
											<label for="drone" generated="true" class="error"></label>
										</div> 
									</div> 
								</div>
								<div class="ashade-contact-form__footer">
									<div class="ashade-contact-form__response"></div>
									<div class="ashade-contact-form__submit">
										<input type="submit" value="Send">
									</div>
								</div>
							</form>
							</div>
						</di><!-- .ashade-col -->
					</div><!-- .ashade-row -->
				</section>
			</div><!-- .ashade-content -->
			
			<!-- Footer -->
			<footer id="ashade-footer">
				<div class="ashade-footer-inner">
					<div class="ashade-footer__socials">
						<ul class="ashade-socials">
							<li><a href="https://www.facebook.com/thephotofaktory">Fb</a></li>
							<!-- <li><a href="#">Tw</a></li> -->
							<li><a href="https://www.instagram.com/the.photofaktory">In</a></li>
							<!-- <li><a href="+92-341-3101299">Wa</a></li> -->
							<!-- <li><a href="#">Yt</a></li> -->
						</ul>
					</div>
					<div class="ashade-footer__copyright">
						Copyright &copy; 2020. All Rights Reserved.
					</div>
				</div>
			</footer>
		</div><!-- .ashade-content-scroll -->
	</main>
    
    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div>
 

    <!-- UI Elements -->
    <div class="ashade-menu-overlay"></div>
    <div class="ashade-aside-overlay"></div>
    <div class="ashade-cursor is-inactive">
    	<span class="ashade-cursor-circle"></span>
    	<span class="ashade-cursor-slider"></span>
    	<span class="ashade-cursor-close ashade-cursor-label">Close</span>
    	<span class="ashade-cursor-zoom ashade-cursor-label">Zoom</span>
    </div>
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<div class="elfsight-app-d22fb457-de9b-49e5-8dc7-8cfd281177d9"></div>
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/gsap.min.js"></script>
	<script src="js/core.js"></script> 
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.js"></script>
	<script src="js/jquery-validate.js"></script>
	<script src="js/custom.js"></script> 
	<script>
		$(document).ready(function(){
			$('#datePick').multiDatesPicker();  
		});
	</script>
</body>
</html>