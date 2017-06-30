<?php
/**
* Plugin Name: Pizza Shapes
* Plugin URI: http://www.youaredigital.nl
* Description: Plugin for testing Bedrock with a custom plugin on a personal repo.
* Version: 1.0.1
* Author: MrPizzaShapes
* Author URI: http://www.youaredigital.nl
*/

add_action( 'wp_head', 'pizza_shapes_head' );
function pizza_shapes_head() {
    echo "MrPizzaShapes will rise again.";
}