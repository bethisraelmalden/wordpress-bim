<?php get_header(); ?>
<div id="content" class="container">
<?php if ($_GET['thankyou']): ?>
  <h1>Your response has been recorded. Thank you!</h1>
<?php else: switch ($_GET['event']): ?>
<?php case '2015-purim': ?>
  <h1>Purim Seudah</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1bEQwkqqibrJMpTEecAz5tBHy1DIhxEwgHSfwTGe6GqM/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1887950156"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.206638227"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1977756189"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Interested" data-gdocs="entry.653959134" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.273947779" />
          <input type="submit" value="Not Interested" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not interested.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($20)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.653959134"
                 data-paypal-item="Purim - Adult"
                 data-paypal-amount="19.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($10)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.1924342993"
                 data-paypal-item="Purim - Child"
                 data-paypal-amount="9.50"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>
      <div class="form-group">
        <label for="veg" class="col-sm-6 control-label">
          # Vegetarian Meals
        </label>
        <div class="col-sm-6">
          <input id="veg" type="number" name="veg" class="form-control"
                 value="0" min="0" step="1"
                 data-gdocs="entry.72935328" />
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($60)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.40740482"
                  data-paypal-item="Purim - Family max"
                  data-paypal-amount="57.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="sponsorship" class="col-sm-6 control-label">
          Add a sponsorship?
        </label>
        <div class="col-sm-6">
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.250828265"
                   data-paypal-item="Purim - Sponsor"
                   data-paypal-amount="54.00" /> Be a Sponsor ($54)
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input type="hidden" value="5" data-gdocs="entry.1829509625" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.273947779" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
          <p class="help-block">Pay by February 28th for a 5% discount.</p>
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2015/02/purim-bash-seudah-5775/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2015/02/purim-flyer-300x169.png" />
      </a>
    </div>
  </div>
<?php break; case '2015-shabbaton': ?>
  <h1>Parshat Yitro Shabbaton</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/10VDlWjXkmLo9glPUKondCEZo_Ml4rGsVTlXHv8QPzmE/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.636705728"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.490719412"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.439574896"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Interested" data-gdocs="entry.39081953" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1281585095" />
          <input type="submit" value="Not Interested" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not interested.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($15)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.39081953"
                 data-paypal-item="Shabbaton - Adult"
                 data-paypal-amount="15.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($8)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.1315406559"
                 data-paypal-item="Shabbaton - Child"
                 data-paypal-amount="8.00"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>
      <div class="form-group">
        <label for="veg" class="col-sm-6 control-label">
          # Vegetarian Meals
        </label>
        <div class="col-sm-6">
          <input id="veg" type="number" name="veg" class="form-control"
                 value="0" min="0" step="1"
                 data-gdocs="entry.659366634" />
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($54)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.261499401"
                  data-paypal-item="Shabbaton - Family max"
                  data-paypal-amount="54.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="need_hospitality" class="col-sm-6 control-label">
          Do you need hospitality?
        </label>
        <div class="col-sm-6">
          <!--select id="need_hospitality" name="need_hospitality"
                  class="form-control"
                  data-gdocs="entry.1397021896">
            <option value="No" selected="selected">No</option>
            <option value="Yes">Yes</option>
          </select-->
          <p class="help-text text-center">
            <span class="alert-danger">
            Hospitality no longer available.
            </span>
          </p>
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="sponsorship" class="col-sm-6 control-label">
          Add a sponsorship?
        </label>
        <div class="col-sm-6">
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1794699399"
                   data-paypal-item="Sponsor - Oneg"
                   data-paypal-amount="18.00" /> Oneg ($18)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.755506829"
                   data-paypal-item="Sponsor - Luncheon"
                   data-paypal-amount="54.00" /> Luncheon ($54)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1745866060"
                   data-paypal-item="Sponsor - Seudah Shelishit"
                   data-paypal-amount="36.00" /> Seudah Shelishit ($36)
          </label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <!--input id="discount_rate" name="discount_rate" type="hidden"
                 value="5"
                 data-gdocs="entry.1042250289"
                 data-paypal="discount_rate_cart" /-->
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1281585095" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
          <!--p class="help-block">Pay by January 17th for a 5% discount.</p-->
        </div>
      </div>
      <?php endif; ?>
    </form>
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
