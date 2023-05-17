<?php /* Template Name: Edit Doctor */ ?>

<?php get_header(); ?>
<?php $id = $_GET['id']; $sql = "SELECT * FROM wp_custom_doctors WHERE id = ".$id;  ?>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                        <?php get_template_part("static/static-title"); ?>
                    </div>
                </div>

                <?php 
                    $current_user = wp_get_current_user();
                    if (user_can( $current_user, 'administrator' )): 
                        // user is an admin
                        include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
                        include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
                        include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php';
                    ?>
                    <br/>
                    <?php 
	                    global $wpdb; 
	                    
	                    $details = $wpdb->get_results($sql,ARRAY_A); 
                     ?>
					<?php $stmt = "SELECT * FROM wp_custom_doctors"; $comp = $wpdb->get_results($stmt,ARRAY_A); ?>
                     <?php if ($comp):?>	
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
                    	
                    <div>
                    	<?php  foreach($comp as $com): ?>
                    	<div>
	                    	<select class="span4">
	                    		<option value=""><?php #echo $com['city']; ?></option>
	                    	</select>
	                    </div>

	                    <div>
	                    	<select class="span4">
	                    		<option value=""><?php echo $com['speciality']; ?></option>
	                    	</select>
	                    </div>

	                    <div>
	                    	<select class="span4">
	                    		<option value=""><?php echo $com['sub_speciality']; ?></option>
	                    	</select>
	                    </div>
	                	<?php endforeach; ?>
	                    <?php  foreach($details as $detail): ?>
	                    <div>
                     		<input type="text" class="span4" name="name" value="<?php echo $detail['name']; ?>">
                     	</div>
                    </div>

                    <br/>
                    <div class="col-lg-12 pm-center">
                    <button type="submit" class="pm-form-submit-btn" value="Update" name='submit' style="padding:10px;background:#315d87;color:white;border-radius: 5px;border:none" > Update </button>
                    </div>
                </form>
            <?php endforeach;endif; ?>
                    <?php else: ?>
                    <script type="text/javascript">window.location.href="/wp-login.php";</script>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>