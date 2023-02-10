<?php
class Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'new_widget';
	}

	public function get_title() {
		return esc_html__( 'New Widget', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'whistlebits', 'new' ];
	}

	protected function render() {
		?>

		<p> Hello World.</p>

		<?php
	}
}