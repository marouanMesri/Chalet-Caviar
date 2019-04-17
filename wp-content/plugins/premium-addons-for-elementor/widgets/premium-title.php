<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class Premium_Title extends Widget_Base {
    public function get_name() {
        return 'premium-addon-title';
    }

    public function get_title() {
		return \PremiumAddons\Helper_Functions::get_prefix() . ' Title';
	}

    public function get_icon() {
        return 'pa-title';
    }

    public function get_categories() {
        return [ 'premium-elements' ];
    }

    // Adding the controls fields for the premium title
    // This will controls the animation, colors and background, dimensions etc
    protected function _register_controls() {

        /* Start Title General Settings Section */
        $this->start_controls_section('premium_title_content',
            [
                'label'         => __('Title', 'premium-addons-for-elementor'),
            ]
        );
        
        /*Title Text*/ 
        $this->add_control('premium_title_text',
            [
                'label'         => __('Title', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::TEXT,
                'default'       => __('Premium Title','premium-addons-for-elementor'),
                'label_block'   => true,
                'dynamic'       => [ 'active' => true ]
            ]
        );
        
        /*Title Style*/
        $this->add_control('premium_title_style', 
            [
                'label'         => __('Style', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'style1',
                'options'       => [
                    'style1'        => 'Style1',
                    'style2'        => 'Style2',
                    'style3'        => 'Style3',
                    'style4'        => 'Style4',
                    'style5'        => 'Style5',
                    'style6'        => 'Style6',
                    'style7'        => 'Style7',
                    ],
                'label_block'   => true,
            ]
        );
        
        /*Icon Switcher*/
        $this->add_control('premium_title_icon_switcher',
            [
                'label'         => __('Icon', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SWITCHER,
            ]
        );
        
        /*Icon*/
        $this->add_control('premium_title_icon', 
            [
                'label'         => __('Font Awesome Icon', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::ICON,
                'label_block'   => true,
                'condition'     => [
                    'premium_title_icon_switcher'   => 'yes',
                ]
            ]
        );

        /*Title HTML TAG*/ 
        $this->add_control('premium_title_tag',
            [
                'label'         => __('HTML Tag', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SELECT,
                'default'       => __('h2','premium-addons-for-elementor'),
                'options'       => [
                    'h1'    => 'H1',
                    'h2'    => 'H2',
                    'h3'    => 'H3',
                    'h4'    => 'H4',
                    'h5'    => 'H5',
                    'h6'    => 'H6',
                ],
            ]
        );
        
        /*Title Align*/
        $this->add_responsive_control('premium_title_align',
            [
                'label'         => __( 'Alignment', 'premium-addons-for-elementor' ),
                'type'          => Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
                        'title'=> __( 'Left', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-left',
                        ],
                    'center'    => [
                        'title'=> __( 'Center', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-center',
                        ],
                    'right'     => [
                        'title'=> __( 'Right', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-right',
                        ],
                    ],
                'default'       => 'left',
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-container' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        
        
        
        /*Style 8*/
        /*Strip Width*/
        $this->add_control('premium_title_style7_strip_width',
            [
                'label'         => __('Strip Width (PX)', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', '%', 'em'],
                'default'       => [
                    'unit'  => 'px',
                    'size'  => '120',
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip:before' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'label_block'   => true,
                'condition'     => [
                    'premium_title_style'   => 'style7',
                ]
            ]
        );
        
        /*Strip Height*/
        $this->add_control('premium_title_style7_strip_height',
            [
                'label'         => __('Strip Height (PX)', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em'],
                'default'       => [
                    'unit'  => 'px',
                    'size'  => '5',
                ],
                'label_block'   => true,
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip,{{WRAPPER}} .premium-title-style7-strip:before ' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'premium_title_style'   => 'style7',
                ]
            ]
        );
        
        /*Strip Top Spacing*/
        $this->add_control('premium_title_style7_strip_top_spacing',
            [
                'label'         => __('Strip Top Spacing (PX)', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', '%', 'em'],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
                'label_block'   => true,
                'condition'     => [
                    'premium_title_style'   => 'style7',
                ],
            ]
        );
        
        /*Strip Bottom Spacing*/
        $this->add_control('premium_title_style7_strip_bottom_spacing',
            [
                'label'         => __('Strip Bottom Spacing (PX)', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', '%', 'em'],
                'label_block'   => true,
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
                'condition'     => [
                    'premium_title_style'   => 'style7',
                ]
            ]
        );
        
        /*Title Align*/
        $this->add_responsive_control('premium_title_style7_strip_align',
            [
                'label'         => __( 'Align', 'premium-addons-for-elementor' ),
                'type'          => Controls_Manager::CHOOSE,
                'options'       => [
                    'left'      => [
                        'title'=> __( 'Left', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-left',
                        ],
                    'none'    => [
                        'title'=> __( 'Center', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-center',
                        ],
                    'right'     => [
                        'title'=> __( 'Right', 'premium-addons-for-elementor' ),
                        'icon' => 'fa fa-align-right',
                        ],
                    ],  
                'default'       => 'none',
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip:before' => 'float: {{VALUE}};',
                ],
                'condition'     => [
                    'premium_title_style'   => 'style7',
                ]
            ]
        );
        
        /*End Title General Settings Section*/
        $this->end_controls_section();

        /*Start Styling Section*/
        $this->start_controls_section('premium_title_style_section',
            [
                'label'         => __('Title', 'premium-addons-for-elementor'),
                'tab'           => Controls_Manager::TAB_STYLE,
            ]
        );
        
        /*Title Color*/
        $this->add_control('premium_title_color', 
            [
                'label'         => __('Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme'        => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1,
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-header' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        
        /*Title Typography*/
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'          => 'title_typography',
                'scheme'        => Scheme_Typography::TYPOGRAPHY_1,
                'selector'      => '{{WRAPPER}} .premium-title-header',
            ]
        );
        
        /*Style 1*/
        /*Style 1 Border*/
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'          => 'style_one_border',
                'selector'      => '{{WRAPPER}} .premium-title-style1',
                'condition'     => [
                    'premium_title_style'   => 'style1',
                ],
            ]
        );
        
        /*Style 2*/
        /*Background Color*/
        $this->add_control('premium_title_style2_background_color', 
            [
                'label'         => __('Background Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme'        => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_2,
                    ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style2' => 'background-color: {{VALUE}};',
                    ],
                'condition'     => [
                    'premium_title_style'   => 'style2',
                ],
            ]
        );
        
        /*Style 2*/
        
        
        /*Style 3*/
        /*Background Color*/
        $this->add_control('premium_title_style3_background_color', 
            [
                'label'         => __('Background Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme'        => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_2
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style3' => 'background-color: {{VALUE}};'
                ],
                'condition'     => [
                    'premium_title_style'   => 'style3'
                ]
            ]
        );
        
        
        /*Style 5*/
        /*Header Line Color*/
        $this->add_control('premium_title_style5_header_line_color', 
            [
                'label'         => __('Line Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme' => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style5' => 'border-bottom: 2px solid {{VALUE}};'
                ],
                'condition'     => [
                    'premium_title_style'   => 'style5'
                ]
            ]
        );
       
        /*Container Line Color*/
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'          => 'style_five_border',
                'selector'      => '{{WRAPPER}} .premium-title-container',
                'condition'     => [
                    'premium_title_style'   => ['style2','style4','style5','style6']
                ]
            ]
        );
        
        /*Style 7*/
        /*Header Line Color*/
        $this->add_control('premium_title_style6_header_line_color', 
            [
                'label'         => __('Line Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme' => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style6' => 'border-bottom: 2px solid {{VALUE}};'
                ],
                'condition'     => [
                    'premium_title_style'   => 'style6'
                ]
            ]
        );
       
        /*Triangle Color*/
        $this->add_control('premium_title_style6_triangle_color', 
            [
                'label'         => __('Triangle Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme'        => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style6:before' => 'border-bottom-color: {{VALUE}};'
                ],
                'condition'     => [
                    'premium_title_style'   => 'style6'
                ]
            ]
        );
        
        /*Strip Color*/
        $this->add_control('premium_title_style7_strip_color', 
            [
                'label'         => __('Strip Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme'        => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-style7-strip:before' => 'background-color: {{VALUE}};'
                ],
                'condition'     => [
                    'premium_title_style'   => 'style7'
                ]
            ]
        );
        
        /*Title Margin*/
        $this->add_responsive_control('premium_title_margin', 
            [
                'label'         => __('Margin', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => ['px', 'em', '%'],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );
        
        /*Title Text Shadow*/
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'label'         => __('Shadow','premium-addons-for-elementor'),
                'name'          => 'premium_title_text_shadow',
                'selector'      => '{{WRAPPER}} .premium-title-header'
            ]
        );

        /*End Title Style Section*/
        $this->end_controls_section();
        
        /*Start Icon Style Section*/
        $this->start_controls_section('premium_title_icon_style_section',
            [
                'label'         => __('Icon Style', 'premium-addons-for-elementor'),
                'tab'           => Controls_Manager::TAB_STYLE,
                'condition'     => [
                    'premium_title_icon_switcher'   => 'yes'
                ]
            ]
        );
        
        /*Icon Color*/
        $this->add_control('premium_title_icon_color', 
            [
                'label'         => __('Icon Color', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::COLOR,
                'scheme' => [
                    'type'  => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1
                ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-icon' => 'color: {{VALUE}};'
                ]
            ]
        );
        
        /*Icon Size*/
        $this->add_control('premium_title_icon_size', 
            [
                'label'         => __('Icon Size', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-icon' => 'font-size: {{SIZE}}{{UNIT}}'
                ]
            ]
        );
        
        /*Icon Background*/
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'          => 'premium_title_icon_background',
                'types'         => [ 'classic' , 'gradient' ],
                'selector'      => '{{WRAPPER}} .premium-title-icon'
            ]
        );
        
        /*Icon Border*/
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'          => 'premium_title_icon_border',
                'selector'      => '{{WRAPPER}} .premium-title-icon'
            ]
        );
        
        /*Icon Border Radius*/
        $this->add_control('premium_title_icon_border_radius',
            [
                'label'         => __('Border Radius', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', '%', 'em'],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-icon' => 'border-radius: {{SIZE}}{{UNIT}};'
                ]
            ]
        );
        
        /*Icon Margin*/
        $this->add_responsive_control('premium_title_icon_margin',
            [
                'label'         => __('Margin', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => [ 'px', 'em', '%' ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
                ]
            ]
        );
        
        /*Icon Padding*/
        $this->add_responsive_control('premium_title_icon_padding',
            [
                'label'         => __('Padding', 'premium-addons-for-elementor'),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => [ 'px', 'em', '%' ],
                'selectors'     => [
                    '{{WRAPPER}} .premium-title-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
                ]
            ]
        );
        
        /*Icon Text Shadow*/
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'label'         => __('Icon Shadow', 'premium-addons-for-elementor'),
                'name'          => 'premium_title_icon_text_shadow',
                'selector'      => '{{WRAPPER}} .premium-title-icon'
            ]
        );
        
        /*End Progress Bar Section*/
        $this->end_controls_section();

    }

    protected function render() {
        // get our input from the widget settings.
        $settings = $this->get_settings_for_display();
        
        $this->add_inline_editing_attributes('premium_title_text', 'none');
        
        $title_tag = $settings['premium_title_tag'];
        
        $selected_style = $settings['premium_title_style'];
        
        $this->add_render_attribute( 'container', 'class', [ 'premium-title-container', $selected_style ] );
        
        $this->add_render_attribute( 'title', 'class', [ 'premium-title-header', 'premium-title-' . $selected_style ] );
    ?>

    <div <?php echo $this->get_render_attribute_string('container'); ?>>
        <<?php echo $title_tag . ' ' . $this->get_render_attribute_string('title') ; ?>>
            <?php if ( $settings['premium_title_style'] === 'style7' ) : ?>
                <span class="premium-title-style7-strip"></span>
            <?php endif; ?>
            <?php if( ! empty( $settings['premium_title_icon'] ) ) : ?>
                <i class="premium-title-icon <?php echo $settings['premium_title_icon'];?>"></i>
            <?php endif; ?>
            <span <?php echo $this->get_render_attribute_string('premium_title_text'); ?>>
                <?php echo esc_html($settings['premium_title_text']); ?>
            </span>
        </<?php echo $title_tag; ?>>
    </div>

    <?php
    }
    
    protected function _content_template() {
        ?>
        <#
            
            view.addInlineEditingAttributes('premium_title_text', 'none');
        
            var titleTag = settings.premium_title_tag,
        
            selectedStyle = settings.premium_title_style,
            
            titleTag = settings.premium_title_tag,
            
            titleIcon = settings.premium_title_icon,
            
            titleText = settings.premium_title_text;
            
            view.addRenderAttribute( 'premium_title_container', 'class', [ 'premium-title-container', selectedStyle ] );
            
            view.addRenderAttribute( 'premium_title', 'class', [ 'premium-title-header', 'premium-title-' + selectedStyle ] );
            
            view.addRenderAttribute( 'premium_title_icon', 'class', [ 'premium-title-icon', titleIcon ] );
        
        #>
        <div {{{ view.getRenderAttributeString('premium_title_container') }}}>
            <{{{titleTag}}} {{{view.getRenderAttributeString('premium_title')}}}>
                <# if( selectedStyle == 'style7' ) { #>
                    <span class="premium-title-style7-strip"></span>
                <# } 
                    if( '' != settings.premium_title_icon && 'yes' == settings.premium_title_icon_switcher ) { #>
                        <i {{{ view.getRenderAttributeString('premium_title_icon') }}}></i>
                    <# } #>
                <span {{{ view.getRenderAttributeString('premium_title_text') }}}>{{{ titleText }}}</span>
            </{{{titleTag}}}>
        </div>
        
        <?php
    }
}