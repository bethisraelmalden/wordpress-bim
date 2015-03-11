<?php get_header(); ?>
<div id="content" class="container">
<?php if ($_GET['thankyou']): ?>
  <h1>Your response has been recorded. Thank you!</h1>
<?php else: switch ($_GET['event']): ?>
<?php case '2015-dinner': ?>
  <div class="page-dinner well">
    <div class="background"></div>
    <div class="text-center">
      <img src="<?php echo get_template_directory_uri(); ?>/img/dinner/logo.png"/>
      <h1>
        Honoring Rabbi Yitzchak &amp; Tova Rabinowitz<br />
        <em>for their 18 years of service</em>
      </h1>
      <h2 class="text-center">Dinner &amp; Journal Reservations</h2>
      <h4>Sivan 13, 5775 / Sunday, May 31, 2015</h4>
      <hr />
    </div>

    <form id="rsvp" class="form-horizontal" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1Jh3jDuXA4VSh4H3aQ63TliBlkjvO1BhiAho-byUOw-I/formResponse">
      <div class="row">
        <div class="col-sm-5">
          <h4>Contact Information</h4>
          <div class="form-group">
            <label for="first_name"
                   class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
              <input id="first_name" name="first_name" type="text"
                     class="form-control" value="<?php echo $_GET['fname']?>"
                     data-gdocs="entry.1863260533" data-paypal="first_name" />
            </div>
          </div>

          <div class="form-group">
            <label for="last" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
              <input id="last_name" type="text" name="last_name"
                     value="<?php echo $_GET['lname']?>" class="form-control"
                     data-gdocs="entry.1347743833" data-paypal="last_name" />
            </div>
          </div>

          <div class="form-group">
            <label for="address1" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
              <input id="address1" name="address1" type="text"
                     class="form-control"
                     data-gdocs="entry.756717941" data-paypal="address1" />
            </div>
          </div>

          <div class="form-group">
            <label for="city" class="col-sm-3 control-label">City</label>
            <div class="col-sm-5">
              <input id="city" name="city" type="text" class="form-control"
                     data-gdocs="entry.986520116" data-paypal="city" />
            </div>
            <label for="state" class="col-sm-1 control-label">State</label>
            <div class="col-sm-3">
              <select id="state" name="state" value="" class="form-control"
                      data-gdocs="entry.496211654" data-paypal="state">
                <option value=""></option><option value="AA">AA</option>
                <option value="AE">AE</option><option value="AK">AK</option>
                <option value="AL">AL</option><option value="AP">AP</option>
                <option value="AR">AR</option><option value="AS">AS</option>
                <option value="AZ">AZ</option><option value="CA">CA</option>
                <option value="CO">CO</option><option value="CT">CT</option>
                <option value="DC">DC</option><option value="DE">DE</option>
                <option value="FL">FL</option><option value="FM">FM</option>
                <option value="GA">GA</option><option value="GU">GU</option>
                <option value="HI">HI</option><option value="IA">IA</option>
                <option value="ID">ID</option><option value="IL">IL</option>
                <option value="IN">IN</option><option value="KS">KS</option>
                <option value="KY">KY</option><option value="LA">LA</option>
                <option value="MA">MA</option><option value="MD">MD</option>
                <option value="ME">ME</option><option value="MH">MH</option>
                <option value="MI">MI</option><option value="MN">MN</option>
                <option value="MO">MO</option><option value="MP">MP</option>
                <option value="MS">MS</option><option value="MT">MT</option>
                <option value="NC">NC</option><option value="ND">ND</option>
                <option value="NE">NE</option><option value="NH">NH</option>
                <option value="NJ">NJ</option><option value="NM">NM</option>
                <option value="NV">NV</option><option value="NY">NY</option>
                <option value="OH">OH</option><option value="OK">OK</option>
                <option value="OR">OR</option><option value="PA">PA</option>
                <option value="PR">PR</option><option value="PW">PW</option>
                <option value="RI">RI</option><option value="SC">SC</option>
                <option value="SD">SD</option><option value="TN">TN</option>
                <option value="TX">TX</option><option value="UT">UT</option>
                <option value="VA">VA</option><option value="VI">VI</option>
                <option value="VT">VT</option><option value="WA">WA</option>
                <option value="WI">WI</option><option value="WV">WV</option>
                <option value="WY">WY</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="zip" class="col-sm-3 control-label">Zip</label>
            <div class="col-sm-9">
              <input id="zip" name="zip" type="text" class="form-control"
                     data-gdocs="entry.1286550168" data-paypal="zip" />
            </div>
          </div>

          <div class="form-group">
            <label for="night_phone_a"
                   class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
              <input id="night_phone_a" name="night_phone_a" type="text"
                     class="form-control"
                     data-gdocs="entry.1444058160"
                     data-paypal="night_phone_a" />
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input id="email" type="email" name="email"
                   value="<?php echo $_GET['email']?>" class="form-control"
                   data-gdocs="entry.1490243901"
                   data-paypal="email" />
            </div>
          </div>
        </div>

        <div class="col-sm-7">
          <h4>Banquet Reservations</h4>
          <div class="form-group">
            <div class="col-sm-6">
              <label>
                <input name="banquet" type="radio" value="1" checked
                       data-gdocs="entry.481247392" />
                Attending
              </label>
              <small>($125 per person)</small><br />
              <label>
                <input name="banquet" type="radio" value="0"
                       data-gdocs="entry.481247392" />
                Unable to Attend
              </label>
              <small>(Please accept our donation.)</small>
            </div>
            <label for="guests" class="col-sm-4 control-label">
              Number of guests
            </label>
            <div class="col-sm-2">
              <input id="guests" type="number" name="guests"
                     class="form-control"
                     value="0" min="0" step="1"
                     data-gdocs="entry.1859262524"
                     data-paypal-item="Chai Celebration - Banquet"
                     data-paypal-amount="125.00" />
            </div>
          </div>

          <h4>Journal Ad</h4>
          <p>
            Place an ad as a salute to Rabbi and Rebbetzin Rabinowitz,
            to the legacy of Congregation Beth Israel of Malden,
            and to the future of Malden's Jewish Community.
          </p>

          <div class="form-group">
            <div class="col-sm-5">
              <select id="level" name="level" class="form-control"
                      data-gdocs="entry.184912279">
                <option selected>Select an Option</option>
                <option data-paypal-item="Chai Celebration - Founder"
                        data-paypal-amount="10000.00"
                        data-paypal-num="1"
                        value="Founder">$10,000 - Founder</option>
                <option data-paypal-item="Chai Celebration - Benefactor"
                        data-paypal-amount="5000.00"
                        data-paypal-num="1"
                        value="Benefactor">$5,000 - Benefactor</option>
                <option data-paypal-item="Chai Celebration - Pillar"
                        data-paypal-amount="3600.00"
                        data-paypal-num="1"
                        value="Pillar">$3,600 - Pillar</option>
                <option data-paypal-item="Chai Celebration - Partner"
                        data-paypal-amount="2500.00"
                        data-paypal-num="1"
                        value="Partner">$2,500 - Partner</option>
                <option data-paypal-item="Chai Celebration - Diamond Page"
                        data-paypal-amount="1800.00"
                        data-paypal-num="1"
                        value="Diamond Page">$1,800 - Diamond Page</option>
                <option data-paypal-item="Chai Celebration - Gold Page"
                        data-paypal-amount="1000.00"
                        data-paypal-num="1"
                        value="Gold Page">$1,000 - Gold Page</option>
                <option data-paypal-item="Chai Celebration - Silver Page"
                        data-paypal-amount="720.00"
                        data-paypal-num="1"
                        value="Silver Page">$720 - Silver Page</option>
                <option data-paypal-item="Chai Celebration - Full Page"
                        data-paypal-amount="500.00"
                        data-paypal-num="1"
                        value="Full Page">$500 - Full Page</option>
                <option data-paypal-item="Chai Celebration - Half Page"
                        data-paypal-amount="360.00"
                        data-paypal-num="1"
                        value="Half Page">$360 - Half Page</option>
                <option data-paypal-item="Chai Celebration - Quarter Page"
                        data-paypal-amount="250.00"
                        data-paypal-num="1"
                        value="Quarter Page">$250 - Quarter Page</option>
                <option data-paypal-item="Chai Celebration - Eighth Page"
                        data-paypal-amount="125.00"
                        data-paypal-num="1"
                        value="Eighth Page">$125 - Eighth Page</option>
                <option data-paypal-item="Chai Celebration - Greeting"
                        data-paypal-amount="72.00"
                        data-paypal-num="1"
                        value="Greeting">$72 - Greeting</option>
              </select>
            </div>
            <div class="col-sm-12">
              <span class="help-block">
                Ads of $500 or more entitle donor to dinner reservations
                for two.<br /> Your ad can be tax-deductible as a charitable
                contribution or as a business advertisement.
              </span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <textarea class="form-control" rows="2"
                        placeholder="Your Message"
                        data-gdocs="entry.546851675"></textarea>
              <span class="help-block">
                Please submit images, PDFs and Word documents to
                <a href="mailto:chaicelebration@gmail.com">chaicelebration@gmail.com</a>.
              </span>
            </div>
          </div>
        </div>
      </div>

      <hr />
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.391920344" />
          <input type="submit" value="PayPal" class="btn btn-lg btn-primary" />
          <input type="submit" value="Cash" class="btn btn-lg btn-default" />
        </div>
      </div>
    </form>
  </div>

<?php break; case '2015-purim': ?>
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
                 data-paypal-amount="20.00" />
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
                 data-paypal-amount="10.00"/>
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
                  data-paypal-amount="60.00">
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
          <input type="hidden" value="0" data-gdocs="entry.1829509625" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.273947779" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
          <!--p class="help-block">Pay by February 28th for a 5% discount.</p-->
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2015/02/purim-bash-seudah-5775/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2015/02/purim-5775-300x169.png" />
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
