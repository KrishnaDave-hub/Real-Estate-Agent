<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://Wordpress.com
 * @since      1.0.0
 *
 * @package    Product_dis
 * @subpackage Product_dis/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Product_dis
 * @subpackage Product_dis/public
 * @author     dave_property <davesproperty340@gmail.com>
 */
class Product_dis_Public {

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
		require_once plugin_dir_path(dirname( __FILE__ )).'database/database-connection.php';
		$this->Database_Connection = new Database();
		add_shortcode('products',array($this,'products_shortcode'));
		add_shortcode('products_list',array($this,'products_list_shortcode'));
		add_shortcode('home_products_list',array($this,'home_products_list_shortcode'));
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
		 * defined in Product_dis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_dis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/product_dis-public.css', array(), $this->version, 'all' );

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
		 * defined in Product_dis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_dis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/product_dis-public.js', array( 'jquery' ), $this->version, false );

	}
    function products_shortcode() {
		$row = $this->Database_Connection->productDetail($_GET['id']);
		$images = $this->Database_Connection->productImages($_GET['id']);
		wp_enqueue_media();
		
		require_once plugin_dir_path(dirname( __FILE__ )).'public/partials/product_detail.php';
    }
    function products_list_shortcode() {
		$product = $this->Database_Connection->product_list_admin($_GET);
		wp_enqueue_media();
		require_once plugin_dir_path(dirname( __FILE__ )).'public/partials/product_list.php';
    }
	function home_products_list_shortcode() {
		$product = $this->Database_Connection->productList();
		wp_enqueue_media();
		require_once plugin_dir_path(dirname( __FILE__ )).'public/partials/home_product_list.php';
    }
}