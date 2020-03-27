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
					<div class="col-6 col-sm-4">
					<img src="<?php echo get_template_directory_uri();?>/img/hashtag-hero-mobile.jpg" class="img-fluid" alt="Responsive image">
					</div>

					<div class="col">
						<h1>About Me</h1>
					</div>

					<div class="col">
						<h1>Interests</h1>
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
