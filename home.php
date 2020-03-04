<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">
      <p class="lead"><em>Serving the Jewish community in Malden since 1904.</em></p>
    </div>
    <div class="col-xs-12 col-sm-3 text-muted">
      <span class="eruv-status">
        <strong>Eruv</strong>
        <span class="loading label label-info">Loading...</span>
        <span id="eruv-status"></span>
        <small id="eruv-info">
          <a href="https://twitter.com/maldeneruv/status/">twitter</a>
        </small>
      </span>&bull;
      <span class="hebrew-date"><?php echo bim_get_hebrew_date(); ?></span>
    </div>
  </div>

  <div class="row">
    <div class="col-md-offset-3 col-md-6 text-center">

    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <?php
      $catBulletin = get_cat_ID('Bulletin');
      $posts = get_posts(array(
        'posts_per_page' => 1,
        'category' => $catBulletin
      ));
      ?>
      <div>
        <a href="<?php echo get_permalink($posts[0]); ?>" class="btn btn-default">Latest Bulletin</a>
        <a href="<?php echo get_category_link($catBulletin)?>" class="btn btn-default">Past Bulletins</a>
      </div><br />
      <div id="upcoming">
        <span class="loading label label-info">Loading...</span>
        <strong class="day"></strong>
        <ul class="events list-unstyled">
          <li class="row">
            <div class="when col-xs-4"></div>
            <div class="title col-xs-8"></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
    <?php
    //$sticky = get_option('sticky_posts');
    $args = array(
      'posts_per_page' => 5 //,
      //'ignore_sticky_posts' => 1,
      //'post__in' => $sticky
    );

    query_posts("cat=-$catBulletin&showposts=5");
    if (have_posts()):
    ?>
    <div id="recent-posts">
      <?php
        $post_count = 0;
        while(have_posts()) : the_post();
          $post_count++;
          $post_url = get_permalink();
          $post_format = get_post_format();
          $post_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
          $post_audio = ('audio' === $post_format ? bim_get_audio(get_the_content()) : '');
      ?>
      <div class="row">
        <div class="col-sm-3">
          <a href="<?php echo $post_url; ?>">
            <?php if ($post_image): ?>
            <img class="img-responsive" src="<?php echo $post_image; ?>" alt="" />

            <?php else: ?>
            <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/bim-building.jpg" alt="" />
            <?php endif; ?>
          </a>
        </div>
        <div class="col-sm-8">
          <h4><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h4>
          <?php if ($post_audio): ?>
            <audio class="media-object" preload="none" controls="controls"
              type="<?php echo bim_get_mimetype($post_audio); ?>"
              src="<?php echo $post_audio; ?>"></audio>
          <?php endif; ?>
          <?php the_excerpt(); ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
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
