<?php get_header(); ?>
<div class="background">
  <?php
    $sticky = get_option('sticky_posts');
    $args = array(
      'posts_per_page' => 5,
      'ignore_sticky_posts' => 1,
      'post__in' => $sticky
    );

    $query = new WP_Query($args);
    if (!empty($sticky) && $query->have_posts()): ?>
  <div class="container sticky-posts">
    <?php
      while($query->have_posts()): setup_postdata($query->next_post());
        $link = get_permalink();
    ?>
    <div class="row event">
      <div class="col-xs-12">
        <h4><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h4>
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="pull-right text-muted">
        <div class="hebrew-date"><?php echo bim_get_hebrew_date(); ?></div>
        <span class="eruv-status">
          <strong>Eruv</strong> <span id="eruv-status">Checking...</span>
          <span id="eruv-info">
            <a href="https://twitter.com/maldeneruv/status/">twitter</a>
          </span>
        </span>
      </div>
    </div>
  </div><div class="row">
    <div class="col-md-6">
      <?php $catID = get_cat_ID('Bulletin'); ?>
      <h3><a href="<?php echo get_category_link($catID)?>">Schedule</a></h3>
      <?php
        $posts = get_posts(array(
          'posts_per_page' => 1,
          'category' => $catID
        ));

        foreach($posts as $post): setup_postdata($post);
          $link = get_permalink();
      ?>
      <h4><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h4>
      <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;wkst=1&amp;src=0iae4k1ocotleoitkqpbee7ui4%40group.calendar.google.com&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="350" frameborder="0" scrolling="no"></iframe>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div><div class="col-md-6">
      <?php $catID = get_cat_ID('Torah'); ?>
      <h3><a href="<?php echo get_category_link($catID)?>">Recent Divrei Torah &amp; Shiurim</a></h3>
      <ul class="">
      <?php
        $posts = get_posts(array(
          'posts_per_page' => 10,
          'category' => $catID
        ));

        foreach($posts as $post): setup_postdata($post);
          $postformat = get_post_format();
          $link = get_permalink();
          $classes = 'dvar-torah';
      ?>
        <li class="<?php echo $classes; ?>">
          <a href="<?php echo $link; ?>"><?php the_title(); ?></a>
        </li>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
      </ul>
    </div>
  </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/home']); });
</script>
<?php
get_footer();
