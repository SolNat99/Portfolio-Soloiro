<?php 
/* 
 * Template Name: Homepage-Template
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<div class="row">
					
				<div class="col-sm-2">
					<img src="http://portfolio.solorio/wp-content/uploads/2020/06/Natalie.png" class="profile-image rounded-circle my-3">
					</div>

					<div class="col-sm-5">
						<h1>About Me</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus viverra nulla a sodales. Cras mollis ex et malesuada ultricies. Ut vestibulum, est eu commodo rutrum, augue nibh vulputate quam, id pretium lorem velit vel elit. Donec sodales pellentesque tellus, fringilla sollicitudin enim. Curabitur sed eleifend odio. In volutpat ultricies ante. Fusce mauris lectus, lobortis ac mauris eget, dapibus scelerisque massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id pretium nulla, et ultrices libero.</p>
					</div>

					<div class="col-sm-5">
						<h1>Interests</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus viverra nulla a sodales. Cras mollis ex et malesuada ultricies. Ut vestibulum, est eu commodo rutrum, augue nibh vulputate quam, id pretium lorem velit vel elit. Donec sodales pellentesque tellus, fringilla sollicitudin enim. Curabitur sed eleifend odio. In volutpat ultricies ante. Fusce mauris lectus, lobortis ac mauris eget, dapibus scelerisque massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id pretium nulla, et ultrices libero.</p>
					</div>

				</div>		

			

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</div> 
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
