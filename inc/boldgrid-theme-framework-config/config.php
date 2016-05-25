<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
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
	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';
	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';
	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]tertiary' ),
		'8' => array( '[widget]boldgrid-widget-1', '[menu]secondary', '[action]boldgrid_primary_navigation' ),
		'9' => array( '[menu]social' ),
		'10' => array( '[widget]boldgrid-widget-2' ),
	);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#000000',
                '#000000',
                '#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#000000',
			'colors' => array(
				'#ffffff',
                '#000000',
                '#a0a0a0',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#169dc5',
                '#000000',
                '#facc2d',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#72754d',
                '#000000',
                '#40422c',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#c3ae69',
			'colors' => array(
				'#6c473f',
				'#6c473f',
                '#c3ae69',
			),
		)
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 14: //<-- Fashion
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 32: //<-- General
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#000000';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Raleway';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 22;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_line_height'] = 150;

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Italianno';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 24;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Icons
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary Menu, Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Top Right, Above Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Top of Footer";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<div class="call-to-action">
					<h2 class="slogan">WE'VE GOT A LOT OF FRESH IDEAS TO SHARE</h2>
					<p class="p-button-secondary">
						<a class="button-secondary" href="about-us">LEARN MORE</a>
					</p>
				</div>
			</div>
		</div>
HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Center';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Fjalla One';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
