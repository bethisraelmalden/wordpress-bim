<?php get_header(); ?>
<div id="page-live" class="container">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/live_stream?channel=UCmifAaxDDUILnFheV4VFnHw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <br />
  <div class="text-right">
    <big>Subscribe for future livestreams</big><br />
    <script src="https://apis.google.com/js/platform.js"></script>
    <div class="g-ytsubscribe" data-channelid="UCmifAaxDDUILnFheV4VFnHw" data-layout="full" data-count="default"></div>
  </div>

  <h3>Previous Livestreams<a name="previous">&nbsp;</a><h3>
  <div class="row">
    <?php
      $catLive = get_cat_ID('Livestream');
      query_posts("cat=$catLive&showposts=9");

      $post_count = 0;
      while(have_posts()) : the_post();
        $post_count++;
        $post_url = get_permalink();
        $post_title = get_post_title();
        $post_format = get_post_format();
        $post_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        $post_content = get_the_content();
        $post_audio = ('audio' === $post_format ? bim_get_audio($post_content) : '');
        $post_video = bim_get_video($post_content);
        $post_embed = str_replace("watch?v=", "embed/", $post_video);
        $post_embed = str_replace("youtu.be/", "www.youtube.com/embed/", $post_embed);
    ?>
    <?php if($post_video): // video ?>
      <div class="col-sm-4 recent-post">
        <h4><a href="<?php echo $post_url; ?>" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a></h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
              src="<?php  echo $post_embed; ?>"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>

    <?php elseif ($post_audio): // audio ?>
      <div class="col-sm-4 recent-post">
        <h4><a href="<?php echo $post_url; ?>" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a></h4>
        <audio class="media-object" preload="none" controls="controls"
          type="<?php echo bim_get_mimetype($post_audio); ?>"
          src="<?php echo $post_audio; ?>"></audio>
        <?php the_excerpt(); ?>
      </div>
    <?php endif; // end post content?>
    <?php endwhile; // end post ?>
  </div>

  <a href="https://www.youtube.com/channel/UCmifAaxDDUILnFheV4VFnHw" class="btn btn-primary btn-lg">View More</a>
</div>

<?php
get_footer();
