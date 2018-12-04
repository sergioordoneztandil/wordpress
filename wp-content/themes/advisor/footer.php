<?php

global $advisor_options;
$logo_url_img = $advisor_options['advisor-header-logo']['url'];

 $args = array(
    'post_type' 		=> 'office',
    'orderby'  		 	=> 'office-type',
    'order'     		=> 'ASC',
);

$office = new WP_Query( $args );


$office_category = get_terms ('office-type');

if ( ! empty( $advisor_options['advisor-footer-copyrights']) ) {
    $footer_copyrights = $advisor_options['advisor-footer-copyrights'];
} else {
   $footer_copyrights = 'Acaguaca';
}
?>
<section class="prefooter">
    <div class="row">
        <div class="footer_box col-md-3">
            <img class="logo" src="<?php echo($logo_url_img) ?>" alt="Teracode">
        </div>
        <div class="footer_box col-md-3">
<?php
$current_office_type = '';
while ( $office->have_posts() ) : $office->the_post();
    $custom_fields = get_post_custom(get_the_ID());
    $office_location = $custom_fields['office_location'][0];
    $office_description = $custom_fields['office_detail'][0];
    $terms = wp_get_post_terms( get_the_ID(), 'office-type' );
    foreach($terms as $term_single) {
        $office_type = $term_single->name;
    }
    
    if($office_type != $current_office_type) {
        if($current_office_type != '') {
    ?>
        </div>
		<div class="footer_box col-md-3">
    <?php
        }
        $current_office_type = $office_type;
    ?>
        <h4><?php _e( $office_type , 'advisor-core'); ?></h4>
    <?php
    }
?>          
            <article>
                <h5><?php _e( $office_location , 'advisor-core'); ?></h5>
                <?php _e( $office_description , 'advisor-core'); ?>
            </article>
<?php						
endwhile;
wp_reset_postdata();
?>
        </div>
        <div class="footer_box col-md-3 contact">
            <h4>Connect with us</h4>
            <?php if( $advisor_options['advisor-linkedin-url'] != '' ) { ?><a href="<?php echo esc_url( $advisor_options['advisor-linkedin-url'] ); ?>"><i class="fab fa-linkedin-in"></i></a><?php } ?>
            <?php if( $advisor_options['advisor-twitter-url'] != '' ) { ?><a href="<?php echo esc_url( $advisor_options['advisor-twitter-url'] ); ?>"><i class="fab fa-twitter"></i></a><?php } ?>
            
            <?php if( $advisor_options['advisor-footer-email'] != '' ) { ?><a href="mailto:<?php echo esc_url( $advisor_options['advisor-footer-email'] ); ?>"><i class="fas fa-envelope"></i></a><?php } ?>
            
            <?php if( $advisor_options['advisor-facebook-url'] != ''  ) { ?><a href="<?php echo esc_url( $advisor_options['advisor-facebook-url'] ); ?>"><i class="fab fa-facebook" ></i></a><?php } ?>
            <?php if( $advisor_options['advisor-google-url'] != '' ) { ?><a href="<?php echo esc_url( $advisor_options['advisor-google-url'] ); ?>"><i class="fab fa-google-plus"></i></a><?php } ?>
            <?php if( $advisor_options['advisor-instagram-url'] != '' ) { ?><a href="<?php echo esc_url( $advisor_options['advisor-instagram-url'] ); ?>"><i class="fab fa-instagram" ></i></a><?php } ?>
            
                                    
        </div>
    </div>
</section>
<footer>
        <span><?php _e($footer_copyrights) ?></span>|<span><a href="#">Privacy Policy</a></span>|<span><a href="#">Site Map</a></span>
</footer>

        <?php wp_footer(); ?>

    </body>
</html>
