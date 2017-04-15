<!--The Name of the Template-->
<?php
/*
	Template Name: Event
*/
?>
<!--Loading the header.php above each file-->
<?php get_header(); ?>
<!--The Content on Each Page-->
<div class="content">
	<section class='row'>
		<div class="row" style="margin-top: 20px;">					
			<div class="small-11 small-centered columns">
				<?php
                $args = array(
				    'post_type' => 'event',
                    'orderby' => 'date',
				    'order' => 'DESC',
                    'posts_per_page' => '-1'
				    );
                $loop = new WP_Query( $args );
                if ( $loop -> have_posts() ) : while ( $loop -> have_posts()) : $loop -> the_post();
                ?>
                <div class="small-12 medium-6 small-centered medium-uncentered columns">
					<div class="small-12 columns" style="text-align: center;">
						<div class="small-11 small-centered columns" style="background-color: #F4F4F4; margin-top: 20px; margin-bottom: 20px; display: inline-block;">
							<div class="small-12 columns"   >
								<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/dental-shadowing.jpg'?>" style="width: 100%; height: 500px; "/>
							</div>
							<div class="small-12 card-info columns" style="background-color: #F4F4F4; height: 140px; ">
								<h1> <?php echo the_title();?> </h1>
								<p> If you are interested in shadowing a dentist, click <a href="#" data-reveal-id="myModal"> here </a> </p>
								<div id="myModal" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                                    <h2 id="modalTitle"> <?= the_title();?> </h2>
								    <p> <?= get_post_custom_values('description')[0]; ?> </p>
                                    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
                <div class="small-12 medium-6 small-centered medium-uncentered columns" style="text-align: center;">
					<?php for ($i = 0; $i < 4; $i++) : ?>
					<div class="small-12 medium-6 columns" style="text-align: center;">
						<div class="small-11 small-centered columns" style="background-color: #F4F4F4; margin-top: 20px; margin-bottom: 20px; display: inline-block;">
							<div class="small-12 columns"   >
								<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/dental-shadowing.jpg'?>" style="width: 100%;  height: 200px; "/>
							</div>
							<div class="small-12 card-info columns" style="background-color: #F4F4F4; height: 100px; ">
								<h1> Shadowing Sign Up </h1>
								<p> If you are interested in shadowing a dentist, click <a href="http://doodle.com/poll/5a7wxtie9v4cb65b#"> here </a> </p>
							</div>
						</div>
					</div>
					<?php endfor; ?>
				</div>
				<div class="small-12 small-centered medium-uncentered columns" style="text-align: center;">
					<?php for ($i = 0; $i < 4; $i++) : ?>
					<div class="small-12 medium-3 columns" style="text-align: center;">
						<div class="small-11 small-centered columns" style="background-color: #F4F4F4; margin-top: 20px; margin-bottom: 20px; display: inline-block;">
							<div class="small-12 columns"   >
								<img src="<?php echo get_home_url() . '/wp-content/uploads/2016/09/dental-shadowing.jpg'?>" style="width: 100%;  height: 200px; "/>
							</div>
							<div class="small-12 card-info columns" style="background-color: #F4F4F4; height: 100px; ">
								<h1> Shadowing Sign Up </h1>
								<p> If you are interested in shadowing a dentist, click <a href="http://doodle.com/poll/5a7wxtie9v4cb65b#"> here </a> </p>
							</div>
						</div>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</section>
</div>
<!--Loading the footer.php above each file-->
<?php get_footer(); ?>