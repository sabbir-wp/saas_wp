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
class Anber_off_canvas extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'anber_off_canvas';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __('Anber_off_canvas', 'anber-ea');
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-banner';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return ['anbar-category'];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return ['anber-ea'];
    }

    public function get_style_depends() {
        return ['adon-comon-style'];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls() {
        $this->start_controls_section(
                'section_select_layout',
                [
                    'label' => __('Anber Off Canvas', 'anber-ea'),
                ]
        );

        $this->add_control(
                'aoc-layout',
                [
                    'label' => __('Select Layout', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => [
                        'layout-1' => __('Layout 1', 'anber-ea'),
                    ],
                    'default' => 'layout-1',
                    'toggle' => true,
                ]
        );
        $this->add_control(
                'ocs_title',
                [
                    'label' => esc_html__('Title', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => esc_html__('Enter your title', 'anber-ea'),
                ]
        );
        $this->add_control(
                'ocs_content',
                [
                    'label' => esc_html__('Content', 'anber-ea'),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'placeholder' => esc_html__('Enter your title', 'anber-ea'),
                ]
        );
        $this->add_control(
			'ocs_form_sode',
			[
				'label' => esc_html__( 'Form Shortcode', 'anber-ea' ),
				'type' => \Elementor\Controls_Manager::TEXT,				
				
			]
		);
        $this->add_control(
                'ocs_btmtext',
                [
                    'label' => esc_html__('Not Content', 'anber-ea'),
                   'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'placeholder' => esc_html__('Enter your Note', 'anber-ea'),
                ]
        );

        $this->end_controls_section();
        

        $this->start_controls_section(
                'banner_style',
                [
                    'label' => esc_html__('General Style', 'anber-ea'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
        );

        $this->end_controls_section();
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

        include dirname(__FILE__) . '/layout-1.php';
    }
}

Plugin::instance()->widgets_manager->register(new Anber_banner());
