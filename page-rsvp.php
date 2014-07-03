<?php get_header(); ?>
<div id="content" class="container">
<?php
  if ($_GET['thankyou']):
?>
  <h1>Your response has been recorded. Thank you!</h1>
<?php
  else:
    switch ($_GET['event']):
      case '2014-legoland': ?>
  <h1>Legoland RSVP</h1>
  <form id="rsvp" class="form-horizontal" method="POST"
        data-gdocs="https://docs.google.com/forms/d/146Lk7MUbL2nN3WXz_F7SR0SxuU_LQ6GkbGp1fMcwejk/formResponse">
    <div class="form-group">
      <label for="first_name" class="col-sm-3 control-label">First Name</label>
      <div class="col-sm-8">
        <input id="first_name" type="text" name="first_name" data-gdocs="entry.1597535486" data-paypal="first_name" />
      </div>
    </div>
    <div class="form-group">
      <label for="first_name" class="col-sm-3 control-label">Last Name</label>
      <div class="col-sm-8">
        <input id="last_name" type="text" name="last_name" data-gdocs="entry.1346340046" data-paypal="last_name" />
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-3 control-label">Email</label>
      <div class="col-sm-8">
        <input id="email" type="email" name="email" data-gdocs="entry.968261696" data-paypal="email" />
      </div>
    </div>
    <div class="form-group">
      <label for="children" class="col-sm-3 control-label">Number of Children ($12)</label>
      <div class="col-sm-8">
        <input id="children" type="number" name="children"
               value="0" min="0" step="1" size="2"
               data-gdocs="entry.1642759067"
               data-paypal-item="Legoland - Child"
               data-paypal-amount="12.00"/>
        <p class="help-block">Ages 3-12</p>
      </div>
    </div>
    <div class="form-group">
      <label for="adults" class="col-sm-3 control-label">Number of Adults ($15)</label>
      <div class="col-sm-8">
        <input id="adults" type="number" name="adults"
               value="0" min="0" step="1"
               data-gdocs="entry.1937460659"
               data-paypal-item="Legoland - Adult"
               data-paypal-amount="15.00" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-3">
        <input id="payment_method" type="hidden" value="PayPal" data-gdocs="entry.67695383" />
        <input type="submit" value="PayPal" class="btn btn-primary" />
        <input type="submit" value="Cash" class="btn btn-default" />
      </div>
    </div>
  </form>
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
