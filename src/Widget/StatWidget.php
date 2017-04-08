<?php

namespace WPWaniKani\Widget;

class StatWidget extends \WP_Widget {
	/**
	 * StatWidget constructor.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'wp_wanikani_stat_widget',
			'description' => 'WP WaniKani Stat Widget',
		);
		parent::__construct( 'wp_wanikani_stat_widget', 'WP WaniKani Stat Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
			echo "<h2 class=\"widget-title\">WaniKani Stats</h2>";
		echo $args['after_widget'];
	}
}
