<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Module Name: Exemple Of New Module
 * Description: Exemple of a new module for WPMasterToolKit.
 * @since 1.0.0
 */
class Exemple_Of_New_Module {

    /**
     * Invoke the hooks.
     * 
     * @since   1.0.0
     */
    public function __construct() {
        $this->option_id    = 'exemple_of_new_module';
		$this->nonce_action = $this->option_id . '_action';

        add_action( 'init', array( $this, 'class_init' ) );
        add_action( 'admin_menu', array( $this, 'add_submenu' ), 999 );

        add_action( 'init', array( $this, 'exemple' ) );
    }
    
    /**
     * activate
     *
     * @return void
     */
    public static function activate(){
        // Fired when the module is activated.
        error_log('------------------------------------');
        error_log('Module activated');
        error_log('------------------------------------');
    }

    /**
     * deactivate
     *
     * @return void
     */
    public static function deactivate(){
        // Fired when the module is deactivated.
        error_log('------------------------------------');
        error_log('Module deactivated');
        error_log('------------------------------------');
    }

    /**
     * Initialize the class
	 * 
	 * @since 1.11.0
     */
    public function class_init() {
        $this->header_title = esc_html__( 'Exemple Of New Module', 'wpmastertoolkit-addon-exemple' );
    }
    
    /**
     * Add a submenu
	 * 
	 * @since 1.11.0
     */
    public function add_submenu(){

        add_submenu_page(
            'wp-mastertoolkit-settings',
            $this->header_title,
            $this->header_title,
            'manage_options',
            'wp-mastertoolkit-settings-adminer',
            array( $this, 'render_submenu'),
            null
        );
    }

    /**
     * Render the submenu
     * 
	 * @since 1.11.0
     */
    public function render_submenu() {
        ?>
        <div class="wrap">
            <h1><?php echo esc_html( $this->header_title ); ?></h1>
            <p><?php esc_html_e( 'This is an exemple of a new module for WPMasterToolKit.', 'wpmastertoolkit-addon-exemple' ); ?></p>
        </div>
        <?php
    }

    /**
     * exemple
     *
     * @return void
     */
    public function exemple() {
        error_log('------------------------------------');
        error_log('Module Exemple Of New Module is working');
        error_log('------------------------------------');
    }

}