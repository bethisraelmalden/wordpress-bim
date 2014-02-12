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
          <strong>Eruv</strong>
          <span id="eruv-status">Loading...</span>
          <small id="eruv-info">
            <a href="https://twitter.com/maldeneruv/status/">twitter</a>
          </small>
        </span>
      </div>
    </div>
  </div><div class="row">
    <div class="col-md-3">
      <?php
        $posts = get_posts(array(
          'posts_per_page' => 1,
          'category' => $catID
        ));

        foreach($posts as $post): setup_postdata($post);
          $link = get_permalink();
      ?>
      <h4></h4>
      <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;wkst=1&amp;src=0iae4k1ocotleoitkqpbee7ui4%40group.calendar.google.com&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="350" frameborder="0" scrolling="no"></iframe>
      <p class="text-center">
        <a href="<?php echo $link; ?>" class="btn btn-default">Full Bulletin</a>
        <a href="<?php echo get_category_link(get_cat_ID('Bulletin'))?>" class="btn btn-default">Past Bulletins</a>
      </p>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div><div class="col-md-9">
      <ul class="list-unstyled home-content" style="font-size: 14px">
      <?php
        query_posts("cat=-" . get_cat_ID('Bulletin') . "&showposts=3");
        while(have_posts()) : the_post();
          $postformat = get_post_format();
          $link = get_permalink();
      ?>
        <li <?php post_class(); ?>>
          <header class="entry-header">
          <?php the_title('<a href="' .
                    esc_url(get_permalink()) . '" rel="bookmark" class="entry-title">', '</a>'); ?>
          <div class="entry-meta text-muted hidden-print">
            <?php if('post' == get_post_type()): ?>
            <span class="entry-date-hebrew"><?php echo bim_get_hebrew_date(get_the_date('U')); ?></span>
            <span class="entry-date" class="stop-fouc"
                  data-reldate="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F j, Y'); ?></span>
              <?php if(in_array('category', get_object_taxonomies(get_post_type()))): ?>
            &bull; <span class="cat-links"><?php echo get_the_category_list(', '); ?></span>
            <?php
                endif;
              endif;
              edit_post_link('Edit', '<span class="edit-link">', '</span>' );
            ?>
          </div>
          </header>
          <div class="entry-content">
            <?php
              if ('audio' == get_post_format()):
                $audio = bim_get_audio(get_the_content());
            ?>
            <audio preload="none" controls="controls"
                   type="<?php echo bim_get_mimetype($audio); ?>"
                   src="<?php echo $audio; ?>"></audio>
            <?php endif;
              the_content('Continue reading <span class="meta-nav">&rarr;</span>');
              wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">Pages:</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
              ));
            ?>
          </div>
        </li>
      <?php
        //endforeach;
        //wp_reset_postdata();
        endwhile;
      ?>
      </ul>

      <!-- ul class="pager">
        <li class="previous"><?php echo get_previous_posts_link('&larr; Newer'); ?></li>
        <li class="next"><?php echo get_next_posts_link('Older &rarr;'); ?></li>
      </ul-->
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
