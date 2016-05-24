<?php
/**
 * Template Name: Home Page
 *
 * @package BoldGrid
 */

get_header(); ?>

	<div class="container">
        <div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<?php dynamic_sidebar( 'boldgrid-widget-1' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->


	<div class="row background-primary">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->

<?php get_footer(); ?>
