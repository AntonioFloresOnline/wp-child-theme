<?php

class Custom_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'customwidget';
	}

	public function get_title() {
		return __( 'Custom Widget', 'plugin-name' );
	}

	public function get_icon() {
		return 'fa fa-cube';
	}

	public function get_categories() {
		return [ 'custom-widgets' ];
	}


	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'widget_title',
			[
				'label' => __( 'Widget Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'plugin-name' ),
				'default' => __( 'This is the widget title', 'plugin-name' ),
			]
		);

		$this->add_control(
			'widget_content',
			[
				'label' => __( 'Widget Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Enter the content', 'plugin-name' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'plugin-name' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$widgetTitle = $settings['widget_title'];

		$widgetContent = $settings['widget_content'];

		include 'views/Custom-Widget.view.php';

	}

}