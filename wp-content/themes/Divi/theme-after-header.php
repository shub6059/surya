<?php
/**
 * Template partial used to add content to the page in Theme Builder.
 * Duplicates partial content from header.php in order to maintain
 * backwards compatibility with child themes.
 */

if ( et_builder_is_product_tour_enabled() || is_page_template( 'page-template-blank.php' ) ) {
	return;
}
?>
<?php echo do_shortcode( '[catch-breadcrumb]' );?>
<div id="et-main-area">
	<?php
	/**
	 * Fires after the header, before the main content is output.
	 *
	 * @since 3.10
	 */
	do_action( 'et_before_main_content' );
	?>
	
<style>	
#catch-breadcrumb{
/* padding-top: 25%;
position: absolute;
z-index: 9;
margin-left: 64px; */
}
.entry-breadcrumbs { text-align:left; margin-left: 12px; }
@media screen and (max-width: 880px) {
#catch-breadcrumb{
/*padding-top: 55%;*/
margin-left: 7px;	
}
.m-phone {
display: flex !important;
justify-content: center;
width: 35px;
padding: 7px;
height: 35px;
top: 18px;
position: fixed;
right: 120px;
background: #e63a6b;
border-radius: 7px;
z-index: 999;
}
.hide-header {
   margin-top: 0px!important;
}	
.et_pb_row_0_tb_header.et_pb_row{ padding-left: 0px !important; padding-right: 0px !important; }
}	

.m-phone{
display: none;
}	
.mrtag-bot-span{display: none;}	
</style>

<div class="m-phone"><a onclick="gtag('event', 'Click', { 'event_category' : 'Contact no', 'event_label' : 'Call Lead'});" href="tel:+91 8828828100">
                        <img src="http://suryahospitals.com/wp-content/uploads/2023/04/icon-phone.png" alt=""></a></div>	
	