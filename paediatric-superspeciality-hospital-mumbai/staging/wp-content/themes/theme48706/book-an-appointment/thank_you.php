

<?php /* Template Name: Thank You */ ?>
<?php get_header(); ?>



<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
						<div style="text-align: center;">
							<h2>Thank You Very Much.</h2>
							<h3>Your Appointment/Query Has Been Received By Us And Our Representative Will Connect With You Soon</h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
