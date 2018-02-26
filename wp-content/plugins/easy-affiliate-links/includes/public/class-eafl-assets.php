<?php
/**
 * Responsible for loading the EAFL assets.
 *
 * @link       http://bootstrapped.ventures
 * @since      2.5.0
 *
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/public
 */

/**
 * Responsible for loading the EAFL assets.
 *
 * @since      2.5.0
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/public
 * @author     Brecht Vandersmissen <brecht@bootstrapped.ventures>
 */
class EAFL_Assets {
	/**
	 * Register actions and filters.
	 *
	 * @since    2.5.0
	 */
	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue' ) );
		add_action( 'wp_head', array( __CLASS__, 'custom_css' ) );
	}

	/**
	 * Enqueue stylesheets and scripts.
	 *
	 * @since    2.5.0
	 */
	public static function enqueue() {
		wp_enqueue_script( 'eafl-public', EAFL_URL . 'assets/js/public.js', array( 'jquery' ), EAFL_VERSION, true );

		wp_localize_script( 'eafl-public', 'eafl_public', array(
			'home_url' => home_url( '/' ),
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'eafl' ),
		));
	}

	/**
	 * Output the custom CSS.
	 *
	 * @since    2.5.0
	 */
	public static function custom_css() {
		$public_css = EAFL_Settings::get( 'public_css' );

		if ( trim( $public_css ) ) {
			echo '<style type="text/css">' . $public_css . '</style>';
		}
	}
}

EAFL_Assets::init();
