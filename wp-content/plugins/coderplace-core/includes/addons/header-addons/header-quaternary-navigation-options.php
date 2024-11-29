<?php
/**
 * Header Builder Options
 *
 * @package Base
 */

namespace CoderPlace;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'quaternary_navigation_tabs' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'quaternary_navigation',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'coderplace-core' ),
					'target' => 'quaternary_navigation',
				),
				'design' => array(
					'label'  => __( 'Design', 'coderplace-core' ),
					'target' => 'quaternary_navigation_design',
				),
				'active' => 'general',
			),
		),
		'quaternary_navigation_tabs_design' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'quaternary_navigation_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'coderplace-core' ),
					'target' => 'quaternary_navigation',
				),
				'design' => array(
					'label'  => __( 'Design', 'coderplace-core' ),
					'target' => 'quaternary_navigation_design',
				),
				'active' => 'design',
			),
		),
		'quaternary_navigation_link' => array(
			'control_type' => 'base_focus_button_control',
			'section'      => 'quaternary_navigation',
			'settings'     => false,
			'priority'     => 5,
			'label'        => esc_html__( 'Select Menu', 'coderplace-core' ),
			'input_attrs'  => array(
				'section' => 'menu_locations',
			),
		),
		'quaternary_navigation_spacing' => array(
			'control_type' => 'base_range_control',
			'section'      => 'quaternary_navigation',
			'priority'     => 5,
			'label'        => esc_html__( 'Items Spacing', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'padding-left',
					'pattern'  => 'calc($ / 2)',
					'key'      => 'size',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'padding-right',
					'pattern'  => 'calc($ / 2)',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'quaternary_navigation_spacing' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
					'vw'  => 0,
				),
				'max'        => array(
					'px'  => 100,
					'em'  => 12,
					'rem' => 12,
					'vw'  => 12,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
					'vw'  => 0.01,
				),
				'units'      => array( 'px', 'em', 'rem', 'vw' ),
				'responsive' => false,
			),
		),
		'quaternary_navigation_stretch' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'quaternary_navigation',
			'priority'     => 6,
			'default'      => webapp()->default( 'quaternary_navigation_stretch' ),
			'label'        => esc_html__( 'Stretch Menu?', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.site-header-item-quaternary-navigation',
					'pattern'  => 'header-navigation-layout-stretch-$',
					'key'      => 'switch',
				),
			),
		),
		'quaternary_navigation_fill_stretch' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'quaternary_navigation',
			'priority'     => 6,
			'default'      => webapp()->default( 'quaternary_navigation_fill_stretch' ),
			'label'        => esc_html__( 'Fill and Center Menu Items?', 'coderplace-core' ),
			'context'      => array(
				array(
					'setting'  => 'quaternary_navigation_stretch',
					'operator' => '==',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.site-header-item-quaternary-navigation',
					'pattern'  => 'header-navigation-layout-fill-stretch-$',
					'key'      => 'switch',
				),
			),
		),
		'quaternary_navigation_style' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'quaternary_navigation_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'quaternary_navigation_style' ),
			'label'        => esc_html__( 'Navigation Style', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '.quaternary-navigation',
					'pattern'  => 'header-navigation-style-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'standard' => array(
						'tooltip' => __( 'Standard', 'coderplace-core' ),
						'name'    => __( 'Standard', 'coderplace-core' ),
						'icon'    => '',
					),
					'fullheight' => array(
						'tooltip' => __( 'Menu items are full height', 'coderplace-core' ),
						'name'    => __( 'Full Height', 'coderplace-core' ),
						'icon'    => '',
					),
					'underline' => array(
						'tooltip' => __( 'Underline Hover/Active', 'coderplace-core' ),
						'name'    => __( 'Underline', 'coderplace-core' ),
						'icon'    => '',
					),
					'underline-fullheight' => array(
						'tooltip' => __( 'Full Height Underline Hover/Active', 'coderplace-core' ),
						'name'    => __( 'Full Height Underline', 'coderplace-core' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
				'class'      => 'radio-btn-width-50',
			),
		),
		'quaternary_navigation_vertical_spacing' => array(
			'control_type' => 'base_range_control',
			'section'      => 'quaternary_navigation_design',
			'label'        => esc_html__( 'Items Top and Bottom Padding', 'coderplace-core' ),
			'context'      => array(
				array(
					'setting'    => 'quaternary_navigation_style',
					'operator'   => 'sub_object_does_not_contain',
					'sub_key'    => 'layout',
					'responsive' => false,
					'value'      => 'fullheight',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'padding-top',
					'pattern'  => '$',
					'key'      => 'size',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'padding-bottom',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'quaternary_navigation_vertical_spacing' ),
			'input_attrs'  => array(
				'min'        => array(
					'px'  => 0,
					'em'  => 0,
					'rem' => 0,
					'vh'  => 0,
				),
				'max'        => array(
					'px'  => 100,
					'em'  => 12,
					'rem' => 12,
					'vh'  => 12,
				),
				'step'       => array(
					'px'  => 1,
					'em'  => 0.01,
					'rem' => 0.01,
					'vh'  => 0.01,
				),
				'units'      => array( 'px', 'em', 'rem', 'vh' ),
				'responsive' => false,
			),
		),
		'quaternary_navigation_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'quaternary_navigation_design',
			'label'        => esc_html__( 'Navigation Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'quaternary_navigation_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a:hover',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li.current-menu-item > a, .quaternary-navigation .quaternary-menu-container > ul > li.current_page_item > a',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'active',
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
					'active' => array(
						'tooltip' => __( 'Active Color', 'coderplace-core' ),
						'palette' => true,
					),
				),
			),
		),
		'quaternary_navigation_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'quaternary_navigation_design',
			'label'        => esc_html__( 'Navigation Background', 'coderplace-core' ),
			'default'      => webapp()->default( 'quaternary_navigation_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li > a:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
				array(
					'type'     => 'css',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li.current-menu-item > a, .quaternary-navigation .quaternary-menu-container > ul > li.current_page_item > a',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'active',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Background', 'coderplace-core' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Background', 'coderplace-core' ),
						'palette' => true,
					),
					'active' => array(
						'tooltip' => __( 'Active Background', 'coderplace-core' ),
						'palette' => true,
					),
				),
			),
		),
		'quaternary_navigation_typography' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'quaternary_navigation_design',
			'label'        => esc_html__( 'Navigation Font', 'coderplace-core' ),
			'default'      => webapp()->default( 'quaternary_navigation_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.quaternary-navigation .quaternary-menu-container > ul > li a',
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
				'id'      => 'quaternary_navigation_typography',
				'options' => 'no-color',
			),
		),
		'info_quaternary_submenu' => array(
			'control_type' => 'base_title_control',
			'section'      => 'quaternary_navigation',
			'priority'     => 20,
			'label'        => esc_html__( 'Dropdown Options', 'coderplace-core' ),
			'settings'     => false,
		),
		'quaternary_dropdown_link' => array(
			'control_type' => 'base_focus_button_control',
			'section'      => 'quaternary_navigation',
			'settings'     => false,
			'priority'     => 20,
			'label'        => esc_html__( 'Dropdown Options', 'coderplace-core' ),
			'input_attrs'  => array(
				'section' => 'base_customizer_dropdown_navigation',
			),
		),
	)
);

