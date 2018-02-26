<?php
/**
 * Handle the link shortcode.
 *
 * @link       http://bootstrapped.ventures
 * @since      2.0.0
 *
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/public
 */

/**
 * Handle the link shortcode.
 *
 * @since      2.0.0
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/public
 * @author     Brecht Vandersmissen <brecht@bootstrapped.ventures>
 */
class EAFL_Shortcode {

	/**
	 * Register actions and filters.
	 *
	 * @since    2.0.0
	 */
	public static function init() {
		add_shortcode( 'eafl', array( __CLASS__, 'link_shortcode' ) );
	}

	/**
	 * Output for the link shortcode.
	 *
	 * @since    2.0.0
	 * @param	 array $atts Options passed along with the shortcode.
	 */
	public static function link_shortcode( $atts ) {
		$atts = shortcode_atts( array(
			'id' => false,
			'text' => false,
		), $atts, 'eafl_link' );

		$output = '';
		$id = intval( $atts['id'] );

		if ( $id ) {
			$link = EAFL_Link_Manager::get_link( $id );

			if ( $link ) {
				$classes = array(
					'eafl-link'
				);

				if ( 'no' === $link->cloak() ) {
					$url = $link->url();
					$classes[] = 'eafl-link-direct';
				} else {
					$url = get_permalink( $id );
					$classes[] = 'eafl-link-cloaked';
				}

				$nofollow = 'nofollow' === $link->nofollow() ? ' rel="nofollow"' : '';

				$text = $link->text();
				$text = $atts['text'] ? $atts['text'] : $text[0];

				$output = '<a href="' . $url . '" data-id="' . $link->ID() . '" class="' . implode( ' ', $classes ) . '" target="' . $link->target() . '"' . $nofollow . '>' . $text . '</a>';
				$output = apply_filters( 'eafl_link_shortcode', $output, $link, $text );
			}
		}

		return $output;
	}
}

EAFL_Shortcode::init();
