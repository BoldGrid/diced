<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-diced';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Remove container class from page_home.php.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Add container to call to action widget.
	$boldgrid_framework_configs['template']['pages']['global']['call-to-action'] = 'container';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]tertiary' ),
		'5' => array( '[menu]secondary' ),
		'8' => array( '[action]boldgrid_site_identity', '[action]boldgrid_primary_navigation' ),
		'11' => array( '[widget]boldgrid-widget-2' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]social' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[widget]boldgrid-widget-3' ),
		'11' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Social Menus.
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	// Enable BoldGrid Color Palette System.
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

	// Set default color palettes for theme.
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#000000',
				'#000000',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#000000',
			'colors' => array(
				'#ffffff',
				'#000000',
				'#a0a0a0',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#169dc5',
				'#000000',
				'#facc2d',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#72754d',
				'#000000',
				'#40422c',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#c3ae69',
			'colors' => array(
				'#6c473f',
				'#6c473f',
				'#c3ae69',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'YOUR BUSINESS IS NATURALLY OUR BUSINESS';
			break;
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			$cta_h2 = 'THE TOOLS TO COMPLIMENT YOUR VISION';
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'FORWARD FASHION FOR EVERYONE';
			break;
		case 'Fitness':
			$cta_h2 = 'ADVENTURE AWAITS AROUND EVERY TURN';
			break;
		case 'General':
			$cta_h2 = 'GREAT WRITERS MAKE FOR GREAT READING';
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$cta_h2 = 'RENOVATING HOMES FOR DECADES';
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'ATTRACT YOUR CUSTOMERS WITH ONE CLICK';
			break;
		case 'Music':
			$cta_h2 = 'THE PAST NEVER SOUNDED SO GOOD';
			break;
		case 'Photography':
			$cta_h2 = 'GOOD MEMORIES SHOULD LAST FOREVER';
			break;
		case 'Property Management':
			$cta_h2 = 'SPEND MORE TIME ENJOYING YOUR STAY';
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'FINDING YOUR HOME JUST GOT A LOT EASIER';
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$cta_h2 = 'WE\'VE GOT A LOT OF FRESH IDEAS TO SHARE';
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#000000';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_line_height'] = 150;

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Italianno';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h3 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 3.6,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.page-template-default h2'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 3.2,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.page-template-default .entry-title a, .page-template-page_home .entry-content h2'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 5.0,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.p-button-primary a, .p-button-secondary a, .form-submit a, .ninja-forms-all-fields-wrap input.btn'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 0.9,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<div class="call-to-action">
					<h2 class="slogan">$cta_h2</h2>
					<p class="p-button-secondary">
						<a class="button-secondary" href="about-us">LEARN MORE</a>
					</p>
				</div>
			</div>
		</div>
HTML;

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Secondary Menu, Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Top Right, Above Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Top of Footer';
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Center';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Fjalla One';

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
