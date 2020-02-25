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
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/9byIDLGftKI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
      <div class="text-center">
        <br />
        <a href="https://www.charidy.com/BIM" class="btn btn-lg btn-success">Learn More</a>
      </div>
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
