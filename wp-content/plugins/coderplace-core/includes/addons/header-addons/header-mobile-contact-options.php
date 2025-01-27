<?php
/**
 * Header Builder Options
 *
 * @package Base
 */

namespace CoderPlace;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'header_mobile_contact_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_mobile_contact',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'coderplace-core' ),
				'target' => 'header_mobile_contact',
			),
			'design' => array(
				'label'  => __( 'Design', 'coderplace-core' ),
				'target' => 'header_mobile_contact_design',
			),
			'active' => 'general',
		),
	),
	'header_mobile_contact_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_mobile_contact_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'coderplace-core' ),
				'target' => 'header_mobile_contact',
			),
			'design' => array(
				'label'  => __( 'Design', 'coderplace-core' ),
				'target' => 'header_mobile_contact_design',
			),
			'active' => 'design',
		),
	),
	'header_mobile_contact_items' => array(
		'control_type' => 'base_contact_control',
		'section'      => 'header_mobile_contact',
		'priority'     => 6,
		'default'      => webapp()->default( 'header_mobile_contact_items' ),
		'label'        => esc_html__( 'Contact Items', 'coderplace-core' ),
		'partial'      => array(
			'selector'            => '.header-mobile-contact-wrap',
			'container_inclusive' => true,
			'render_callback'     => 'CoderPlace\header_mobile_contact',
		),
	),
	'header_mobile_contact_item_spacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'header_mobile_contact_design',
		'label'        => esc_html__( 'Item Horizontal Spacing', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_mobile_contact_item_spacing' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap .header-contact-item',
				'property' => 'margin-left',
				'pattern'  => 'calc($ / 2)',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap .header-contact-item',
				'property' => 'margin-right',
				'pattern'  => 'calc($ / 2)',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap',
				'property' => 'margin-left',
				'pattern'  => 'calc(-$ / 2)',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap',
				'property' => 'margin-right',
				'pattern'  => 'calc(-$ / 2)',
				'key'      => 'size',
			),
		),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 50,
				'em'  => 3,
				'rem' => 3,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_mobile_contact_item_vspacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'header_mobile_contact_design',
		'label'        => esc_html__( 'Item Vertical Spacing', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_mobile_contact_item_vspacing' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap .header-contact-item',
				'property' => 'margin-top',
				'pattern'  => '$',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'selector' => '.header-mobile-contact-wrap .element-contact-inner-wrap',
				'property' => 'margin-top',
				'pattern'  => '-$',
				'key'      => 'size',
			),
		),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 50,
				'em'  => 3,
				'rem' => 3,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_mobile_contact_icon_size' => array(
		'control_type' => 'base_range_control',
		'section'      => 'header_mobile_contact_design',
		'label'        => esc_html__( 'Icon Size', 'coderplace-core' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .element-contact-inner-wrap .header-contact-item .base-svg-iconset',
				'property' => 'font-size',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'header_mobile_contact_icon_size' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 12,
				'rem' => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_mobile_contact_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'header_mobile_contact_design',
		'label'        => esc_html__( 'Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_mobile_contact_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-contact-wrap .header-contact-item',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-contact-wrap a.header-contact-item:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
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
	'header_mobile_contact_link_style' => array(
		'control_type' => 'base_select_control',
		'section'      => 'header_mobile_contact_design',
		'default'      => webapp()->default( 'header_mobile_contact_link_style' ),
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
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#mobile-header .header-mobile-contact-wrap',
				'pattern'  => 'inner-link-style-$',
				'key'      => '',
			),
		),
	),
	'header_mobile_contact_typography' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'header_mobile_contact_design',
		'label'        => esc_html__( 'Font', 'coderplace-core' ),
		'default'      => webapp()->default( 'header_mobile_contact_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#mobile-header .header-mobile-contact-wrap .header-contact-item',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'header_mobile_contact_typography',
			'options' => 'no-color',
		),
	),
	'header_mobile_contact_margin' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'header_mobile_contact_design',
		'priority'     => 10,
		'default'      => webapp()->default( 'header_mobile_contact_margin' ),
		'label'        => esc_html__( 'Margin', 'coderplace-core' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-header .header-mobile-contact-wrap',
				'property' => 'margin',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
	'transparent_header_mobile_contact_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'transparent_header_design',
		'label'        => esc_html__( 'Contact Colors', 'coderplace-core' ),
		'default'      => webapp()->default( 'transparent_header_mobile_contact_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #mobile-header .header-mobile-contact-wrap .header-contact-item',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.transparent-header #mobile-header .header-mobile-contact-wrap a.header-contact-item:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'coderplace-core' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover', 'coderplace-core' ),
					'palette' => true,
				),
			),
		),
	),
);

Theme_Customizer::add_settings( $settings );
