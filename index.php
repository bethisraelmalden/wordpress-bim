<?php get_header(); ?>
<div class="site-content container" role="main">
<?php
  while(have_posts()):
    the_post();
    get_template_part('content', get_post_format());
  endwhile;
?>
  <ul class="pager">
    <li class="previous"><?php echo get_previous_posts_link('&larr; Newer'); ?></li>
    <li class="next"><?php echo get_next_posts_link('Older &rarr;'); ?></li>
  </ul>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) {});
</script>
<?php
get_footer();
