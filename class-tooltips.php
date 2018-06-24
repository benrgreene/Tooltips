<?php

/*
 * Plugin Name: Tooltips
 * Description: Add tooltips to your content
 * Version: 1
 * Author: Ben Greene
 * Author URI: www.benrgreene.com
 */

class ToolTips {

    protected static $instance;

    public static function get_instance() {
        if( null === self::$instance ) {
            self::$instance = new ToolTips();
        }
        return self::$instance;
    }

    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'add_styles' ) );
        add_shortcode( 'tooltip', array( $this, 'display_tooltip' ) );
    }

    public function add_styles() {
        wp_enqueue_style( 'tooltip-styles', plugins_url( 'styles.css', __FILE__ ) );
    }

    /**
     * Callback for displaying a tooltip
     * 
     * Shortcode content: text that gets the tooltip
     * Attributes:
     *   - Tip: the text that is displayed as the tooltip
     *   - Position: if the tooltip should be above or below the content.
     *               defaults to 'top'
     *   - Underline: whether or not to display underlines beneath 
     *                the tooltip triggers (defaults to true)
    */
    public function display_tooltip( $atts, $content='' ) {
        $atts = array_merge( array(
            'tip'       => '',
            'position'  => 'top',
            'underline' => true,
        ), $atts );

        ob_start();
        include 'templates/tooltip.php';
        return ob_get_clean();
    }
}

ToolTips::get_instance();