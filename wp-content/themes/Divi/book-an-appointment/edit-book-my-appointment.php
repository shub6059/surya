<?php /* Template Name: Edit Book An Appointment */ ?>
<?php get_header(); ?>
<script type="text/javascript">
    
function rmDoc(id, table) {
    if (id == "" || table == "") {
        alert('Error');
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("docs").innerHTML = this.responseText;
                alert("Deleted Successfully");
                location.reload();
            }
        };
        xmlhttp.open("GET","/remove-doctor?id="+id+"&from="+table,true);
        xmlhttp.send();
    }   
}
</script>
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
                    
                    
                    <div>
                        <table class="table table-responsive table-hover table-striped table-bordered">
                            <tr>
                                <th>Sr. No</th>
                                <th>City</th>
                                <th>Speciality</th>
                                <th>Sub - Speciality</th>
                                <th>Doctor</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php 
                                global $wpdb; 
                                $sql = "SELECT * FROM wp_custom_doctors ORDER bY city"; 
                                $docs = $wpdb->get_results($sql,ARRAY_A); 
                            ?>
                            <?php if($docs): $count=1; foreach($docs as $doc): ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo ucwords(strtolower($doc['city'])) ;?></td>
                                <td><?php echo ucwords(strtolower($doc['speciality'])); ?></td>
                                <td><?php echo ucwords(strtolower($doc['sub_speciality'])); ?></td>
                                <td><?php echo ucwords(strtolower($doc['name'])); ?></td>
                                <td><!-- <a href="/edit?id=<?php #echo $doc['id']; ?>"> --><i class="fa fa-pencil btn" style="background: green;color:white"></i><!-- </a> --></td>
                                <td><i onclick="rmDoc(<?php echo $doc['id'].", 'wp_custom_doctors'" ?>)" class="fa fa-trash btn" style="background: #c70f0f;color:white"></i></td>
                            </tr>
                        <?php endforeach; else: echo '<script type="text/javascript">window.location.href="/wp-login.php";</script>'; endif; ?>
                        </table>
                    </div>

                    <br/>
                    <?php else: ?>
                    <script type="text/javascript">window.location.href="/wp-login.php";</script>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>