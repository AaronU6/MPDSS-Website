<?php
/*	Name: Front-Page
 *	Purpose: To build the front-page (HOMEPAGE) of the website 
 */
?>
<!--Get the code from the header.php file-->
<?php get_header(); ?>
<!--HOME HEADER-->
<!--Purpose: Displays the HOME page banner with the TAGlab logo and name-->
<script>
	window.fbAsyncInit = function() {
		FB.init({
			xfbml      : true,
			version    : 'v2.7'
		});
	}; 
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>		
<div class="content">
	<section class='row'>
		<!--HOMEPAGE CONTENT-->
		<!--Purpose: Displays a small blurb about TAGlab-->
		<div class="row">
			<div class="small-12 small-centered columns home-header">
				<?php wd_slider(1); ?>
			</div>
			<div class="small-11 small-centered columns">
				<div id="primary" class="content-area">
					<div id="content" class="site-content" role="main">
						<div class="small-11 large-6 small-centered large-uncentered columns card-column">
							<div class="small-12 medium-11 small-centered card columns" style="">
								<div class="small-12 medium-3 large-2 card-pic columns" style="">
									<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/dental-shadowing.jpg'?>" alt="Shadowing" />
								</div>
								<div class="small-12 medium-9 large-10 card-info columns" style="">
									<h1> Shadowing Sign Up </h1>
									<p> If you are interested in shadowing a dentist, click <a href="http://doodle.com/poll/5a7wxtie9v4cb65b#"> here </a> </p>
								</div>
							</div>
							<div style="height: 16px;"> </div>
							<div class="small-12 medium-11 small-centered card columns" style="">
								<div class="small-12 medium-3 large-2 card-pic columns" style="">
									<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/Contact-us.png'?>" alt="Contact" />
								</div>
								<div class="small-12 medium-9 large-10 card-info columns" style="">
									<h1> How to Contact Us </h1>
									<p> If you have any question, please contact us at thempdss@gmail.com. Also, please follow us at <a href="https://www.facebook.com/mcgillpredent/">Facebook</a> </p>
								</div>
							</div>
							<div style="height: 16px;"> </div>
							<div class="small-12 medium-11 small-centered card columns" style="">
								<div class="small-12 medium-3 large-2 card-pic columns" style="">
									<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/Attention.png'?>" alt="attention">
								</div>
								<div class="small-12 medium-9 large-10 card-info columns" style="">
									<h1> ATTENTION </h1>
									<p> Please note that the site is still under construction </p>
								</div>
							</div>
						</div>
						<div class="small-11 large-6 small-centered large-uncentered columns card-column">
							<div class="small-12 medium-11 small-centered card columns" style="">
								<div class="small-12 medium-9 large-10 card-info columns" style="height: 396px;">
									<h1> About Us </h1>
									<p> We are McGill students looking to aid prospective students interested in the field of dental medicine at McGill University. The club serves to provide students with accurate and up-to-date information about dental schools and admissions as well as opportunities to gain insight into what it is like to be in a dental-oriented profession. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!--Get the code from the footer.php file-->
<?php get_footer(); ?>