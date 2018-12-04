<?php

/**
 * Advisor functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filte architecturer or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @since Advisor 1.0
 */

/**
 * Advisor only works in WordPress 4.4 or later.
 */
 if ( ! class_exists( 'Advisor_walker_nav_menu' )) {

	require_once( get_template_directory()  . '/includes/advisor-menu.php' );

}
if ( ! class_exists( 'Advisor_walker_comments' )) {

 require_once( get_template_directory()  . '/includes/advisor-comments.php' );

}

require_once( get_template_directory()  . '/includes/post-type-fields.php' );
require_once ( get_template_directory()  . '/includes/advisor-banner.php' );
//Adisor Theme Options

if ( ! isset( $redux_demo ) && file_exists( get_template_directory()  . '/includes/options/advisor-config.php' )) {

	require_once( get_template_directory()  . '/includes/options/advisor-config.php' );

}

//Advisor widgets

require_once( get_template_directory()  . '/includes/register-sidebars.php' );
require_once( get_template_directory()  . '/includes/advisor-check-months-value-count.php' );

require_once( get_template_directory()  . '/includes/widgets/advisor-useful-links.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-twitter.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-newsletter.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-categories.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-recent-posts.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-tags.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-search.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-services-list.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-single-testimonial.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-compnay-presentation.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-social-links.php' );
require_once( get_template_directory()  . '/includes/widgets/advisor-get-in-touch.php' );

//Advisor Shortcodes

/* ================ TGMPA Integration ============== */
require_once( get_template_directory() . '/includes/advisor_tgma.php');

//Custom Inline JS
require_once( get_template_directory()  . '/includes/custom-inline-script.php' );

//Custom Inline CSS
require_once( get_template_directory()  . '/includes/custom-inline-style.php' );

//user profile pciture
require_once( get_template_directory()  . '/includes/user-avatar.php' );

// Advisor Theme Setup
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own advisor_setup() function to override in a child theme.
 *
 * @since Advisor 1.0
 */
if ( ! function_exists( 'advisor_theme_setup' ) ) :

  function advisor_theme_setup() {
  	/*
  	 * Make theme available for translation.
  	 * Translations can be filed in the /languages/ directory.
  	 * If you're building a theme based on Advisor, use a find and replace
  	 * to change 'advisor' to the name of your theme in all the template files
  	 */
  	//load_theme_textdomain( 'advisor', get_template_directory() . '/languages' );

  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background');
  	/*
  	 * Let WordPress manage the document title.
  	 * By adding theme support, we declare that this theme does not use a
  	 * hard-coded <title> tag in the document head, and expect WordPress to
  	 * provide it for us.
  	 */
  	 add_theme_support( 'title-tag' );

  	/*
  	 * Enable support for Post Thumbnails on posts and pages.
  	 *
  	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
  	 */
    add_theme_support( 'post-thumbnails');
  	add_theme_support( 'post-thumbnails' , array( 'post' ,'testimonial', 'case' , 'team','page') );
  	set_post_thumbnail_size( 100,100 );
  	set_post_thumbnail_size( 500,450 );
    set_post_thumbnail_size( 800,400 );
    set_post_thumbnail_size( 540,370 );
    set_post_thumbnail_size( 225,160 );
    set_post_thumbnail_size( 370,300 );
    set_post_thumbnail_size( 570,630 );
    set_post_thumbnail_size( 555,491 );
    set_post_thumbnail_size( 289,259 );
    set_post_thumbnail_size( 750,421 );
    set_post_thumbnail_size( 555, 433 );

    add_image_size( 'advisor-team-carousel-img-style3', 270, 263, true );
    add_image_size( 'advisor-team-grid-img-style2', 360, 351, true );
    add_image_size( 'advisor-team-grid-style2-pop-up-img', 322, 313, true );
    add_image_size( 'advisor_team-member-img', 461, 437, true );
    add_image_size( 'advisor_latest-news-style2-img', 360, 190 , true );


    ///add image size.

    add_image_size( 'advisor-background', 1900, 800 );
  	/*
  	 * Switch default core markup for search form, comment form, and comments
  	 * to output valid HTML5.
  	 */
  	add_theme_support( 'html5', array(

  		'search-form',
  		'comment-form',
  		'comment-list',
  		'gallery',
  		'caption',

  	) );

    //add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
  	/*
  	 * Enable support for Post Formats.
  	 *
  	 * See: https://codex.wordpress.org/Post_Formats
  	 */
  	add_theme_support( 'post-formats', array(

  		'standard',
      'video',
      'link',
      'gallery',
      'aside',
      'image',
      'quote',
      'status',
      'audio',
      'chat'

  	) );-
    register_nav_menus( array( 'advisor-main-menu' => esc_html__( 'Main Menu', 'advisor' ) ) );
  	register_nav_menus( array( 'advisor-footer-menu' => esc_html__( 'Footer Menu', 'advisor' ) ) );

  	add_editor_style( 'assets/css/editor-styles.css' );

  	load_theme_textdomain( 'advisor', get_template_directory() . '/languages' );

  }

endif; // Advisor_setup

add_action( 'after_setup_theme', 'advisor_theme_setup' );

if ( ! isset( $content_width ) ) { $content_width = 1140; }

function advisor_custom_wp_admin_style() {

        wp_register_style( 'advisor_wp_admin_css', get_template_directory_uri() . '/css/admin.css', false, '1.0.0' );
        wp_enqueue_style( 'advisor_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'advisor_custom_wp_admin_style' );

//Advisor scrips and CSS

function advisor_bta_scripts() {

  global $advisor_options;
   $media = 'all';

	wp_enqueue_style( 'advisor-style', get_template_directory_uri() . '/style.css', null, null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array( 'advisor-style' ) , 1.0 , false , $media);
  wp_enqueue_style( 'timelineslider', get_template_directory_uri().'/css/timelineslider.css',array( 'advisor-style' ) , 1.0 , false , $media);

	wp_enqueue_style( 'advisor-plugins', get_template_directory_uri().'/css/plugins.css',array( 'advisor-style' ) , 1.0 , false , $media);

  if( !empty($advisor_options['advisor-accent-type']) && $advisor_options['advisor-accent-type'] == 'default-colors' )  {

    $color_name = $advisor_options['advisor-accent-select'] ;
    wp_enqueue_style( 'advisor-colors', get_template_directory_uri() . '/css/color-'.$color_name.'.css', array( 'advisor-style' ) , 1.0 , false , $media);

  } else {

    wp_enqueue_style( 'advisor-colors', get_template_directory_uri() . '/css/color-default.css', array( 'advisor-style' ) , 1.0 , false , $media);

  }
  if( !empty($advisor_options['advisor-icon-select'] ) ) {

    $color_icon = $advisor_options['advisor-icon-select'] ;

    wp_enqueue_style( 'advisor-icons', get_template_directory_uri() . '/css/icon-'.$color_icon.'.css', array( 'advisor-style' ) , 1.0 , false , $media);

  }


	wp_enqueue_style( 'advisor-hero', get_template_directory_uri() . '/css/hero-slider.css', array( 'advisor-style' ) , 1.0 , false , $media );

	wp_enqueue_style( 'advisor-responsive', get_template_directory_uri() . '/css/responsive.css', array( 'advisor-style' ) , 1.0 , false , $media);


  /* Cusotm CSS Updation */
  wp_enqueue_style( 'bootstrap-select-css', get_template_directory_uri() . '/css/bootstrap-select.min.css', array( 'advisor-style' ) , 1.0 , false , $media);
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array( 'advisor-style' ) , 1.0 , false , $media);

  wp_enqueue_style( 'copious-icon', get_template_directory_uri() . '/css/copious-icon.css', array( 'advisor-style' ) , 1.0 , false , $media);

	wp_enqueue_script( 'jquery', 'null', null, false );

	wp_enqueue_script( 'boostrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'bootsnav-js', get_template_directory_uri() . '/js/bootsnav.js', array('jquery') , 1.0, true);

	wp_enqueue_script( 'advisor-counter', get_template_directory_uri() . '/js/counter.js', array('jquery') , 1.0, true );

	wp_enqueue_script( 'advisor-common', get_template_directory_uri() . '/js/common.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'advisor-owl-carousel', get_template_directory_uri() . '/js/owl-carousel.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'timelineslider', get_template_directory_uri() . '/js/timelineslider.js', array('jquery') , 1.0 , false);

  wp_enqueue_script( 'advisor-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'advisor-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery') , 1.0 , false);

	wp_enqueue_script( 'advisor-h-slider', get_template_directory_uri() . '/js/hero-slider.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'advisor-select-box', get_template_directory_uri() . '/js/select-box.js', array('jquery') , 1.0, true);

	wp_enqueue_script( 'advisor-modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery') , 1.0 , false);

  wp_enqueue_script( 'advisor-bootstrap-select', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'advisor-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery') , 1.0, true);

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/swiper.min.js', array ( 'jquery' ), 1.1, true);

  if( $advisor_options['enable-charts-script-on-all'] ) {

    wp_enqueue_script( 'advisor-canvas', get_template_directory_uri() . '/js/canvasjs.min.js', '' , 1.0 , false);

  } else {

    if( is_page_template( 'template-services.php' ) ) {

      wp_enqueue_script( 'advisor-canvas', get_template_directory_uri() . '/js/canvasjs.min.js', '' , 1.0 , false);

    }

  }
  if( !empty ( $advisor_options['bta-google-map-api-key'] ) ) {

    $api_key = 'key=' . $advisor_options['bta-google-map-api-key'];

  } else {

    $api_key = '';

  }
  
  /* pie charts */
  wp_enqueue_script( 'google-charts', 'https://www.gstatic.com/charts/loader.js', '' , 1.0 , false);

  if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) {

    wp_enqueue_script( 'comment-reply' );

  }
  wp_register_style( 'advisor_ie_html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '' , false, '3.7.2' );
  wp_enqueue_style( 'advisor_ie_html5shiv');
  wp_style_add_data( 'advisor_ie_html5shiv', 'conditional', 'lt IE 9' );

  wp_register_style( 'advisor_ie_respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '' , false, '1.4.2' );
  wp_enqueue_style( 'advisor_ie_respond');
  wp_style_add_data( 'advisor_ie_respond', 'conditional', 'lt IE 9' );

  //updated
  wp_enqueue_script( 'advisor-progressbar-js', get_template_directory_uri() . '/js/progressbar.js', array('jquery') , 1.0 , false);

}
add_action( 'wp_enqueue_scripts', 'advisor_bta_scripts' );

/* add google fonts */

function advisor_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'advisor' ) ) {
        $font_url = add_query_arg( 'family', 'Bai+Jamjuree:200,300,400,500,600,700' , '//fonts.googleapis.com/css' );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function advisor_fonts() {

    wp_enqueue_style( 'google-fonts', advisor_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'advisor_fonts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Advisor 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function advisor_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.

  global $advisor_options;
  $header_three = '';
  if( $advisor_options['advisor-header-layout'] == 'three' ) {

    $header_three = 'three';
  }
	$classes[] = 'fixed-header';
  $classes[] = $header_three;

	return $classes;
}

add_filter( 'body_class', 'advisor_body_classes' );

/**
 * Adds Main Menu
 *
 * @since Advisor 1.0
 *
 */
function advisor_render_main_menu() {

  if ( class_exists( 'Advisor_walker_nav_menu' )) {

    $walker_menu = new Advisor_walker_nav_menu();

  } else {

    $walker_menu = '';
  }
  $menu_args = array(

      'theme_location'  => 'advisor-main-menu',
      'container'       => false,
      'menu_class'      => 'navbar-nav',
      'echo'            => true,
      'fallback_cb'     => false,
      'depth'           => 4,
      'walker'          => $walker_menu,

    );

    wp_nav_menu($menu_args);
}


function advisor_render_main_menu_five() {

  if ( class_exists( 'Advisor_walker_nav_menu_five' )) {

    $walker_menu = new Advisor_walker_nav_menu_five();

  } else {

    $walker_menu = '';
  }
  $menu_args = array(

      'theme_location'  => 'advisor-main-menu',
      'container'       => false,
      'menu_class'      => '',
      'echo'            => true,
      'fallback_cb'     => false,
      'depth'           => 4,
      'walker'          => $walker_menu,

    );

    wp_nav_menu($menu_args);
}


function advisor_render_main_menu_seven() {

  if ( class_exists( 'Advisor_walker_nav_menu_seven' )) {

    $walker_menu = new Advisor_walker_nav_menu_seven();

  } else {

    $walker_menu = '';
  }
  $menu_args = array(

      'theme_location'  => 'advisor-main-menu',
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse  nav_bor_top advisor-header-seven',
      'container_id'    => 'navbar-menu',
      'menu_class'      => 'nav navbar-nav navbar-left',
      'echo'            => true,
      'fallback_cb'     => false,
      'depth'           => 4,
      'walker'          => $walker_menu,

    );

    wp_nav_menu($menu_args);
}


function advisor_render_main_menu_eight() {

  if ( class_exists( 'Advisor_walker_nav_menu_eight' )) {

    $walker_menu = new Advisor_walker_nav_menu_eight();

  } else {

    $walker_menu = '';
  }
  $menu_args = array(

      'theme_location'  => 'advisor-main-menu',
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse nav_bor_bot',
      'container_id'    => 'navbar-menu',
      'menu_class'      => 'nav navbar-nav navbar-right',
      'echo'            => true,
      'fallback_cb'     => false,
      'depth'           => 4,
      'walker'          => $walker_menu,

    );

    wp_nav_menu($menu_args);
}

function advisor_get_vimeo_thumb($vURL, $size = 'thumbnail_large') {

	$pieces = explode("/", $vURL);
	$id = end($pieces);

	if(get_transient('vimeo_' . $size . '_' . $id)) {

		$thumb_image = get_transient('vimeo_' . $size . '_' . $id);

	} else {


    $thumb_image = '';

    $request  = wp_remote_get( "https://vimeo.com/api/v2/video/" . $id . ".json" );
    if( is_array( $request ) ) {

    $response = wp_remote_retrieve_body( $request );
    $json = json_decode( $response );
		$thumb_image = $json[0]->$size;
		set_transient('vimeo_' . $size . '_' . $id, $thumb_image, 2629743);

    }
  }
	   return $thumb_image;
}

// Newsletter form submission with ajax

function advisor_newsletter_form_submission() {

    if ( wp_verify_nonce( $_POST['nonce'] ) && ! empty( $_POST['nl_name'] ) && ! empty( $_POST['nl_email'] ) ) {

			$subscriber_name = $_POST['nl_name'];
		  $subscriber_email = $_POST['nl_email'];

      $subscriber_post = array(

        'post_title' => wp_strip_all_tags($subscriber_name),
        'post_status' => 'publish',
        'post_type' => 'subscriber',
      );

      $email_query = new WP_Query();
      $email_query->query(array( 'post_type' => 'subscriber' , 'meta_key' => 'advisor_subscriber_email', 'meta_value' => $subscriber_email));
      if ( $email_query->have_posts() ){

        esc_html_e('oops! You are already subscribed.','advisor');
        return;

      }

      $post_id = wp_insert_post( $subscriber_post);
      update_post_meta(  $post_id , 'advisor_subscriber_email' , $subscriber_email);
      esc_html_e('You are succesfully subscribed.' , 'advisor');


  }
    die();
}

add_action( 'wp_ajax_advisor_newsletter_form_submission', 'advisor_newsletter_form_submission' );
add_action( 'wp_ajax_nopriv_advisor_newsletter_form_submission', 'advisor_newsletter_form_submission' );



//Basic VC setup measurements
add_action( 'vc_before_init', 'advisor_vcSetAsTheme', 10 );
function advisor_vcSetAsTheme() {

    vc_set_as_theme();
}
// get contact us page link

if ( ! function_exists( 'advisor_contact_us_page' ) ) {
	function advisor_contact_us_page() {

		$page_id = null;
		$contact_us_array = get_pages( array (
			'meta_key'   => '_wp_page_template',
			'meta_value' => 'template-contact-us.php'
		) );

		if ( $contact_us_array ) {

			$page_id = $contact_us_array[0]->ID;

		}

		return $page_id;

	}
}

//single template Banner

if ( ! function_exists( 'advisor_template_banner' ) ) {
	function advisor_template_banner( $args = '' ) {

    $page_src = '';
    $contact_page_id = advisor_contact_us_page();
    $page_src = esc_url( get_the_permalink( $contact_page_id ) );

    if( $args != null ) {

      if( isset( $args[ 'button_label']) && !empty( $args[ 'button_label'] ) ) {

        $button_label = $args[ 'button_label'];


      } else {

        $button_label = '';

      }
      if( isset( $args[ 'button_link']) && !empty( $args[ 'button_link'] ) ) {

        $button_link = $args[ 'button_link'];


      } else {

        if( !empty( $page_src )) {

          $button_link = $page_src;

        } else {

          $button_link = '';

        }
      }
      if( isset( $args[ 'enable_breadcrumbs']) ) {

        $enable_breadcrumbs = $args[ 'enable_breadcrumbs'];

      } else {

        $enable_breadcrumbs = 1;

      }
      if( isset( $args[ 'font_color']) && !empty( $args[ 'font_color'] ) ) {

        $font_color = $args[ 'font_color'];

      } else {

        $font_color = '';

      }
      if( isset( $args[ 'background_color']) && !empty( $args[ 'background_color'] ) ) {

        $background_color = $args[ 'background_color'];

      } else {

        $background_color = '';

      }
      if( isset( $args[ 'background_img']) && !empty( $args[ 'background_img'] ) ) {

        $background_img = $args[ 'background_img'];

      } else {

        $background_img = '';

      }

      echo advisor_page_banner( $button_label , $button_link , $enable_breadcrumbs , $font_color, $background_color, $background_img);

    } else {

	     echo advisor_page_banner( 'Contact us' , $page_src );

    }

	}
}

// advisor social circles

if ( ! function_exists( 'advisor_social_circles' ) ) {
  function advisor_social_circles(){

    global $advisor_options;

     ?>
    <ul class="social">
      <?php if ( !empty( $advisor_options['advisor-facebook-url']) ) { ?>

        <li class="animate bounceIn"><a href="<?php  echo esc_url( $advisor_options['advisor-facebook-url'] ); ?>" class="facebook"><i class="icon-facebook-1"></i></a></li>

        <?php } ?>
        <?php if ( !empty( $advisor_options['advisor-twitter-url'] ) ) { ?>

        <li class="animate bounceIn" data-delay="100"><a href="<?php echo esc_url( $advisor_options['advisor-twitter-url'] ); ?>" class="twitter"><i class="icon-twitter-1"></i></a></li>

        <?php } ?>
        <?php if ( !empty( $advisor_options['advisor-google-url'] ) ) { ?>

        <li class="animate bounceIn" data-delay="200"><a href="<?php echo esc_url( $advisor_options['advisor-google-url'] ); ?>" class="google-plus"><i class="icon-google"></i></a></li>

        <?php } ?>
        <?php if ( !empty( $advisor_options['advisor-linkedin-url'] ) ) { ?>

        <li class="animate bounceIn" data-delay="300"><a href="<?php echo esc_url( $advisor_options['advisor-linkedin-url'] ); ?>" class="linkedin"><i class="icon-linkedin3"></i></a></li>

        <?php } ?>

    </ul>

    <?php

    }
}

//breadcrumbs

if ( ! function_exists( 'advisor_breadcrumbs' ) ) {

function advisor_breadcrumbs(){

	$text['home']     = esc_html__( 'Home' , 'advisor' ); // text for the 'Home' link
	$text['category'] = __( 'Category / %s', 'advisor' ); // text for a category page
	$text['tax'] 	    = __( 'Taxonomy / %s', 'advisor' ); // text for a taxonomy page
	$text['search']   = __( 'Search Results for "%s" Query' , 'advisor' ); // text for a search results page
	$text['tag']      = __( 'Tag / %s', 'advisor' ); // text for a tag page
	$text['author']   = __( 'Articles Posted by %s' , 'advisor' ); // text for an author page
	$text['404']      = esc_html__( 'Error 404' , 'advisor' ); // text for the 404 page
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$showOnHome  = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter   = ' '; // delimiter between crumbs
	$before      = '<li>'; // tag before the current crumb
	$after       = '</li>'; // tag after the current crumb


  global $post,$wp_query;

	$homeLink = esc_url( home_url() ) . '/';
	$linkBefore = '<li>';
	$linkAfter = '</li>';
	$linkAttr = '';
	$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;

  echo '<ul class="breadcrumbs">';

	if ( is_front_page()) {

		if ($showOnHome == 1) echo '<li><a href="' . $homeLink . '">' . $text['home'] . '</a></li>';

	} else if (is_home() ) {

    $page_id = get_option( 'page_for_posts' );
    echo '<li><a href="' . $homeLink . '">' . $text['home'] . '</a></li>';
    echo $delimiter . '<li>' . $delimiter . get_the_title( $page_id ). '</li>';

  } else {

		echo  sprintf($link, $homeLink, $text['home']) . $delimiter;

		if ( is_category() ) {

			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {

				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;

			}
			echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

		} else if( is_tax() ){

			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo $cats;
			}
			echo $before . sprintf($text['tax'], single_cat_title('', false)) . $after;

		}elseif ( is_search() ) {

			echo $before . sprintf($text['search'], get_search_query()) . $after;

		} elseif ( is_day() ) {

			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {

			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {

			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {

  			if ( get_post_type() != 'post' ) {

  				$post_type = get_post_type_object(get_post_type());
  				$slug = $post_type->rewrite;
  				printf($link, $homeLink . '' . $slug['slug'] . '/', $post_type->labels->singular_name);
          $get_the_title = get_the_title();
  				if ($showCurrent == 1) echo $delimiter . $before . $get_the_title . $after;

  			} else {

  				$cat = get_the_category(); $cat = $cat[0];
  				$cats = get_category_parents($cat, TRUE, $delimiter);
  				if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
  				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
  				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
  				echo $cats;
  				if ($showCurrent == 1) echo $before . get_the_title() . $after;

  			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after ;

		} elseif ( is_attachment() ) {

			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
			$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
			echo $cats;
			printf($link, get_permalink($parent), $parent->post_title);

			if ($showCurrent == 1) {

        $get_the_title = get_the_title();
        echo $delimiter . $before . $get_the_title . $after;

      }

		} elseif ( is_page() && !$post->post_parent ) {

			if ($showCurrent == 1)  {

        $get_the_title = get_the_title();
        echo $before . $get_the_title . $after ;

      }

		} elseif ( is_page() && $post->post_parent ) {

			$parent_id  = $post->post_parent;
			$breadcrumbs = array();

			while ($parent_id) {

				$page = get_page($parent_id);
				$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
				$parent_id  = $page->post_parent;
			}

			$breadcrumbs = array_reverse( $breadcrumbs );
			for ($i = 0; $i < count( $breadcrumbs ); $i++) {

				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo $delimiter;

			}
			if ($showCurrent == 1) {

        $get_the_title = get_the_title();
        echo $delimiter . $before . $get_the_title . $after;
      }

		} elseif ( is_tag() ) {

      echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;


		} elseif ( is_author() ) {

	 		global $author;
			$userdata = get_userdata($author);
			echo $before . sprintf($text['author'], $userdata->display_name) . $after;

		} elseif ( is_404() ) {

			echo $before . $text['404'] . $after;

		}
		if ( get_query_var('paged') ) {

			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo esc_html__('Page' , 'advisor') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';

		}
		echo '</ul>';
	}
}
} // end advisor_breadcrumbs()


function advisor_case_image($imgID = '' , $class = '' , $delay = '', $size= '')
{

  $get_the_excerpt = get_the_excerpt( $imgID );
  ?>
  <div class="cases-item <?php echo $class; ?> animate bounceIn" data-delay="<?php echo $delay; ?>">
    <a href="<?php echo esc_url( wp_get_attachment_url( $imgID , $size ) ); ?>" class="fancybox" data-rel="gallery">
      <figure>
        <img src="<?php echo esc_attr( wp_get_attachment_url( $imgID , $size ) ); ?>" alt="">
        <figcaption>
          <div>
            <small><i class="fa fa-eye"></i><?php  echo $get_the_excerpt; ?></small>
          </div>
        </figcaption>
      </figure>
    </a>
  </div>

<?php
}

if ( ! function_exists( 'advisor_excerpt_read_more' ) ) {
  function advisor_excerpt_read_more( $more ) {

    return '..';

  }
}
add_filter( 'excerpt_more', 'advisor_excerpt_read_more' );

if ( ! function_exists( 'advisor_excerpt_length' ) ) {

	function advisor_excerpt_length( $length ) {
		return 26;
	}
}
add_filter( 'excerpt_length', 'advisor_excerpt_length', 999 );

if ( class_exists( 'Vc_Manager' ) ) {

add_action( 'vc_after_init', 'vc_after_init_actions' );

  function vc_after_init_actions() {

    $attributes = array(
        'type' => 'checkbox',
        'heading' => __( "Adjust Margins According To Advisor Theme.", "advisor" ),
        'param_name' => 'advisor_row',
        'weight'  => 20,
        'value' => '0',
        'description' => __( "Adjust Margins According To Advisor Theme For this Row Or Add from Page Options given in the bottom of page settings.", "advisor" )
    );
    vc_add_param( 'vc_row', $attributes ); // Note: 'vc_row' was used as a base for "Message box" element
  }

}

// add css for the visual composer elements
if ( ! function_exists( 'advisor_vc_row_element_css' ) ) {

	function advisor_vc_row_element_css( ) {


    if ( class_exists ( 'RW_Meta_Box' ) ) {

      global $post;

      $margin_top_1199    = rwmb_meta( 'advisor_1199_margin_top', $post->ID );
      $margin_right_1199  = rwmb_meta( 'advisor_1199_margin_right', $post->ID );
      $margin_bottom_1199 = rwmb_meta( 'advisor_1199_margin_bottom', $post->ID );
      $margin_left_1199   = rwmb_meta( 'advisor_1199_margin_left', $post->ID );

      $margin_top_992    = rwmb_meta( 'advisor_992_margin_top', $post->ID );
      $margin_right_992  = rwmb_meta( 'advisor_992_margin_right', $post->ID );
      $margin_bottom_992 = rwmb_meta( 'advisor_992_margin_bottom', $post->ID );
      $margin_left_992   = rwmb_meta( 'advisor_992_margin_left', $post->ID );

      $margin_top_769    = rwmb_meta( 'advisor_769_margin_top', $post->ID );
      $margin_right_769  = rwmb_meta( 'advisor_769_margin_right', $post->ID );
      $margin_bottom_769 = rwmb_meta( 'advisor_769_margin_bottom', $post->ID );
      $margin_left_769   = rwmb_meta( 'advisor_769_margin_left', $post->ID );

      $margin_top_481    = rwmb_meta( 'advisor_481_margin_top', $post->ID );
      $margin_right_481  = rwmb_meta( 'advisor_481_margin_right', $post->ID );
      $margin_bottom_481 = rwmb_meta( 'advisor_481_margin_bottom', $post->ID );
      $margin_left_481   = rwmb_meta( 'advisor_481_margin_left', $post->ID );

      $margin_top_480    = rwmb_meta( 'advisor_480_mobile_margin_top', $post->ID );
      $margin_right_480  = rwmb_meta( 'advisor_480_mobile_margin_right', $post->ID );
      $margin_bottom_480 = rwmb_meta( 'advisor_480_mobile_margin_bottom', $post->ID );
      $margin_left_480   = rwmb_meta( 'advisor_480_mobile_margin_left', $post->ID );


      $vc_row_css = '';

      if ( !empty ( $margin_top_1199 ) || !empty ( $margin_right_1199 ) || !empty ( $margin_bottom_1199 ) || !empty ( $margin_left_1199 )) {

        $vc_row_css .= '@media all and (min-width:1200px) { ';
        $vc_row_css .= '.advisor_page_row_layout { ';

          if ( !empty ( $margin_top_1199 ) ) {
            $vc_row_css .= "margin-top: ".$margin_top_1199."px;";
          }
          if ( !empty ( $margin_right_1199 ) ) {
            $vc_row_css .= "margin-right: ".$margin_right_1199."px !important;";
          }
          if ( !empty ( $margin_bottom_1199 ) ) {
            $vc_row_css .= "margin-bottom: ".$margin_bottom_1199."px;";
          }
          if ( !empty ( $margin_left_1199 ) ) {
            $vc_row_css .= "margin-left: ".$margin_left_1199."px !important;";
          }

      $vc_row_css .= '} }  ';

    }

    if ( !empty ( $margin_top_992 ) || !empty ( $margin_right_992 ) || !empty ( $margin_bottom_992 ) || !empty ( $margin_left_992 )) {

      $vc_row_css .= '@media all and (max-width:1199px) { ';
      $vc_row_css .= '.advisor_page_row_layout { ';

        if ( !empty ( $margin_top_992 ) ) {
          $vc_row_css .= "margin-top: ".$margin_top_992."px;";
        }
        if ( !empty ( $margin_right_992 ) ) {
          $vc_row_css .= "margin-right: ".$margin_right_992."px !important;";
        }
        if ( !empty ( $margin_bottom_992 ) ) {
          $vc_row_css .= "margin-bottom: ".$margin_bottom_992."px;";
        }
        if ( !empty ( $margin_left_992 ) ) {
          $vc_row_css .= "margin-left: ".$margin_left_992."px !important;";
        }

      $vc_row_css .= '} }  ';

    }

    if ( !empty ( $margin_top_769 ) || !empty ( $margin_right_769 ) || !empty ( $margin_bottom_769 ) || !empty ( $margin_left_769 )) {

      $vc_row_css .= '@media all and (max-width:991px) { ';
      $vc_row_css .= '.advisor_page_row_layout { ';

        if ( !empty ( $margin_top_769 ) ) {
          $vc_row_css .= "margin-top: ".$margin_top_769."px;";
        }
        if ( !empty ( $margin_right_769 ) ) {
          $vc_row_css .= "margin-right: ".$margin_right_769."px !important;";
        }
        if ( !empty ( $margin_bottom_769 ) ) {
          $vc_row_css .= "margin-bottom: ".$margin_bottom_769."px;";
        }
        if ( !empty ( $margin_left_769 ) ) {
          $vc_row_css .= "margin-left: ".$margin_left_769."px !important;";
        }

      $vc_row_css .= '} }  ';

    }

    if ( !empty ( $margin_top_481 ) || !empty ( $margin_right_481 ) || !empty ( $margin_bottom_481 ) || !empty ( $margin_left_481 )) {

      $vc_row_css .= '@media all and (max-width:768px) { ';
      $vc_row_css .= '.advisor_page_row_layout { ';

        if ( !empty ( $margin_top_481 ) ) {
          $vc_row_css .= "margin-top: ".$margin_top_481."px;";
        }
        if ( !empty ( $margin_right_481 ) ) {
          $vc_row_css .= "margin-right: ".$margin_right_481."px !important;";
        }
        if ( !empty ( $margin_bottom_481 ) ) {
          $vc_row_css .= "margin-bottom: ".$margin_bottom_481."px;";
        }
        if ( !empty ( $margin_left_481 ) ) {
          $vc_row_css .= "margin-left: ".$margin_left_481."px !important;";
        }

      $vc_row_css .= '} }  ';

    }

    if ( !empty ( $margin_top_480 ) || !empty ( $margin_right_480 ) || !empty ( $margin_bottom_480 ) || !empty ( $margin_left_480 )) {

      $vc_row_css .= '@media all and (max-width:480px) { ';
      $vc_row_css .= '.advisor_page_row_layout { ';

        if ( !empty ( $margin_top_480 ) ) {
          $vc_row_css .= "margin-top: ".$margin_top_480."px;";
        }
        if ( !empty ( $margin_right_480 ) ) {
          $vc_row_css .= "margin-right: ".$margin_right_480."px !important;";
        }
        if ( !empty ( $margin_bottom_480 ) ) {
          $vc_row_css .= "margin-bottom: ".$margin_bottom_480."px;";
        }
        if ( !empty ( $margin_left_480 ) ) {
          $vc_row_css .= "margin-left: ".$margin_left_480."px !important;";
        }

      $vc_row_css .= '} }  ';

    }

    return $vc_row_css;

    }
  }

}

    function advisor_change_submit_button($submit_field) {
    $changed_submit = str_replace ('name="submit" type="submit" id="submit"', 'name="submit" type="submit" id="submit" data-text="'.__('Submit', 'advisor').'"', $submit_field);
        return $changed_submit;
    }
    add_filter('comment_form_submit_field', 'advisor_change_submit_button');

    /*============  hex 2 rgba for Gradient Color ============*/
    if ( ! function_exists( 'advisor_convert_hex2rgba' ) ) {
      function advisor_convert_hex2rgba($color, $opacity = false) {
          $default = 'rgb(0,0,0)';
          if (empty($color))
              return $default;
          if ($color[0] == '#')
              $color = substr($color, 1);
          if (strlen($color) == 6)
              $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
          elseif (strlen($color) == 3)
              $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
          else
              return $default;
          $rgb = array_map('hexdec', $hex);
          if ($opacity) {
              if (abs($opacity) > 1)
                  $opacity = 1.0;
              $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
          } else {
              $output = 'rgb(' . implode(",", $rgb) . ')';
          }
          return $output;
      }
    }

    /*================== get advisor services icon =================*/
    if( !function_exists( 'get_advisor_services_icon' ) ) {

  		function get_advisor_services_icon ( $icon_name = '' ) {

  			switch ( $icon_name ) {

  		    case 'icon-money':

  	        return 'icon-img-1';
  	        break;

  		    case 'icon-save-money':

  	        return 'icon-img-2';
  	        break;

  		    case 'icon-secure':

  	        return 'icon-img-3';
  	        break;

  			  case 'icon-privacy':

  	        return 'icon-img-4';
  	        break;

  			  case 'icon-planning':

  	        return 'icon-img-5';
  	        break;

  			  case 'icon-consulting':

  	        return 'icon-img-6';
  	        break;

  			  case 'icon-travel':

  					return 'icon-img-7';
  					break;

  				case 'icon-consumer':

  					return 'icon-img-8';
  					break;

  				case 'icon-online-consult':

  					return 'icon-img-9';
  					break;

  		    default:
  		        return '';
        }


  		}
    }
function advisor_footer_css(){
print_r( get_option( 'advisor-custom-css'));
delete_option( 'advisor-custom-css' );

}
add_action('wp_head','advisor_footer_css');


add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
 
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
 
}


/*
// Add menu item for draft posts
function add_drafts_admin_menu_item() {
  // $page_title, $menu_title, $capability, $menu_slug, $callback_function
  add_posts_page('Drafts', 'Drafts', 'read', 'edit.php?post_status=draft&post_type=post');
}
add_action('admin_menu', 'add_drafts_admin_menu_item');
*/

/* Custom API */

add_action( 'rest_api_init', function () {
  register_rest_route( '/custom/v1', '/custom01/', array(
    'methods' => 'GET',
    'callback' => 'custom01FN',
  ) );
} );

function custom01FN() {
  $posts = get_posts();

  if ( empty( $posts ) ) {
    return null;
  }

  return $posts;
}

add_action( 'rest_api_init', function () {
  register_rest_route( '/custom/v1', '/custom02/', array(
    'methods' => 'GET',
    'callback' => 'custom02FN',
  ) );
} );

function custom02FN() {
  global $wpdb;
  
  $querystr = "
    SELECT $wpdb->posts.* 
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
    AND $wpdb->posts.post_status = 'publish' 
    AND $wpdb->posts.post_type = 'post'
    AND $wpdb->posts.post_date < NOW()
    ORDER BY $wpdb->posts.post_date DESC
 ";

 $pageposts = $wpdb->get_results($querystr, OBJECT);

  if ( empty( $pageposts ) ) {
    return null;
  }

  return $pageposts;
}

add_action( 'rest_api_init', function () {
  register_rest_route( '/custom/v1', '/getteam/(?P<id>[\d]+)', array(
    'methods' => 'GET',
    'callback' => 'customApiGetTeam',
  ) );
} );


function customApiGetTeam($request) {
  $id = $request['id'];
  $args = array(
    'meta_key'		=> 'advisor_member_office',
	  'meta_value'	=> $id,
    'post_type' 		=> 'team',
    'orderby'  		 	=> 'date',
    'order'     		=> $order,
    'posts_per_page' 	=> -1
  
  );
  $advisor_team = new WP_Query( $args );

  /*
  $advisor_team = $advisor_team->get_posts();

  
  if ( empty( $advisor_team ) ) {
    return null;
  }
  $team = array();
  foreach($advisor_team as $at) {
    $team_member_name  = get_the_title();
    $featured_image = get_the_post_thumbnail_url();
    $team[] = array('post_title' => $at->post_title, 'post_image' => $featured_image);
  }

  return $team;
*/
  

  $team = array();
  $html = '';
  while ( $advisor_team->have_posts() ) : $advisor_team->the_post();

    $team_member_name               = get_the_title();
    $team_member_bio          			= get_post_meta( get_the_ID(), 'advisor_member_bio', true );
    $team_member_designation 				= get_post_meta( get_the_ID(), 'advisor_member_designation', true );
    $team_memeber_facebook_link     = get_post_meta( get_the_ID(), 'advisor_member_facebook', true );
    $team_memeber_twitter_link      = get_post_meta( get_the_ID(), 'advisor_member_twitter', true );
    $team_memeber_youtube_link      = get_post_meta( get_the_ID(), 'advisor_member_youtube', true );
    $team_member_image_arr	 				= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
    $image_alt = get_post_meta( get_post_thumbnail_id( get_the_ID() ), '_wp_attachment_image_alt', true);

    if ( empty( $team_member_image_arr[0] ) ) {
      $team_member_image = get_template_directory_uri() . "/images/updated/300x292.png";

    } else {
      $team_member_image = $team_member_image_arr[0];
    }
    
    $html .= '<div class="team_box">';
    if ( ! empty ( $team_member_image ) ) { 
      $html .= '<img src="'.esc_url( $team_member_image ).'" alt="'.esc_attr( $image_alt ).'" />';
    }
    $html .= '<div class="name">';
    if ( !empty ( $team_member_name ) ) { 
      $html .= esc_html( $team_member_name, 'advisor-core');
    }
    $html .= '</div><div class="description">';
    if ( !empty ( $team_member_designation ) ) { 
      $html .= esc_html( $team_member_designation, 'advisor-core'); 
    }
    $html .= '</div></div>';

  endwhile;
  wp_reset_postdata();
  $team['html'] = $html;
  return $team;

}

add_filter( 'manage_edit-team_columns', 'my_edit_team_columns' ) ;

function my_edit_team_columns( $columns ) {

    $columns = array(
        'title' => __( 'Name' ),
        'thumbnail' => __( 'Image' ),
        'office' => __( 'Office' ),
        'date' => __( 'Date' )
    );

    return $columns;
}

add_action( 'manage_team_posts_custom_column', 'my_manage_team_columns', 10, 2 );

function my_manage_team_columns( $column, $post_id ) {
    global $post;
    
    switch( $column ) {

        /* If displaying the 'duration' column. */
        case 'office' :

            /* Get the post meta. */
            $officePostId = get_post_meta( $post_id, 'advisor_member_office', true );
            
            $args = array(
              'post_type' => 'office',
              'posts_per_page' => 1,
              'post__in'=> array($officePostId)
          );
            $offices = new WP_Query( $args );
            while ( $offices->have_posts() ) {
              $offices->the_post();
              $office  = get_the_title();
            }

            /* If no duration is found, output a default message. */
            if ( empty( $office ) )
                echo __( 'Unknown' );

            /* If there is a duration, append 'minutes' to the text string. */
            else
                printf( __( '%s ' ), $office );

            break;
        case 'thumbnail' :
            $team_member_image = get_the_post_thumbnail(  get_the_ID() , array(200 , 150) , '');
            echo($team_member_image);
            if ( empty( $team_member_image ) ) {
              $team_member_image = "<img src=" . get_template_directory_uri() . "/images/updated/450x400.png" . " alt='team'>";
            }
            break;
        /* Just break out of the switch statement for everything else. */
        default :
            break;
    }
}





function customLoginLogo() {
  global $advisor_options;
  if ( !empty( $advisor_options['advisor-header-logo-scroll']['url'] ) ) {
    $logo_url_img = $advisor_options['advisor-header-logo-scroll']['url'];
  }
  ?> 
    <style type="text/css"> 
      body.login div#login h1 a {
        background-image: url(<?php echo($logo_url_img) ?>);
        background-size: 100%;
        padding: 0;
        margin: 0 auto;
        width: 191px;
      } 
      #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
        color: transparent ;
        background: url(/wp-content/themes/advisor/images/teracode-options.png) no-repeat scroll 0 0 / 100% auto;
      }
    </style>
  <?php 
  } 
  add_action( 'login_enqueue_scripts', 'customLoginLogo' );
  add_action( 'admin_head', 'customLoginLogo' );
?>
