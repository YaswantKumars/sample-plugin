<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://testuri
 * @since      1.0.0
 *
 * @package    Shortcode
 * @subpackage Shortcode/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Shortcode
 * @subpackage Shortcode/public
 * @author     Yaswant  <yaswant@gmail.com>
 */
class Shortcode_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/shortcode-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/shortcode-public.js', array( 'jquery' ), $this->version, false );

	}


	public function test_shortcode(){
		add_shortcode( 'cushook', array($this,"cus_hook_short"));
	}
	public function cus_hook_short($atts){


		$paramss = $atts;
		ob_start();
		$cuscontent = "No Custom User content found ";
		// print_r($atts);
		if($atts['customcontent']!=null){
            $cuscontent = $atts['customcontent'];
			echo "The Custom content is : <span style='color:green'> $cuscontent </span>";
		}
		echo "<h1>Test Shotcode check </h1>";
		return ob_get_clean();
	}

}
