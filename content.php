<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  <div class="col-md-8 col-md-offset-2">
    <header class="entry-header">
      <?php
        if (is_single()):
          the_title('<h1 class="entry-title">', '</h1>');
        else:
          the_title('<h1 class="entry-title"><a href="' .
                    esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
        endif;
      ?>
      <div class="entry-meta text-muted hidden-print">
        <?php if('post' == get_post_type()): ?>
        <span class="entry-date-hebrew"><?php echo bim_get_hebrew_date(get_the_date('U')); ?></span>
        <span class="entry-date stop-fouc"
              data-reldate="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F j, Y'); ?></span>
          <?php if(in_array('category', get_object_taxonomies(get_post_type()))): ?>
        &bull; <span class="cat-links"><?php echo get_the_category_list(', '); ?></span>
        <?php
            endif;
          endif;
          edit_post_link('Edit', '<span class="edit-link">', '</span>' );
        ?>
      </div>
    </header><!-- .entry-header -->

    <?php if (is_search()): ?>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </div>
    <?php else: ?>
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
    <?php endif; ?>
  </div>
</article>
