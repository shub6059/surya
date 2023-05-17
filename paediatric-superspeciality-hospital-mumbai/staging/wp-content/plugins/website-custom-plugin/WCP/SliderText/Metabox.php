<?php
function rm_register_meta_box() {
    add_meta_box( 'profile_result_video', 'Profile result video', 'profile_result_video_adminhtml', 'profile_result', 'advanced', 'high' );
}
add_action( 'add_meta_boxes', 'rm_register_meta_box');

function profile_result_video_adminhtml( $post ) {
	$url         = admin_url( 'admin-ajax.php' );
	$nonce_files = wp_nonce_field( '_profile_result_video_nonce', 'profile_result_video_nonce' );
	$video_url = get_post_meta( $post->ID, "video_url", true);
	?>
    <?php if($video_url){ ?>
    	Uploaded video link : <strong><?php echo home_url().$video_url?></strong><br><br>
    <?php } ?>
    <div id="dropzone-wordpress">
    	<div action="<?php echo $url?>" class="dropzone needsclick dz-clickable" id="dropzone-wordpress-form">
			<?php echo $nonce_files?>
			<div class="dz-message needsclick">
				Drop files here or click to upload.<br>
				<?php if($video_url){ ?>
					<span class="note needsclick">Upload a new Video to replace with old.</span>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php
}

add_action( 'admin_enqueue_scripts', 'dropzonejs_enqueue_scripts' );
function dropzonejs_enqueue_scripts() {

	wp_enqueue_script(
		'dropzonejs',
		'https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js',
		array(),
		'1.0'
	);
	wp_enqueue_script(
		'customdropzonejs',
		WCP_PLUGIN_URL.'/js/customize_dropzonejs.js',
		array( 'dropzonejs' ),
		'1.0'
	);
	wp_enqueue_style(
		'dropzonecss',
		'https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.css',
		array(),
		'1.0'
	);
	wp_enqueue_script(
		'dataTable',
		WCP_PLUGIN_URL.'/js/jquery.dataTables.min.js',
		array( 'jquery' ),
		'1.0'
	);
	wp_enqueue_style(
		'dataTables-css',
		WCP_PLUGIN_URL.'/css/jquery.dataTables.min.css',
		array(),
		'1.0'
	);
}



//add_action( 'wp_ajax_nopriv_submit_dropzonejs', 'dropzonejs_upload' ); //allow on front-end
add_action( 'wp_ajax_submit_dropzonejs', 'dropzonejs_upload' );

function dropzonejs_upload() {
	if(!empty($_FILES) && wp_verify_nonce( $_POST['profile_result_video_nonce'], '_profile_result_video_nonce' ) ) {
		$postid = $_POST['postid'];
		$oldvideopath = get_post_meta($postid, "video_url", true);
		$uploadfolder = WP_CONTENT_DIR. '/profilevideo/';
		mkdir($uploadfolder);
		
		$filename = $_FILES["file"]["name"];
		$filename = strtolower($filename) ; 
		$exts = split("[/\\.]", $filename) ; 
		$n = count($exts)-1; 
		$exts = $exts[$n];
	
		$newname = time() . rand(); // Create a new name
		$filename = $newname.'.'.$exts;
		$filepath = $uploadfolder . $filename;

		if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
            update_post_meta($postid, "video_url", "/wp-content/profilevideo/".$filename);
			if( $oldvideopath ){
				$path = get_home_path().$oldvideopath;
				unlink($path);	
			}
        }
	}
	exit;
}