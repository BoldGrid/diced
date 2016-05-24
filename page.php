<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="row mod-space-lg"></div>
	<div class="row background-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'template-parts/content', 'page' ); ?>
							<?php endwhile; // end of the loop. ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .background -->

<?php get_footer(); ?>
