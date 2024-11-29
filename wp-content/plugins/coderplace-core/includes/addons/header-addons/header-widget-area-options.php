<?php
/**
 * Header HTML2 Options
 *
 * @package CoderPlace
 */

namespace CoderPlace;

use Base\Theme_Customizer;
use function Base\webapp;

ob_start(); ?>
<div class="base-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab base-general-tab base-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'coderplace-core' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();

$settings = array(
	'header_widget1_breaker' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'sidebar-widgets-header1',
		'settings'     => false,
		'priority'     => 5,
		'description'  => $compontent_tabs,
	),
	'header_widget1_title' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sidebar-widgets-header1',
		'label'        => esc_html__( 'Widget Titles', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_widget1_title' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#main-header .header-widget1 .header-widget-area-inner .widget-title',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'id' => 'header_widget1_title',
		),
	),
	'header_widget1_content' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sidebar-widgets-header1',
		'label'        => esc_html__( 'Widget Content', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_widget1_content' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#main-header .header-widget1 .header-widget-area-inner',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'id' => 'header_widget1_content',
		),
	),
	'header_widget1_link_colors' => array(
		'control_type' => 'base_color_control',
		'section'      => 'sidebar-widgets-header1',
		'label'        => esc_html__( 'Link Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_widget1_link_colors' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-widget1 .header-widget-area-inner a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#main-header .header-widget1 .header-widget-area-inner a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'coderplace-core' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'coderplace-core' ),
					'palette' => true,
				),
			),
		),
	),
	'header_widget1_link_style' => array(
		'control_type' => 'base_select_control',
		'section'      => 'sidebar-widgets-header1',
		'default'      => webapp()->default( 'header_widget1_link_style' ),
		'label'        => esc_html__( 'Link Style', 'coderplace-core' ),
		'input_attrs'  => array(
			'options' => array(
				'normal' => array(
					'name' => __( 'Underline', 'coderplace-core' ),
				),
				'plain' => array(
					'name' => __( 'No Underline', 'coderplace-core' ),
				),
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.header-widget1',
				'pattern'  => 'header-widget-lstyle-$',
				'key'      => '',
			),
		),
	),
	'header_widget1_margin' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'sidebar-widgets-header1',
		'default'      => webapp()->default( 'header_widget1_margin' ),
		'label'        => esc_html__( 'Margin', 'coderplace-core' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-widget1',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'transparent_header_widget1_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Widget Area Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'transparent_header_widget1_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-widget1 .header-widget-area-inner, .transparent-header #main-header .header-widget1 .header-widget-area-inner .widget-title',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-widget1 .header-widget-area-inner a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'link',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #main-header .header-widget1 .header-widget-area-inner a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'coderplace-core' ),
					'palette' => true,
				),
				'link' => array(
					'tooltip' => __( 'Link Color', 'coderplace-core' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover', 'coderplace-core' ),
					'palette' => true,
				),
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );
