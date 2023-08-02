<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://Wordpress.com
 * @since      1.0.0
 *
 * @package    Product_dis
 * @subpackage Product_dis/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Product_dis
 * @subpackage Product_dis/admin
 * @author     dave_property <davesproperty340@gmail.com>
 */
class Product_dis_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		require_once plugin_dir_path(dirname( __FILE__ )).'database/database-connection.php';
		$this->Database_Connection = new Database();

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
		 * defined in Product_dis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_dis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/product_dis-admin.css', array(), $this->version, 'all' );

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
		 * defined in Product_dis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Product_dis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/product_dis-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function productList()
	{
		$product = $this->Database_Connection->product_list_admin();
		wp_enqueue_media();
		
		require_once plugin_dir_path(dirname( __FILE__ )).'admin/partials/list_product_admin.php';
	}
	public function productAdd()
	{
		wp_enqueue_media();
		require_once plugin_dir_path(dirname( __FILE__ )).'admin/partials/add_product.php';
	}
	public function productUpdate()
	{
		if(isset($_GET['id']) && $_GET['id']){
			$row = $this->Database_Connection->edit_car($_GET['id']);
			wp_enqueue_media();
			require_once plugin_dir_path(dirname( __FILE__ )).'admin/partials/update_prop.php';
		}else{
			$__url = esc_url(get_site_url().'/pages/not-found/');
			wp_redirect($__url);
			wp_die();
		}
	}
	public function add_product_callback()
	{
		echo $this->Database_Connection->add_product($_POST);
		wp_die();
	}
	public function delete_prop_callback()
	{
		echo $this->Database_Connection->delete_prop($_POST);
		wp_die();
	}
	public function update_prop_callback()
	{
		echo $this->Database_Connection->update_prop($_POST);
		wp_die();
	}
	public function product(){
		add_menu_page(
			'Manage Product',
			'Manage Product',
			'manage_options',
			'Manage Product',
			array($this,'productList'),
			'',
			3
		);
		add_submenu_page(
			'Manage Product',
			'Add Product',
			'Add Product',
			'manage_options',
			'add-product',
			array($this,'productAdd')
		);
		add_submenu_page(
			'',
			'Update Car',
			'',
			'manage_options',
			'Update-product',
			array($this,'productUpdate')
		);
	}
}