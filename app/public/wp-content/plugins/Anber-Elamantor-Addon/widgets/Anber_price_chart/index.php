<?php

namespace Elementor;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use ELementor\Repeater;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

/**
 * Anber Ea Demo
 *
 * Anber Ea widget for Demo.
 *
 * @since 1.0.0
 */
class Anber_price_chart extends Widget_Base {

    public function get_name() {
        return 'Anber_price_chart';
    }

    public function get_title() {
        return esc_html__('Anber price chart', 'elementor-addon');
    }

    public function get_icon() {
        return 'eicon-price-table';
    }

    public function get_categories() {
        return ['anbar-category'];
    }

    public function get_keywords() {
        return ['price', 'table'];
    }

    public function get_style_depends() {
        return ['anber-price-tab',];
    }

    protected function register_controls() {

        // Content Tab Start
        $this->start_controls_section(
                'section_tab_settings',
                [
                    'label' => esc_html__('Tabbed Settings', 'anber-ea'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
        );
        // Start tabs
        $this->start_controls_tabs('tabs_settings');

        // Tab 1
        $this->start_controls_tab(
                'tab_general',
                [
                    'label' => esc_html__('Tab 1', 'anber-ea'),
                ]
        );
        $this->add_control(
                'list_title',
                [
                    'label' => esc_html__('Title', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('List Title', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_icon_group',
                [
                    'name' => 'list_tag_icon',
                    'label' => esc_html__('Icon', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
                        'library' => 'fa-solid',
                    ]
                ]
        );
        $this->add_control(
                'list_tag_content',
                [
                    'label' => esc_html__('Tag Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Monatlich inkl. MwSt.', 'anber-ea'),
                ]
        );
        $this->add_control(
                'list_price_group',
                [
                    'name' => 'list_price',
                    'label' => esc_html__('Price', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('600', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_price_currency',
                [
                    'label' => esc_html__('Currency ', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('$', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_content_group',
                [                    
                    'label' => esc_html__('Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'list_button_url',
                [                   
                    'type' => \Elementor\Controls_Manager::URL,
                    'url' => 'https://your-link.com',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
        );
        $this->add_control(
                'list_button_text',
                [
                    'label' => esc_html__('Button Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Jetzt Testen', 'anber-ea'),
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'price_list_bottom',
                [
                    'name' => 'list_buttom_text',
                    'label' => esc_html__('Extra Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'tablist',
                [
                    'label' => esc_html__('Tab Items', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => [
                        [
                            'name' => 'tab_item_title',
                            'label' => esc_html__('Title', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('TabTitle', 'anber-ea'),
                            'label_block' => true,
                        ],
                        [
                            'name' => 'tab_item_content',
                            'label' => esc_html__('Content', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::WYSIWYG,
                            'default' => esc_html__('Tab Content', 'anber-ea'),
                            'show_label' => false,
                        ],
                    ],
                ]
        );

        $this->end_controls_tab();

        // Tab 2
        $this->start_controls_tab(
                'tab_advanced',
                [
                    'label' => esc_html__('Tab 2', 'anber-ea'),
                ]
        );

        $this->add_control(
                'list_title2',
                [
                    'label' => esc_html__('Title', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('List Title', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_icon_group2',
                [
                    'name' => 'list_tag_icon',
                    'label' => esc_html__('Icon', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
                        'library' => 'fa-solid',
                    ]
                ]
        );
        $this->add_control(
                'list_tag_content2',
                [
                    'label' => esc_html__('Tag Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Monatlich inkl. MwSt.', 'anber-ea'),
                ]
        );
        $this->add_control(
                'list_price_group2',
                [
                    'name' => 'list_price',
                    'label' => esc_html__('Price', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('600', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_price_currency2',
                [
                    'label' => esc_html__('Currency ', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('$', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_content_group2',
                [
                    'name' => 'list_content',
                    'label' => esc_html__('Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'list_button_group2',
                [
                    'name' => 'list_button_url',
                    'type' => \Elementor\Controls_Manager::URL,
                    'url' => 'https://your-link.com',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
        );
        $this->add_control(
                'list_button_text2',
                [
                    'label' => esc_html__('Button Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Jetzt Testen', 'anber-ea'),
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'price_list_bottom2',
                [
                    'name' => 'list_buttom_text',
                    'label' => esc_html__('Extra Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'tablist2',
                [
                    'label' => esc_html__('Tab Items', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => [
                        [
                            'name' => 'tab_item_title2',
                            'label' => esc_html__('Title', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('TabTitle', 'anber-ea'),
                            'label_block' => true,
                        ],
                        [
                            'name' => 'tab_item_content2',
                            'label' => esc_html__('Content', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::WYSIWYG,
                            'default' => esc_html__('Tab Content', 'anber-ea'),
                            'show_label' => false,
                        ],
                    ],
                ]
        );

        $this->end_controls_tab();
        // Tab 3
        $this->start_controls_tab(
                'tab_advanced3',
                [
                    'label' => esc_html__('Tab 3', 'anber-ea'),
                ]
        );

        $this->add_control(
                'list_title3',
                [
                    'label' => esc_html__('Title', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('List Title', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_icon_group3',
                [
                    'name' => 'list_tag_icon',
                    'label' => esc_html__('Icon', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
                        'library' => 'fa-solid',
                    ]
                ]
        );
        $this->add_control(
                'list_tag_content3',
                [
                    'label' => esc_html__('Tag Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Monatlich inkl. MwSt.', 'anber-ea'),
                ]
        );
        $this->add_control(
                'list_price_group3',
                [
                    'name' => 'list_price',
                    'label' => esc_html__('Price', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('600', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_price_currency3',
                [
                    'label' => esc_html__('Currency ', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('$', 'anber-ea'),
                    'label_block' => true,
                ]
        );
        $this->add_control(
                'list_content_group3',
                [
                    'name' => 'list_content',
                    'label' => esc_html__('Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'list_button_group3',
                [
                    'name' => 'list_button_url',
                    'type' => \Elementor\Controls_Manager::URL,
                    'url' => 'https://your-link.com',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
        );
        $this->add_control(
                'list_button_text3',
                [
                    'label' => esc_html__('Button Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Jetzt Testen', 'anber-ea'),
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'price_list_bottom3',
                [
                    'name' => 'list_buttom_text',
                    'label' => esc_html__('Extra Text', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'label_block' => true,
                ],
        );
        $this->add_control(
                'tablist3',
                [
                    'label' => esc_html__('Tab Items', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => [
                        [
                            'name' => 'tab_item_title3',
                            'label' => esc_html__('Title', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('TabTitle', 'anber-ea'),
                            'label_block' => true,
                        ],
                        [
                            'name' => 'tab_item_content3',
                            'label' => esc_html__('Content', 'anber-ea'),
                            'type' => \Elementor\Controls_Manager::WYSIWYG,
                            'default' => esc_html__('Tab Content', 'anber-ea'),
                            'show_label' => false,
                        ],
                    ],
                ]
        );

        $this->end_controls_tab();
        // End tabs
        $this->end_controls_tabs();

        // End control section
        $this->end_controls_section();

        // Content Tab End
        // Style Tab Start

        $this->start_controls_section(
                'section_title_style',
                [
                    'label' => esc_html__('Title', 'elementor-addon'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'title_color',
                [
                    'label' => esc_html__('Text Color', 'elementor-addon'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
                    ],
                ]
        );

        $this->end_controls_section();

        // Style Tab End
    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings();
        ?>

        <?php

        include dirname(__FILE__) . '/price-chart.php';
    }
}

Plugin::instance()->widgets_manager->register(new Anber_price_chart());
