<?php

if (!function_exists('bim_setup')):
function bim_setup() {
  // add_theme_support('automatic-feed-links');
  // add_theme_support('custom-header');

  //register_nav_menus( array(
	//	'primary'   => 'Top primary menu',
	//	'secondary' => 'Top secondary menu'
	//));

  add_theme_support( 'post-formats', array(
		//Possible: 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
		'audio', 'gallery'
  ));

  add_theme_support('post-thumbnails');
	set_post_thumbnail_size(672, 372, true);

  add_theme_support('html5', array(
    'comment-list', 'comment-form', 'search-form'
  ));
}//end function
endif;
add_action('after_setup_theme', 'bim_setup');

//function bim_widgets_init() {
//  register_sidebar( array(
//		'name'          => 'Primary Sidebar',
//		'id'            => 'sidebar-1',
//		'description'   => 'Main sidebar that appears on the right.',
//		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</aside>',
//		'before_title'  => '<h1 class="widget-title">',
//		'after_title'   => '</h1>',
//	));
//
//	register_sidebar(array(
//		'name'          => 'Content Sidebar',
//		'id'            => 'sidebar-2',
//		'description'   => 'Additional sidebar that appears on the right.',
//		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</aside>',
//		'before_title'  => '<h1 class="widget-title">',
//		'after_title'   => '</h1>',
//	));
//
//	register_sidebar(array(
//		'name'          => 'Footer Widget Area',
//		'id'            => 'sidebar-3',
//		'description'   => 'Appears in the footer section of the site.',
//		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</aside>',
//		'before_title'  => '<h1 class="widget-title">',
//		'after_title'   => '</h1>',
//	));
//}//end function
//add_action('widgets_init', 'bim_widgets_init');

function bim_title( $title, $sep, $seplocation ) {
  global $page, $paged;

  // Don't affect in feeds.
  if (is_feed()) { return $title; }

  // Add the blog name
  if ('right' == $seplocation) {
    $title .= get_bloginfo( 'name' );
  } else {
    $title = get_bloginfo('name') . $title;
  }

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo('description', 'display');
  if ($site_description && (is_home() || is_front_page())) {
    $title .= " {$sep} {$site_description}";
  }

  // Add a page number if necessary:
  if ($paged >= 2 || $page >= 2) {
    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
  }

  return $title;
}
add_filter('wp_title', 'bim_title', 10, 3);


function bim_theme_resources() {
	wp_enqueue_script('lesscss', '//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js');
}//end function
add_action('wp_enqueue_scripts', 'bim_theme_resources');

function bim_audio_resources() {
  wp_enqueue_style('soundmanager', get_template_directory_uri() . '/lib/soundmanager-2.97/css/inlineplayer.css');
  wp_enqueue_style('sm-flashblock', get_template_directory_uri() . '/lib/soundmanager-2.97/css/flashblock.css');
}//end function


function bim_get_audio($s) {
  $result = '';
  $pattern = '@(https?|ftp)://([^"\']*)\.mp3@i';
  if(preg_match($pattern, $s, $matches)) { $result = $matches[0]; }
  return $result;
}//end function

function bim_get_hebrew_date($t) {
  if(!$t) { $t = time(); }
  $julian = gregoriantojd(date('m', $t), date('d', $t), date('Y', $t));
  $hebMonthName = jdmonthname($julian, 4);
  list($hebMonth, $hebDay, $hebYear) = split('/', jdtojewish($julian));
  return "$hebDay $hebMonthName $hebYear";
}//end function

function bim_get_mimetype($path) {
  $type = '';
  $ext = pathinfo($path, PATHINFO_EXTENSION);
  if(!empty($ext)) {
    foreach(wp_get_mime_types() as $exts => $mime) {
      if(preg_match('!^(' . $exts . ')$!i', $ext)) {
        $type = $mime;
        break;
      }//end if
    }//end for each
  }//end if

  return $type;
}//end function