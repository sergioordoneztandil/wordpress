<?php
/**
 * The template for displaying the header
 * @package WordPress
 * @subpackage Advisor
 * @since Advisor 1.0
 */
 ?>
<!-- HERDER -->

<?php
global $advisor_options , $post;

if ( class_exists( 'Redux' ) ) {

	if ( !empty( $advisor_options['advisor-header-layout']) ) {

		 $header_style = $advisor_options['advisor-header-layout'];

	} else {

		$header_style = 'one';

	}
	if ( $advisor_options['advisor-enable-tob-bar'] == true ) {

		 $enable_top_bar = true;

	} else {

		$enable_top_bar = false;
	}

	if ( !empty( $advisor_options['advisor-header-logo']['url'] ) ) {

		$logo_url_img = $advisor_options['advisor-header-logo']['url'];
		$logo_image_id = $advisor_options['advisor-header-logo']['id'];
		$logo_scroll_url_img = $advisor_options['advisor-header-logo-scroll']['url'];
		$logo_scroll_image_id = $advisor_options['advisor-header-logo-scroll']['id'];
		$advisor_header_video = $advisor_options['advisor-header-video']['url'];

		$advisor_header_video_title = $advisor_options['advisor-header-video-title'];
		$advisor_header_video_subtitle = $advisor_options['advisor-header-video-subtitle'];

		$logo_alt = get_post_meta( $logo_image_id, '_wp_attachment_image_alt', true);

		 if ( is_ssl() ) {

	    	$logo_url_img = str_replace( 'http://', 'https://', $logo_url_img );

	     }
	} else {

		$logo_url_img = '';
	}
	if ( !empty( $advisor_options['advisor-header-tagline']) ) {

		 $header_tagline = $advisor_options['advisor-header-tagline'];

	} else {

		$header_tagline = '';

	}
	if ( !empty( $advisor_options['advisor-header-phone']) ) {

		 $header_phone = $advisor_options['advisor-header-phone'];

	} else {

		$header_phone = '';
	}
	if ( !empty( $advisor_options['advisor-header-phone-label']) ) {

		 $header_phone_label = $advisor_options['advisor-header-phone-label'];

	} else {

		$header_phone_label = '';

	}
	if ( !empty( $advisor_options['advisor-header-phone-call-us']) ) {

		 $header_phone_call_us = $advisor_options['advisor-header-phone-call-us'];

	} else {

		$header_phone_call_us = '';

	}
	if ( !empty( $advisor_options['advisor-header-email']) ) {

		 $header_email = $advisor_options['advisor-header-email'];

	} else {

		$header_email = '';
	}
	if ( !empty( $advisor_options['advisor-header-address']) ) {

		 $header_address = $advisor_options['advisor-header-address'];

	} else {

		$header_address = '';
	}
	if ( !empty( $advisor_options['advisor-header-company']) ) {

		 $header_company = $advisor_options['advisor-header-company'];

	} else {

		$header_company = '';
	}
	if ( !empty( $advisor_options['advisor-header-office-time']) ) {

		 $header_office = $advisor_options['advisor-header-office-time'];

	} else {

		$header_office = '';
	}
	if ( !empty( $advisor_options['advisor-header-working-days']) ) {

		 $working_days = $advisor_options['advisor-header-working-days'];

	} else {

		$working_days = '';

	}
	if ( !empty( $advisor_options['advisor-get-a-quote']) ) {

		 $get_quote_url = esc_url( $advisor_options['advisor-get-a-quote'] );

	} else {

		$get_quote_url = '';

	}
	if ( !empty( $advisor_options['advisor-get-a-label']) ) {

		 $get_quote_label = esc_html( $advisor_options['advisor-get-a-label'] );

	} else {

		$get_quote_label = '';

	}
	if ( $advisor_options['advisor-enable-page-loader'] == true ) {

		 $page_loader = esc_html( $advisor_options['advisor-enable-page-loader'] );

	} else {

		$page_loader = false;

	}
	if ( !empty( $advisor_options['advisor-header-menu-background']) ) {

		 $menu_background_color = $advisor_options['advisor-header-menu-background'];

	} else {

		$menu_background_color = '';
	}

	if ( !empty( $advisor_options['advisor-header-social-icons']) ) {

		 $show_social_icons = $advisor_options['advisor-header-social-icons'];

	} else {

		$show_social_icons = 0;
	}

} else {

	$header_style = 'one';
	$enable_top_bar = true;
	$logo_url_img = '';
	$header_email = esc_html__('support@brighthemes.com' , 'advisor' );
	$header_tagline = esc_html__('We have over 15 years of experience' , 'advisor' );
	$header_phone = esc_html__( '+92123456796' , 'advisor' );
	$header_address = esc_html__('786 South Park Avenue' , 'advisor' );
	$header_company = esc_html__('Manhattan Hall,' , 'advisor' );
	$working_days = esc_html__('Mon to Fri' , 'advisor' );
	$header_office = esc_html__('08:00 - 16:30' , 'advisor' );
	$get_quote_url = '';
	$get_quote_label = '';
	$page_loader = true;
	$menu_background_color = '';
	$show_social_icons = 0;

}
?>
    <header id="header" >
		<div class="logo_container">
			<?php if( !empty( $logo_url_img ) ) { ?>
				<img class="logo" src="<?php echo($logo_url_img) ?>" alt="Teracode">
				<img class="logo_scrolled" src="<?php echo($logo_scroll_url_img) ?>" alt="Teracode">
			<?php } ?>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>				
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php advisor_render_main_menu(); ?>
			</div>
		</nav>
		<div class="request_demo">
			<label>Request a Demo</label>
		</div>
	</header>
	<div class="video_header">					
		<video autoplay muted loop id="headerVideo">
		
			<source src="<?php echo($advisor_header_video) ?>" type="video/mp4">
		</video>
		<div class="ent">
			<h2 class="title">
				<?php echo($advisor_header_video_title) ?>
				<span class="description">
				<?php echo($advisor_header_video_subtitle) ?>
				</span>
			</h2>
		</div>
	</div>
