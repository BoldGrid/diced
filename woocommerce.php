<?php
/**
 * The template for the WooCommerce shop page.
 *
 * @package wpb
 */

get_header(); ?>

<div class="row mod-space-lg"></div>
	<div class="row background-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <?php woocommerce_content(); ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col -->
                <div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .background -->

<?php get_footer(); ?>
