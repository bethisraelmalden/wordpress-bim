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

    query_posts("cat=-$catBulletin&showposts=3");
    if (have_posts()):
    ?>
      <div id="recent-posts" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php
        $post_count = 0;
        while(have_posts()) : the_post();
          $post_count++;
          $post_url = get_permalink();
          $post_format = get_post_format();
          $post_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
          $post_audio = ('audio' === $post_format ? bim_get_audio(get_the_content()) : '');
        ?>
          <div class="<?php echo 'item' . (1 === $post_count ? ' active' : ''); ?>">
            <?php if ($post_image): ?>
            <a href="<?php echo $post_url; ?>"><img src="<?php echo $post_image;?>" /></a>
              <?php if (has_excerpt()): ?>
            <div class="carousel-caption has-image">
              <h3 class="text-center"><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
            </div>
              <?php endif; ?>
            <?php else: ?>
            <a href="<?php echo $post_url; ?>"><img src="<?php echo get_template_directory_uri();?>/img/bim-building.jpg" /></a>
            <div class="carousel-caption no-image">
              <h3><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h3>
              <?php if ($post_audio): ?>
              <audio preload="none" controls="controls"
               type="<?php echo bim_get_mimetype($post_audio); ?>"
               src="<?php echo $post_audio; ?>"></audio>
              <?php endif; ?>
              <?php the_excerpt(); ?>
            </div>
            <?php endif; ?>
          </div>

        <?php endwhile; ?>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php for($i =0; $i < $post_count; $i++): ?>
          <li data-target="#recent-posts" data-slide-to="<?php echo $i; ?>" class="<?php echo (0 === $i ? 'active' : ''); ?>"></li>
          <?php endfor; ?>
        </ol>

        <!-- Controls -->
        <a class="left carousel-control" href="#recent-posts" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a><a class="right carousel-control" href="#recent-posts" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
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
