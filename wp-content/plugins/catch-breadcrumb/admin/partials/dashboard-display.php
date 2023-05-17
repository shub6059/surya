<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link      https://catchplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Catch_Breadcrumb
 * @subpackage Catch_Breadcrumb/admin/partials
 */
?>

<div id="catch-breadcrumb">
	<div class="content-wrapper">
		<div class="header">
			<h2><?php esc_html_e( 'Settings', 'catch-breadcrumb' ); ?></h2>
		</div> <!-- .Header -->
		<div class="content">
			<?php if ( isset( $_GET['settings-updated'] ) ) { ?>

			<div id="message" class="notice updated fade">
				<p><strong><?php esc_html_e( 'Plugin Options Saved.', 'catch-breadcrumb' ); ?></strong></p>
			</div>

			<?php } ?>

			<?php
				// Use nonce for verification.
				wp_nonce_field( CATCH_BREADCRUMB_BASENAME, 'catch_breadcrumb_nonce' );
			?>

			<div id="breadcrumb_main">
				<form method="post" action="options.php">

					<?php settings_fields( 'catch-breadcrumb-group' ); ?>

					<?php
					$defaults = catch_breadcrumb_default_options();
					$settings = catch_breadcrumb_get_options();
					?>

					<div class="option-container">
						<table class="form-table" bgcolor="white">
							<tbody>

								<tr>
									<th>
										<label><?php esc_html_e( 'Content Selector', 'catch-breadcrumb' ); ?></label>
									</th>
									<td>
										<input type="text" name="catch_breadcrumb_options[content_selector]" id="breadcrumb-selector" class="breadcrumb-selector"  value="<?php echo esc_attr( $settings['content_selector'] ); ?>"/>
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Breadcrumb will be displayed just before this selector.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php echo esc_html__( 'Display Breadcrumb', 'catch-breadcrumb' ); ?></label>
									</th>
									<td>
										<select name="catch_breadcrumb_options[breadcrumb_dynamic]" id="catch_breadcrumb_options[breadcrumb_dynamic]">
											<?php
												$breadcrumb_dynamic = catch_breadcrumb_dynamic_position();
											foreach ( $breadcrumb_dynamic as $k => $value ) {
												echo '<option value="' . $k . '"' . selected( $settings['breadcrumb_dynamic'], $k, false ) . '>' . $value . '</option>';
											}
											?>

										</select>
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Set your desire breadcrumb position which will be display before/after content selector.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>


								<tr>
									<th>
										<label><?php esc_html_e( 'Breadcrumb Separator', 'catch-breadcrumb' ); ?></label>
									</th>
									<td>
										<input type="text" name="catch_breadcrumb_options[breadcrumb_separator]" id="breadcrumb-separator"   value="<?php echo esc_attr( $settings['breadcrumb_separator'] ); ?>"  />
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Anything you want to put as separator inbetween the breadcrumbs.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>
								<tr>
									<th scope="row" colspan="2">
										<code>[catch-breadcrumb]</code>
										<?php esc_html_e( 'shortcode (in the Post/Page content) will enable Breadcrumb into the Page/Post.', 'catch-breadcrumb' ); ?>
										<p><?php esc_html_e( 'OR', 'breadcrumb' ); ?></p>
										<code>&lt;?php echo do_shortcode( '[catch-breadcrumb]' );?&gt;</code>
									</th>
								</tr>
								<tr>
									<th scope="row"><?php esc_html_e( 'Enable Home Icon', 'catch-breadcrumb' ); ?></th>
									<td>
										<?php
										$text = ( ! empty( $settings['breadcrumb_home_icon'] ) && $settings['breadcrumb_home_icon'] ) ? 'checked' : '';
										echo '<input type="checkbox" ' . esc_attr( $text ) . ' name="catch_breadcrumb_options[breadcrumb_home_icon]" value="1" />&nbsp;&nbsp;' . esc_html__( ' Check to enable', 'catch-breadcrumb' );
										?>
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Checking this option will enable Home icon in breadcrumb.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php esc_html_e( 'Enable On Home Page', 'catch-breadcrumb' ); ?></th>
									<td>
										<?php
										$text = ( ! empty( $settings['breadcrumb_display_home'] ) && $settings['breadcrumb_display_home'] ) ? 'checked' : '';
										echo '<input type="checkbox" ' . esc_attr( $text ) . ' name="catch_breadcrumb_options[breadcrumb_display_home]" value="1"/>&nbsp;&nbsp;' . esc_html__( ' Check to enable', 'catch-breadcrumb' );
										?>
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Checking this option will display breadcrumb on homepage/frontpage.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>
								<tr>
									<th scope="row"><?php esc_html_e( 'Reset Options', 'catch-breadcrumb' ); ?></th>
									<td>
										<input name="catch_breadcrumb_options[reset]" id="catch_breadcrumb_options[reset]" type="checkbox" value="1" class="catch_breadcrumb_options[reset]" />
										<?php esc_html__( 'Check to reset', 'catch-breadcrumb' ); ?>
										<span class="dashicons dashicons-info tooltip" title="<?php esc_attr_e( 'Caution: Reset all settings to default.', 'catch-breadcrumb' ); ?>"></span>
									</td>
								</tr>
							</tbody>
						</table>
						<?php submit_button( esc_html__( 'Save Changes', 'catch-breadcrumb' ) ); ?>
					</div><!-- .option-container -->
				</form>
			</div><!-- #breadcrumb_main -->
		</div><!-- .content -->
	</div><!-- .content-wrapper -->
</div><!---catch-breadcrumb-->
