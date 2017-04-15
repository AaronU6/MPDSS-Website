<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="foundation.min.css" />
	<link rel="stylesheet" type="text/css" href="normalize.css" />
	<link rel="stylesheet" type="text/css" href="Stylesheet.css" />
	<script src="jquery.js"></script>
	<script src="foundation.min.js"></script>
	<script src="app.js"></script>
	<link rel="stylesheet" id="tt-easy-google-fonts-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300&amp;subset=latin%2Call&amp;ver=4.3.1" type="text/css" media="all">
       

</head>
<body>
	<header>
		<div class='menu'>
			<div class='title'> <img src='mpdss_logo.jpg' class='logo' alt='McGill Pre-Dental Student Society' /> </div>
			<div class='nav-menu-button'><i class="material-icons">menu</i></div>
			<div class='nav-menu'>
				<ul>
					<a><li>About Us</li></a>
					<a><li>Who We Are</li></a>
					<a><li>Event</li></a>
					<a><li>Shadowing</li></a>
				</ul>
			</div>
		</div>
	</header>
	<!-- Slider -->
	<div class="screen"></div>
	<div class="content">
		<section class='row'>
			<div class='small-12 small-centered columns'>
				<ul data-orbit>
  					<li class="active">
    					<img src="dental-shadowing.jpg" alt="slide 1" />
    					<div class="orbit-caption">
      						Caption One.
    					</div>
  					</li>
  					<li>
    					<img src="dental-shadowing.jpg" alt="slide 2" />
    					<div class="orbit-caption">
      						Caption Two.
    					</div>
  					</li>
  					<li>
    					<img src="dental-shadowing.jpg" alt="slide 3" />
    					<div class="orbit-caption">
      						Caption Three.
    					</div>
  					</li>
  				</ul>
			</div>
		</section>
		<!-- Events -->
		<section class="row"> 
			<div class='small-11 large-8 small-centered columns'>
				<div class='small-12 medium-4 small-centered medium-uncentered columns'>
					<div class='small-11 small-centered columns'>
						<a href="#" data-reveal-id="myModal">
							<div class='card'>
								<div class='card-info'>
									<h2> Event Number 1 </h2>
									<p> Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
								</div>
							</div>
						</a>
						<div id="myModal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                            <h2 id="modalTitle"> Event Number 1 </h2>
						    <p> Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
                            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
						</div>
					</div>	
				</div>
				<div class='small-12 medium-4  small-centered medium-uncentered columns'>
					<div class='small-11 small-centered columns'>
						<div class='card'>
							<div class='card-info'>
								<h2> Event Number 2 </h2>
								<p> Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
							</div>
						</div>
					</div>	
				</div>
				<div class='small-12 medium-4  small-centered medium-uncentered columns'>
					<div class='small-11 small-centered columns'>
						<div class='card'>
							<div class='card-info'>
								<h2> Event Number 3 </h2>
								<p> Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!-- About Us -->
		<section class="row"> 
			<div class='small-11 large-8 small-centered columns'>
				<div class='blurb'>
					<h1> About Us </h1>
					
					<p> We are McGill students looking to aid prospective students interested in the field of dental medicine at McGill University. The club serves to provide students with accurate and up-to-date information about dental schools and admissions as well as opportunities to gain insight into what it is like to be in a dental-oriented profession. </p>
				</div>
			</div>
		</section>
		<!-- Shadowing -->
		<section class="row"> 
			<div class='small-11 large-8 small-centered columns'>
				<div class='blurb'>
					<h1> Shadowing </h1>
					<p> We are McGill students looking to aid prospective students interested in the field of dental medicine at McGill University. The club serves to provide students with accurate and up-to-date information about dental schools and admissions as well as opportunities to gain insight into what it is like to be in a dental-oriented profession.  </p>
				</div>
			</div>
		</section>
		<!-- Contact Us -->
		<section class="row"> 
			<div class='small-11 large-8 small-centered columns'>
				<div class='blurb'>
					<h1> Contact Us </h1>
					<p> For any questions, feel free to contact us at our email <a href="mailto:user@example.com">user@example.com</a> or fill out the below form. </p>
				</div>
			</div>
			<div class='small-11 large-8 small-centered columns box-border'>
				<?php
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
	    	
					$name = implode(" ", array($fname, $lname));
 					$email=$_POST['email'];
				   	$message=$_POST['message'];
				   	$subject="MPDSS";
	    			
					$headers[] = 'MIME-Version: 1.0';
					$headers[] = 'Content-type: text/html; charset=iso-8859-1';
					$headers[] = "To: aaron.u6@gmail.com";
					$headers[] = "From: $email";
					$headers[] = "Return-path: $email";
				   	$subject="Message sent using your contact form";
					mail("aaron.u6@gmail.com", $subject, $message, implode("\r\n", $headers));
				?>
				<form  action="index.php" method="POST">
					<div class='row'>
						<div class='show-for-medium-up medium-4 large-2 columns'>
							<h3 class='title'> First Name: </h3> 
						</div>	
						<div class='small-11 medium-6 small-centered medium-uncentered end columns'>
							<input id="fname" class="input" name="fname" type="text" placeholder="Enter First Name here..." size="30" />
						</div>
					</div>
					<div class='row'>
						<div class='show-for-medium-up medium-4 large-2 columns'>
							<h3 class='title'> Last Name: </h3> 
						</div>	
						<div class='small-11 medium-6 small-centered medium-uncentered end columns'>
							<input id="lname" class="input" name="lname" type="text" placeholder="Enter Last Name here..." size="30" />
						</div>
					</div>
					<div class='row'>
						<div class='show-for-medium-up medium-4 large-2 columns'>
							<h3 class='title'> Email: </h3> 
						</div>	
						<div class='small-11 medium-6 small-centered medium-uncentered end columns'>
							<input id="email" class="input" name="email" type="email" placeholder="Enter McGill E-Mail here..." size="30" />
						</div>
					</div>
					<div class='row'>
						<textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Write your message here..."></textarea>
					</div>
					<input type="submit" value="Send email"/>
				</form>
			</div>
		</section>
	</div>
	<footer>
		<section class="row"> 
			<div class='small-12 medium-6 columns'>
				<div class='copyright'>
					<p> Copyright &copy McGill PreDental Student Society of McGill University</p>
				</div>
			</div>
			<div class='small-12 medium-6 columns'>
				<div class='social-media-icons'>
					<a href='www.facebok.com'> FaceBook </a>
					<a href='www.facebok.com'> Twitter </a>
					<a href='www.facebok.com'> Instagram </a>
				</div>
			</div>
		</section>
	</footer>
</body>
<script type="text/javascript">
	$(document).ready(resizeSq);
	window.onresize = resizeSq;
	function resizeSq(){
		var width = $('.card').width();
  		$('.card').css('height', width);
  		$('.card-info').css('top', (width-40));
	}
	$('div.card').hover(
		function(){
			var width = $(this).width();
			$(this).children('div.card-info').animate({top : (width-100)+'px', height: '100px'}, 400);
		},
		function(){
			var width = $(this).width();
			$(this).children('div.card-info').animate({top : (width-40)+'px', height: '40px'}, 400);
		}
	);
	$('div.nav-menu-button').click(
		function(){
			$(this).toggleClass('active');
			if ($(this).hasClass('active')){
				$('div.screen').addClass('active');
				$('div.nav-menu').css('display', 'block');
			} else {
				$('div.screen').removeClass('active');
				$('div.nav-menu').css('display', 'none');	
			}
		}
	);
	$('div.screen').click(
		function(){
			$('div.nav-menu-button').removeClass('active');
			$('div.screen').removeClass('active');
			$('div.nav-menu').css('display', 'none');	
		}
	);
</script>
</html>