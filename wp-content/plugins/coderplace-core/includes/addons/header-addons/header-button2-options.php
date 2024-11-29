<?php
/**
 * Header Button2 Options
 *
 * @package CoderPlace
 */

namespace CoderPlace;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'header_button2_tabs' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'header_button2',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'coderplace-core' ),
					'target' => 'header_button2',
				),
				'design' => array(
					'label'  => __( 'Design', 'coderplace-core' ),
					'target' => 'header_button2_design',
				),
				'active' => 'general',
			),
		),
		'header_button2_tabs_design' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'header_button2_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'coderplace-core' ),
					'target' => 'header_button2',
				),
				'design' => array(
					'label'  => __( 'Design', 'coderplace-core' ),
					'target' => 'header_button2_design',
				),
				'active' => 'design',
			),
		),
		'header_button2_label' => array(
			'control_type' => 'base_text_control',
			'section'      => 'header_button2',
			'sanitize'     => 'sanitize_text_field',
			'priority'     => 4,
			'label'        => esc_html__( 'Label', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_label' ),
			'live_method'     => array(
				array(
					'type'     => 'html',
					'selector' => '#main-header .header-button2',
					'pattern'  => '$',
					'key'      => '',
				),
			),
		),
		'header_button2_link' => array(
			'control_type' => 'base_text_control',
			'section'      => 'header_button2',
			'sanitize'     => 'esc_url_raw',
			'label'        => esc_html__( 'URL', 'coderplace-core' ),
			'priority'     => 4,
			'default'      => webapp()->default( 'header_button2_link' ),
			'partial'      => array(
				'selector'            => '.header-button2-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'CoderPlace\header_button2',
			),
		),
		'header_button2_target' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_target' ),
			'label'        => esc_html__( 'Open in New Tab?', 'coderplace-core' ),
		),
		'header_button2_nofollow' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_nofollow' ),
			'label'        => esc_html__( 'Set link to nofollow?', 'coderplace-core' ),
		),
		'header_button2_sponsored' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_sponsored' ),
			'label'        => esc_html__( 'Set link attribute Sponsored?', 'coderplace-core' ),
		),
		'header_button2_download' => array(
			'control_type' => 'base_switch_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_download' ),
			'label'        => esc_html__( 'Set link to Download?', 'coderplace-core' ),
		),
		'header_button2_style' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_style' ),
			'label'        => esc_html__( 'Button Style', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '#main-header .header-button2',
					'pattern'  => 'button-style-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'filled' => array(
						'name'    => __( 'Filled', 'coderplace-core' ),
					),
					'outline' => array(
						'name'    => __( 'Outline', 'coderplace-core' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'header_button2_visibility' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'header_button2',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_button2_visibility' ),
			'label'        => esc_html__( 'Button Visibility', 'coderplace-core' ),
			'partial'      => array(
				'selector'            => '.header-button2-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'CoderPlace\header_button2',
			),
			'input_attrs'  => array(
				'layout' => array(
					'all' => array(
						'name'    => __( 'Everyone', 'coderplace-core' ),
					),
					'loggedout' => array(
						'name'    => __( 'Logged Out Only', 'coderplace-core' ),
					),
					'loggedin' => array(
						'name'    => __( 'Logged In Only', 'coderplace-core' ),
					),
				),
				'responsive' => false,
			),
		),
		'header_button2_size' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'header_button2_design',
			'priority'     => 4,
			'default'      => webapp()->default( 'header_button2_size' ),
			'label'        => esc_html__( 'Button Size', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '#main-header .header-button2',
					'pattern'  => 'button-size-$',
					'key'      => '',
				),
			),
			'input_attrs'  => array(
				'layout' => array(
					'small' => array(
						'name'    => __( 'Sm', 'coderplace-core' ),
					),
					'medium' => array(
						'name'    => __( 'Md', 'coderplace-core' ),
						'icon'    => '',
					),
					'large' => array(
						'name'    => __( 'Lg', 'coderplace-core' ),
						'icon'    => '',
					),
					'custom' => array(
						'name'    => __( 'Custom', 'coderplace-core' ),
						'icon'    => '',
					),
				),
				'responsive' => false,
			),
		),
		'header_button2_padding' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'header_button2_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_button2_padding' ),
			'label'        => esc_html__( 'Padding', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .button-size-custom.header-button2',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'header_button2_size',
					'operator'   => '=',
					'value'      => 'custom',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'header_button2_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2:hover',
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
		'header_button2_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Background Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'context'      => array(
				array(
					'setting'    => 'header_button2_style',
					'operator'   => '=',
					'value'      => 'filled',
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
		'header_button2_border_colors' => array(
			'control_type' => 'base_color_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Border Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2-wrap .header-button2',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2-wrap .header-button2:hover',
					'property' => 'border-color',
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
		'header_button2_border' => array(
			'control_type' => 'base_border_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Border', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_border' ),
			'live_method'     => array(
				array(
					'type'     => 'css_border',
					'selector' => '#main-header .header-button2',
					'property' => 'border',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
				'color'      => false,
			),
		),
		'header_button2_radius' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'header_button2_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_button2_radius' ),
			'label'        => esc_html__( 'Border Radius', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2',
					'property' => 'border-radius',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'header_button2_typography' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Font', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_button2_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '#main-header .header-button2',
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
				'id' => 'header_button2_typography',
				'options' => 'no-color',
			),
		),
		'header_button2_shadow' => array(
			'control_type' => 'base_shadow_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Button Shadow', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => '#main-header .header-button2',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => webapp()->default( 'header_button2_shadow' ),
		),
		'header_button2_shadow_hover' => array(
			'control_type' => 'base_shadow_control',
			'section'      => 'header_button2_design',
			'label'        => esc_html__( 'Button Hover State Shadow', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css_boxshadow',
					'selector' => '#main-header .header-button2',
					'property' => 'box-shadow',
					'pattern'  => '$',
					'key'      => '',
				),
			),
			'default'      => webapp()->default( 'header_button2_shadow_hover' ),
		),
		'header_button2_margin' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'header_button2_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_button2_margin' ),
			'label'        => esc_html__( 'Margin', 'coderplace-core' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#main-header .header-button2',
					'property' => 'margin',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'transparent_header_button2_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'transparent_header_design',
			'label'        => esc_html__( 'Button2 Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'transparent_header_button2_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2:hover, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'background',
				),
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2:hover, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'backgroundHover',
				),
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'border',
				),
				array(
					'type'     => 'css',
					'selector' => '.transparent-header #main-header .header-button2:hover, .mobile-transparent-header .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'borderHover',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Color', 'coderplace-core' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Color', 'coderplace-core' ),
						'palette' => true,
					),
					'background' => array(
						'tooltip' => __( 'Background', 'coderplace-core' ),
						'palette' => true,
					),
					'backgroundHover' => array(
						'tooltip' => __( 'Background Hover', 'coderplace-core' ),
						'palette' => true,
					),
					'border' => array(
						'tooltip' => __( 'Border', 'coderplace-core' ),
						'palette' => true,
					),
					'borderHover' => array(
						'tooltip' => __( 'Border Hover', 'coderplace-core' ),
						'palette' => true,
					),
				),
			),
		),
		'header_sticky_button2_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'header_sticky_design',
			'label'        => esc_html__( 'Button2 Colors', 'coderplace-core' ),
			'default'      => webapp()->default( 'header_sticky_button2_color' ),
			'priority'     => 11,
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button-wrap .mobile-header-button',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2:hover, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'hover',
				),
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button2-wrap .mobile-header-button2',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'background',
				),
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2:hover, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'backgroundHover',
				),
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button2-wrap .mobile-header-button2',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'border',
				),
				array(
					'type'     => 'css',
					'selector' => '#masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .header-button2:hover, #masthead .base-sticky-header.item-is-fixed:not(.item-at-start) .mobile-header-button2-wrap .mobile-header-button2:hover',
					'property' => 'border-color',
					'pattern'  => '$',
					'key'      => 'borderHover',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Color', 'coderplace-core' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Color', 'coderplace-core' ),
						'palette' => true,
					),
					'background' => array(
						'tooltip' => __( 'Background', 'coderplace-core' ),
						'palette' => true,
					),
					'backgroundHover' => array(
						'tooltip' => __( 'Background Hover', 'coderplace-core' ),
						'palette' => true,
					),
					'border' => array(
						'tooltip' => __( 'Border', 'coderplace-core' ),
						'palette' => true,
					),
					'borderHover' => array(
						'tooltip' => __( 'Border Hover', 'coderplace-core' ),
						'palette' => true,
					),
				),
			),
		),
	)
);
