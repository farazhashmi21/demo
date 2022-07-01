<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage corporate
 * @since corporate 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since corporate 1.0
	 *
	 * @return void
	 */
	function corporate_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'corporate-columns-overlap',
				'label' => esc_html__( 'Overlap', 'corporate' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'corporate-border',
				'label' => esc_html__( 'Borders', 'corporate' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'corporate-border',
				'label' => esc_html__( 'Borders', 'corporate' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'corporate-border',
				'label' => esc_html__( 'Borders', 'corporate' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'corporate-image-frame',
				'label' => esc_html__( 'Frame', 'corporate' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'corporate-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'corporate' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'corporate-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'corporate' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'corporate-border',
				'label' => esc_html__( 'Borders', 'corporate' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'corporate-separator-thick',
				'label' => esc_html__( 'Thick', 'corporate' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'corporate-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'corporate' ),
			)
		);
	}
	add_action( 'init', 'corporate_register_block_styles' );
}
