<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"><head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('|', true, 'right'); ?></title>

  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
  <!-- <meta property="og:description" content="" />
  <meta property="og:image" content="" />-->

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
  <link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/app/bim.less" />
<?php if (strpos(esc_url(home_url('/')), 'http://localhost') === false): ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-12157214-1', 'bethisraelmalden.org');
ga('send', 'pageview');
</script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.2.3/backbone-min.js"></script>
<?php endif;

wp_head();

global $post;
$slug = (is_page($post) ? 'page-' . get_post($post)->post_name : '');
?></head><body <?php body_class($slug); ?>>
<a href="#content" class="sr-only skip-link">Skip to content</a>
<header class="site-header" role="banner">
  <nav role="navigation" class="primary-navigation navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo esc_url(home_url('/')); ?>"
         class="navbar-brand" rel="home">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bim-logo-full.png"
             alt="<?php bloginfo('name'); ?>" />
      </a>
    </div>

    <!-- form id="search-container" action="<?php echo home_url( '/' ); ?>"
          method="GET" class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <label>
          <span class="sr-only">Search for:</span>
          <input type="text" name="s" class="form-control" placeholder="Search"
                 value="<?php echo get_search_query(); ?>"
                 title="Search for:" />
        </label>
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form -->

    <div class="navbar-right">
      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo home_url('/move'); ?>">Move to Malden</a></li>
          <li><a href="<?php echo home_url('/incentives'); ?>" class="text-muted">Incentives</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>" class="text-muted">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <a href="<?php echo esc_url(home_url('/donate')); ?>"
       class="navbar-btn navbar-right btn btn-donate">Donate</a>
  </nav>
</header>
<div class="container visible-print" style="border-bottom: 4px solid #333; margin-bottom: 2em; padding-bottom: 1em; ">
  <div class="row">
    <div class="col-xs-6">
      <img src="<?php echo get_template_directory_uri(); ?>/img/bim-logo-full.png"
             alt="<?php bloginfo('name'); ?>" />
    </div>
    <div class="col-xs-6 text-right">
      <strong>Congregation Beth Israel</strong><br />
      10 Dexter Street,
      Malden, MA 02148<br />
      781-322-5686
    </div>
  </div>
</div>
