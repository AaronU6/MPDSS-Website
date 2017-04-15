<?php
/**	Name: Header
 *	Purpose: To build the navigation bar for all pages of the website 
 *	@package taglab
 */
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<!--The title found in the tabs on the browser-->	
		<title><?php wp_title(''); ?></title> 
		<!--Loading the CSS and the spceified JS from the functions.php-->
		<?php wp_head();?>
		
	</head>
	<body class='f-topbar-fixed'>
		<!--The Navigaion Bar-->
		<header>
			<div class="fixed">
				<nav class="top-bar" data-topbar="" role="navigation" data-options='is_hover: false'>
					<!--The Title Section of the Navigation Bar-->
					<ul class="title-area">
						<li class="name">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
								<h1 style="color: white; line-height: 30px;"><b> McGill Pre-Dental <br />Students' Society </b></h1>
							</a>
						</li>
					</ul>
					<?php if (!wp_is_mobile() ) : ?>
						<section class="top-bar-section">
							<!--Right Nav Section-->
							<ul class="right">
								<!--The Menu Buttons--> 
								<li><?php wp_nav_menu(); ?></li>
							</ul>
						</section>
					<?php endif; ?>
				</nav>
			</div>
		</header>