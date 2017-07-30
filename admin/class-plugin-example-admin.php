<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Example
 * @subpackage Plugin_Example/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin example, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Example
 * @subpackage Plugin_Example/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Example_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin    The ID of this plugin.
	 */
	private $plugin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin, $version ) {

		$this->plugin = $plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Example_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Example_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin, plugin_dir_url( __FILE__ ) . 'css/plugin-example-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Example_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Example_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin, plugin_dir_url( __FILE__ ) . 'js/plugin-example-admin.js', array( 'jquery' ), $this->version, false );

	}

}
