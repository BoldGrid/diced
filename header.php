<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BoldGrid
 */
?><!DOCTYPE html>
<?php do_action( 'boldgrid_html_before' ); ?>
<html <?php language_attributes(  ); ?>>
<head>
<?php
	do_action( 'boldgrid_head_top' );
	wp_head(  );
	do_action( 'boldgrid_head_bottom' );
?>
</head>

<body <?php body_class(); ?> <?php BoldGrid_Framework_Schema::body( true ); ?>>

<?php do_action( 'boldgrid_body_top' ); ?>
<div id="page" class="hfeed site">
<?php do_action( 'boldgrid_header_before' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>> 
	<?php BoldGrid::skip_link(  ); ?>
		<div class="container">
			<div class="col-md-12">
				<div class="alignright"><?php do_action( 'boldgrid_menu_tertiary' ); ?></div>
			</div><!-- .col -->
			<div class="col-md-12">
       			 <?php do_action( 'boldgrid_menu_secondary' ); ?>
			</div><!-- .col -->
		<?php do_action( 'boldgrid_header_top' ); ?>
			<div class="site-branding">
				<?php
					do_action( 'boldgrid_site_title' );
					do_action( 'boldgrid_print_tagline' );
				?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
						<span class="sr-only">Toggle navigation</span>
                    	<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><!-- .navbar-header -->
				<?php do_action('boldgrid_menu_primary'); ?>
			</nav><!-- #site-navigation -->
			<?php do_action( 'boldgrid_header_bottom' ); ?>
			<div class="row call-to-action-wrapper">
				<div class="col-md-12">
				<?php dynamic_sidebar( 'boldgrid-widget-2' ); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	<?php do_action( 'boldgrid_header_after' ); ?>
	<div id="content" class="site-content">
		<div class="container-fluid">