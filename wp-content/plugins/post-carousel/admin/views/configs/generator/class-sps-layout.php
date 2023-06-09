<?php
/**
 * The layout Meta-box configurations.
 *
 * @package Smart_Post_Show
 * @subpackage Smart_Post_Show/admin
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access pages directly.

/**
 * The Layout building class.
 */
class SPS_Layout {

	/**
	 * Layout metabox section.
	 *
	 * @param string $prefix The metabox key.
	 * @return void
	 */
	public static function section( $prefix ) {
		SP_PC::createSection(
			$prefix,
			array(
				'fields' => array(
					array(
						'type'  => 'heading',
						'image' => SP_PC_URL . 'admin/assets/img/logo.svg',
						'after' => '<i class="fa fa-life-ring"></i> Support',
						'link'  => 'https://shapedplugin.com/support/?user=lite',
						'class' => 'pcp-admin-header',
					),
					array(
						'id'      => 'pcp_layout_preset',
						'type'    => 'layout_preset',
						'title'   => __( 'Layout Preset', 'post-carousel' ),
						'class'   => 'pcp-layout-preset',
						'options' => array(
							'carousel_layout'  => array(
								'image' => SP_PC_URL . 'admin/assets/img/carousel.svg',
								'text'  => __( 'Carousel', 'post-carousel' ),
							),
							'grid_layout'      => array(
								'image' => SP_PC_URL . 'admin/assets/img/grid.svg',
								'text'  => __( 'Grid', 'post-carousel' ),
							),
							'list_layout'      => array(
								'image'    => SP_PC_URL . 'admin/assets/img/list.svg',
								'text'     => __( 'List', 'post-carousel' ),
								'pro_only' => true,
							),
							'filter_layout'    => array(
								'image'    => SP_PC_URL . 'admin/assets/img/filter.svg',
								'text'     => __( 'Isotope', 'post-carousel' ),
								'pro_only' => true,
							),
							'timeline_layout'  => array(
								'image'    => SP_PC_URL . 'admin/assets/img/timeline.svg',
								'text'     => __( 'Timeline', 'post-carousel' ),
								'pro_only' => true,
							),
							'zigzag_layout'    => array(
								'image'    => SP_PC_URL . 'admin/assets/img/zigzag.svg',
								'text'     => __( 'Zigzag', 'post-carousel' ),
								'pro_only' => true,
							),
							'accordion_layout' => array(
								'image'    => SP_PC_URL . 'admin/assets/img/collapsible.svg',
								'text'     => __( 'Accordion', 'post-carousel' ),
								'pro_only' => true,
							),
							'large_with_small' => array(
								'image'    => SP_PC_URL . 'admin/assets/img/block.svg',
								'text'     => __( 'Large with Small', 'post-carousel' ),
								'pro_only' => true,
							),
							'table_layout'     => array(
								'image'    => SP_PC_URL . 'admin/assets/img/table.svg',
								'text'     => __( 'Table', 'post-carousel' ),
								'pro_only' => true,
							),
						),
						'default' => 'carousel_layout',
					),
				), // End of fields array.
			)
		);

	}
}
