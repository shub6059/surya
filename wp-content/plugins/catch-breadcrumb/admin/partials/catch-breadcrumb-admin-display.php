<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link      https://catchplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Catch Breadcrumb
 * @subpackage Catch Breadcrumb/admin/partials
 */
?>

<div class="wrap">
	<h1 class="wp-heading-inline"><?php esc_html_e( 'Breadcrumb', 'catch-breadcrumb' ); ?></h1>
	<div id="plugin-description">
		<p><?php esc_html_e( 'Catch Breadcrumb lets you display Breadcrumb Navigation anywhere on your website elegantly. It helps your readers navigate easily through your website without getting lost.', 'catch-breadcrumb' ); ?></p>
	</div>
	<div class="catchp-content-wrapper">
		<div class="catchp_widget_settings">
			<form id="breadcrumb-main" method="post" action="options.php">
				<h2 class="nav-tab-wrapper">
					<a class="nav-tab nav-tab-active" id="dashboard-tab" href="#dashboard"><?php esc_html_e( 'Dashboard', 'catch-breadcrumb' ); ?></a>
					<a class="nav-tab" id="features-tab" href="#features"><?php esc_html_e( 'Features', 'catch-breadcrumb' ); ?></a>
					<a class="nav-tab" id="premium-extensions-tab" href="#premium-extensions"><?php esc_html_e( 'Compare Table', 'catch-breadcrumb' ); ?></a>
				</h2>
				<div id="dashboard" class="wpcatchtab nosave active">

					<?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/dashboard-display.php'; ?>

					<div id="ctp-switch" class="content-wrapper col-3 catch-breadcrumb-main">
						<div class="header">
							<h2><?php esc_html_e( 'Catch Themes & Catch Plugins Tabs', 'catch-breadcrumb' ); ?></h2>
						</div> <!-- .Header -->

						<div class="content">

							<p>

							<?php
								echo esc_html__( 'If you want to turn off Catch Themes & Catch Plugins tabs option in Add Themes and Add Plugins page, please uncheck the following option.', 'catch-breadcrumb' );
							?>

							</p>
							<table>
								<tr>
									<td>

									<?php echo esc_html__( 'Turn On Catch Themes & Catch Plugin tabs', 'catch-breadcrumb' ); ?>

									</td>
									<td>

									<?php $ctp_options = ctp_get_options(); ?>

										<div class="module-header <?php echo esc_attr( $ctp_options['theme_plugin_tabs'] ) ? 'active' : 'inactive'; ?>">
											<div class="switch">

												<input type="hidden" name="catch_breadcrumb_plugin_tabs_nonce" id="catch_breadcrumb_plugin_tabs_nonce" value="<?php echo esc_attr( wp_create_nonce( 'catch_breadcrumb_plugin_tabs_nonce' ) ); ?>" />
												<input type="checkbox" id="ctp_options[theme_plugin_tabs]" class="ctp-switch" rel="theme_plugin_tabs" <?php checked( true, $ctp_options['theme_plugin_tabs'] ); ?> >
												<label for="ctp_options[theme_plugin_tabs]"></label>

											</div>
											<div class="loader"></div>
										</div>
									</td>
								</tr>
							</table>

						</div>
					</div><!-- #ctp-switch -->
					<div id="go-premium" class="content-wrapper col-2">

						<div class="header">
							<h2><?php esc_html_e( 'Go Premium!', 'catch-breadcrumb' ); ?></h2>
						</div> <!-- .Header -->

						<div class="content">
							<button type="button" class="button dismiss">
								<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this item.', 'catch-breadcrumb' ); ?></span>
								<span class="dashicons dashicons-no-alt"></span>
							</button>
							<ul class="catchp-lists">
								<li><strong><?php esc_html_e( 'Breadcrumb Font Size', 'catch-breadcrumb' ); ?></strong></li>
								<li><strong><?php esc_html_e( 'Breadcrumb Text Color', 'catch-breadcrumb' ); ?></strong></li>
								<li><strong><?php esc_html_e( 'Breadcrumb Background Color', 'catch-breadcrumb' ); ?></strong>
								</li>
							</ul>
							<a href="<?php esc_url( 'https://catchplugins.com/plugins/catch-breadcrumb-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Find out why you should upgrade to Catch Breadcrumb Premium »', 'catch-breadcrumb' ); ?></a></div> <!-- .Content -->

					</div> <!-- #go-premium -->

				<div id="pro-screenshot" class="content-wrapper col-3">

					<div class="header">
						<h2><?php esc_html_e( 'Pro Screenshot', 'catch-breadcrumb' ); ?></h2>
					</div> <!-- .Header -->

					<div class="content">
						<ul class="catchp-lists">
							<li><img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/features-1.jpg' ); ?>"></li>
							<li><img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/features-2.jpg' ); ?>"></li>
						</ul>
					</div> <!-- .Content -->
				</div> <!-- #pro-screenshot -->
			</div><!---dashboard---->

				<div id="features" class="wpcatchtab save">
					<div class="content-wrapper col-3">
						<div class="header">
							<h3><?php esc_html_e( 'Features', 'catch-breadcrumb' ); ?></h3>
						</div><!-- .header -->
						<div class="content">
							<ul class="catchp-lists">
								<li>
									<strong><?php esc_html_e( 'Shortcode', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'Catch Breadcrumb, the new breadcrumb WordPress plugin supports shortcode. With the plugin activated, you will be provided with the shortcode option. Simply copy and paste the provided shortcode directly into any post or page and enjoy displaying your breadcrumb trail. ', 'catch-breadcrumb' ); ?></p>
								</li>
								<li>
									<strong><?php esc_html_e( 'Breadcrumb Selector', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'You can display your breadcrumb trail wherever you want on your website. On the Breadcrumb Selector field, you need to enter the website position. The breadcrumb trails will be displayed gracefully right above the mentioned website section. ', 'catch-breadcrumb' ); ?></p>
								</li>

								<li>
									<strong><?php esc_html_e( 'Incredible Support', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'We have a great line of support team and support documentation. You do not need to worry about how to use the plugins we provide, just refer to our Tech Support Forum. Further, if you need to do advanced customization to your website, you can always hire our customizer!', 'catch-breadcrumb' ); ?></p>
								</li>

								<li>
									<strong><?php esc_html_e( 'Light Weight', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'Catch Breadcrumb, a simple breadcrumb plugin for WordPress is extremely lightweight. It means you will not have to worry about your website getting slower because of the plugin. ', 'catch-breadcrumb' ); ?></p>
								</li>

								<li>
									<strong><?php esc_html_e( 'Responsive Design', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'Catch Breadcrumb comes with a responsive design, which means the breadcrumb trails will look elegant on all devices. ', 'catch-breadcrumb' ); ?></p>
								</li>

								<li>
									<strong><?php esc_html_e( 'Compatible With All WordPress Themes', 'catch-breadcrumb' ); ?></strong>
									<p><?php esc_html_e( 'Catch Breadcrumb has been crafted in a way that supports all the themes on WordPress. The plugin functions smoothly on every WordPress theme.', 'catch-breadcrumb' ); ?></p>
								</li>
							</ul>
						</div><!-- .content -->
					</div><!-- content-wrapper -->
				</div> <!-- Featured -->


				<div id="premium-extensions" class="wpcatchtab  save">
					<div class="about-text">
					<h2><?php esc_html_e( 'Get Catch Breadcrumb Pro -', 'catch-breadcrumb' ); ?> <a href="<?php esc_url( 'https://catchplugins.com/plugins/catch-breadcrumb-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Get It Here!', 'catch-breadcrumb' ); ?></a></h2>
						<p><?php esc_html_e( 'You are currently using the free version of Catch Breadcrumb.', 'catch-breadcrumb' ); ?><br />
						<a href="<?php esc_url( 'https://catchplugins.com/plugins/' ); ?>" target="_blank"><?php esc_html_e( 'If you have purchased from catchplugins.com, then follow this link to the installation instructions (particularly step 1).', 'catch-breadcrumb' ); ?></a></p>
				</div>

				<div class="content-wrapper">
					<div class="header">
						<h3><?php esc_html_e( 'Compare Table', 'catch-breadcrumb' ); ?></h3>
					</div><!-- .header -->
						<div class="content">

							<table class="widefat fixed striped posts">
								<thead>
									<tr>
										<th id="title" class="manage-column column-title column-primary"><?php esc_html_e( 'Features', 'catch-breadcrumb' ); ?></th>
										<th id="free" class="manage-column column-free"><?php esc_html_e( 'Free', 'catch-breadcrumb' ); ?></th>
										<th id="pro" class="manage-column column-pro"><?php esc_html_e( 'Pro', 'catch-breadcrumb' ); ?></th>
									</tr>
								</thead>

								<tbody id="the-list" class="ui-sortable">
									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Responsive Design', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Super Easy Setup', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Lightweight', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Separator', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Shortcode', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Selector', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Enable on Home Page', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-green">&#10003;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Font Size', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Background Color', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Text Color', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Separator Color', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Border Color', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Border Style', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Font Family', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Padding Top and Bottom ', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Margin Right and left', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Border Thickness and Raduis', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Upload Home Icon', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Width', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Breadcrumb Font Style', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

									<tr class="iedit author-self level-0 type-post status-publish format-standard hentry">
										<td>
											<strong><?php esc_html_e( 'Box shadow Options', 'catch-breadcrumb' ); ?></strong>
										</td>
										<td class="column column-free"><div class="table-icons icon-red">&#215;</div></td>
										<td class="column column-pro"><div class="table-icons icon-green">&#10003;</div></td>
									</tr>

								</tbody>
							</table>
						</div><!--content---->
					</div><!---content-wrapper--->
				</div>
				</form><!-- breadcrumb-main -->
			</div><!-- .catchp_widget_settings -->

			<?php require_once plugin_dir_path( dirname( __FILE__ ) ) . '/partials/sidebar.php'; ?>

	</div><!---catch-content-wrapper---->

	<?php require_once plugin_dir_path( dirname( __FILE__ ) ) . '/partials/footer.php'; ?>

</div><!-- .wrap -->
