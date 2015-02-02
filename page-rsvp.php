<?php get_header(); ?>
<div id="content" class="container">
<?php if ($_GET['thankyou']): ?>
  <h1>Your response has been recorded. Thank you!</h1>
<?php else: switch ($_GET['event']): ?>
<?php case '2015-shabbaton': ?>
  <h1>Parshat Yitro Shabbaton</h1>
  <div class="row">
    <div class="col-sm-5">
      <span class="lead text-muted">Registration is closed.</span>
    </div>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2014/12/parshat-yitro-shabbaton/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2014/12/KlatzkoShabbaton-232x300.png" />
      </a>
    </div>
  </div>
<?php break; default: ?>
  <h1>Event Not Found</h1>
  <div class="alert alert-warning">
    Sorry, we cannot find the RSVP form for this event. Try looking at the
    <a href="<?php echo get_category_link(get_cat_ID('Events'))?>">Events</a> page.
  </div>
<?php
    endswitch;
  endif;
?>
  <form id="paypal" class="hidden" method="POST"
        action="https://www.paypal.com/cgi-bin/webscr">
    <input type="hidden" name="return" value="http://bethisraelmalden.org" />
    <input type="hidden" name="business" value="director@bethisraelmalden.org" />
    <input type="hidden" name="currency_code" value="USD" />
    <input type="hidden" name="cmd" value="_cart" />
    <input type="hidden" name="upload" value="1" />
    <input type="hidden" name="rm" value="2" />
    <input type="hidden" name="charset" value="utf-8" />
    <input type="hidden" name="mrb" value="3FWGC6LFTMTUG"/>
    <input type="hidden" name="item_number" value="" />
    <input type="hidden" name="shipping_1" value="0.00" />
  </form>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/rsvp']); });
</script>
<?php
get_footer();
