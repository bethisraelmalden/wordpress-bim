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
    <div class="col-xs-12 center-align">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/live_stream?channel=UCmifAaxDDUILnFheV4VFnHw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <br />
  <div class="row">
    <div class="col-sm-6 text-center">
      <a href="/live#previous" class="btn btn-lg btn-primary">View Previous Livestreams</a>
    </div>

    <div class="col-sm-6 text-center">
      <big>Subscribe for future livestreams</big><br />
      <script src="https://apis.google.com/js/platform.js"></script>
      <div class="g-ytsubscribe" data-channelid="UCmifAaxDDUILnFheV4VFnHw" data-layout="full" data-count="default"></div>
    </div>
  </div>
  <hr />

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
      <div class="row">
      <?php
        query_posts("cat=-$catBulletin&showposts=6");

        $post_count = 0;
        while(have_posts()) : the_post();
          $post_count++;
          $post_url = get_permalink();
          $post_format = get_post_format();
          $post_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
          $post_content = get_the_content();
          $post_audio = ('audio' === $post_format ? bim_get_audio($post_content) : '');
          $post_video = bim_get_video($post_content);
      ?>

      <?php if($post_video): // video ?>
        <div class="col-sm-6 recent-post">
          <h4><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h4>
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item"
                src="<?php  echo str_replace("watch?v=", "embed/", $post_video); ?>"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

      <?php elseif ($post_audio): // audio ?>
        <div class="col-sm-6 recent-post">
          <h4><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h4>
          <audio class="media-object" preload="none" controls="controls"
            type="<?php echo bim_get_mimetype($post_audio); ?>"
            src="<?php echo $post_audio; ?>"></audio>
          <?php the_excerpt(); ?>
        </div>

      <?php else: // non-video ?>
        <div class="col-sm-12 recent-post">
          <div class="row">
            <div class="col-sm-3">
            <?php if ($post_image): ?>
              <img class="img-responsive" src="<?php echo $post_image; ?>" alt="Post Thumbnail" />
            <?php else: ?>
              <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/bim-building.jpg" alt="Congregation Beth Israel" />
            <?php endif; ?>
            </div>

            <div class="col-sm-9">
              <h4><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>

        <?php endif; // end post content?>
      <?php endwhile; // end post ?>
      </div>
    </div><?php // end recent posts ?>
  </div><?php // end bottom half ?>
</div><?php // end home page ?>

<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/home']); });
</script>
<?php
get_footer();
