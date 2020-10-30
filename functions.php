<?php
if (!function_exists('bim_setup')):
function bim_setup() {
  add_theme_support('automatic-feed-links');
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

function bim_title( $title, $sep, $seplocation ) {
  global $page, $paged;
  if (is_feed()) { return $title; } // Don't change feeds.

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
    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max($paged, $page));
  }

  return $title;
}//end function
add_filter('wp_title', 'bim_title', 10, 3);

function bim_theme_resources() {
	wp_enqueue_script('lesscss', '//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js');
}//end function
add_action('wp_enqueue_scripts', 'bim_theme_resources');

function bim_get_hebrew_date($t=null) {
  if(!$t) { $t = time(); }
  $julian = gregoriantojd(date('m', $t), date('d', $t), date('Y', $t));
  $hebMonthName = jdmonthname($julian, 4);
  list($hebMonth, $hebDay, $hebYear) = explode('/', jdtojewish($julian));
  return "$hebDay $hebMonthName $hebYear";
}//end function

function bim_get_video($s) {
  $result = '';
  $pattern = '@https?://(www.youtube.com|youtu.be)([^"\']*)@i';
  if(preg_match($pattern, $s, $matches)) { $result = $matches[0]; }
  return $result;
}

function bim_get_audio($s) {
  $result = '';
  $pattern = '@(https?|ftp)://([^"\']*)\.mp3@i';
  if(preg_match($pattern, $s, $matches)) { $result = $matches[0]; }
  return $result;
}//end function

function bim_get_mimetype($path) {
  $type = '';
  $ext = pathinfo($path, PATHINFO_EXTENSION);
  if(!empty($ext)):
    foreach(wp_get_mime_types() as $exts => $mime):
      if(preg_match('!^(' . $exts . ')$!i', $ext)):
        $type = $mime;
        break;
      endif;
    endforeach;
  endif;

  return $type;
}//end function
