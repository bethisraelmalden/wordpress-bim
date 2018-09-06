<?php
wp_enqueue_style('chosen', '//cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.min.css');
wp_enqueue_style('chosen-bootstrap', get_template_directory_uri() . '/lib/chosen-bootstrap-0.0.2/chosen-bootstrap.css');
get_header(); ?>
<div id="content" class="container">
<?php if ($_GET['thankyou']): ?>
  <h1>Your response has been recorded. Thank you!</h1>
  <p class="lead">If you're not on our mailing list, <a href="http://eepurl.com/R3sL5">sign up now</a>.</p>
<?php else: ?>
  <p class="lead text-center">
    Become a member of Congregation Beth Israel.
  </p>
  <form id="membership" class="form-horizontal" method="POST"
        data-gdocs="https://docs.google.com/forms/d/16ftKlwV6k5-4x2VeEna-Nzq2ahOO62Cy43cCaKuzw3o/formResponse">
  <div class="row">
    <div class="col-sm-5">
        <div class="form-group">
          <label for="first_name" class="col-sm-4 control-label">First Name</label>
          <div class="col-sm-8">
            <input id="first_name" type="text" class="form-control" name="first_name" data-gdocs="entry.870858507" data-paypal="first_name" />
          </div>
        </div>
        <div class="form-group">
          <label for="first_name" class="col-sm-4 control-label">Last Name</label>
          <div class="col-sm-8">
            <input id="last_name" type="text" class="form-control" name="last_name" data-gdocs="entry.1693080590" data-paypal="last_name" />
          </div>
        </div>

        <div class="form-group">
          <label for="spouse_name" class="col-sm-4 control-label">Spouse Name</label>
          <div class="col-sm-8">
            <input id="spouse_name" type="text" class="form-control" name="spouse_name" data-gdocs="entry.1242170009" />
          </div>
        </div>

        <div class="form-group">
          <label for="level" class="col-sm-4 control-label">Level</label>
          <div class="col-sm-8">
            <select id="level" data-gdocs="entry.1242533523" name="level" class="form-control chosen">
              <option data-paypal-amount="3600" value="Pillar" selected="selected">$3,600 - Pillar (4 complimentary seats)</option>
              <option data-paypal-amount="2500" value="Partner">$2,500 - Partner (4 complimentary seats)</option>
              <option data-paypal-amount="1800" value="Benefactor">$1,800 - Benefactor (4 complimentary seats)</option>
              <option data-paypal-amount="1000" value="Sustaining">$1,000 - Sustaining (2 complimentary seats)</option>
              <option data-paypal-amount="500" value="Full Family">$500 - Full Family</option>
              <option data-paypal-amount="360" value="Full Single">$360 - Full Single </option>
              <option data-paypal-amount="360" value="Associate Family">$360 - Associate Family</option>
              <option data-paypal-amount="250" value="Associate Single">$250 - Associate Single</option>
              <option data-paypal-amount="0" value="Non-Member">$0 - Non-Member</option>
            </select>
            <p class="help-block">
              If you can’t make the above levels work, please
              <a href="mailto:director@bethisraelmalden.org">contact the Executive Director</a>
              for a confidential discussion. Your continued membership is
              important to us.
            </p>
          </div>
        </div>

        <div class="form-group">
          <label for="address1" class="col-sm-4 control-label">Address</label>
          <div class="col-sm-8">
            <input id="address1" data-gdocs="entry.1483083563" data-paypal="address1" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="city" class="col-sm-4 control-label">City</label>
          <div class="col-sm-4">
            <input id="city" data-gdocs="entry.378463608" data-paypal="city" name="city" type="text" class="form-control" />
          </div>
          <label for="state" class="col-sm-1 control-label">State</label>
          <div class="col-sm-3">
            <select id="state" data-gdocs="entry.777154863" data-paypal="state" name="state" value="" class="form-control">
              <option value=""></option><option value="AA">AA</option><option value="AE">AE</option><option value="AK">AK</option><option value="AL">AL</option><option value="AP">AP</option><option value="AR">AR</option><option value="AS">AS</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="FM">FM</option><option value="GA">GA</option><option value="GU">GU</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MH">MH</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MP">MP</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="PR">PR</option><option value="PW">PW</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VI">VI</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="zip" class="col-sm-4 control-label">Zip</label>
          <div class="col-sm-8">
            <input id="zip" data-gdocs="entry.675613693" data-paypal="zip" name="zip" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="day_phone_a" class="col-sm-4 control-label">Phone (Day)</label>
          <div class="col-sm-8">
            <input id="day_phone_a" data-gdocs="entry.1024254482" name="day_phone_a" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="night_phone_a" class="col-sm-4 control-label">Phone (Night)</label>
          <div class="col-sm-8">
            <input id="night_phone_a" data-gdocs="entry.428650216" data-paypal="night_phone_a" name="night_phone_a" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
            <input id="email" data-gdocs="entry.975364310" data-paypal="email" name="email" type="email" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="dates" class="col-sm-4 control-label">Birthdays / Anniversaries</label>
          <div class="col-sm-8">
            <p class="help-block">Important birthdays and anniversaries in your family.</p>
            <textarea id="dates" data-gdocs="entry.1827191525" name="dates" class="form-control"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="dates" class="col-sm-4 control-label">Yahrzeits</label>
          <div class="col-sm-8">
            <p class="help-block">List family yahrzeits.</p>
            <textarea id="dates" data-gdocs="entry.305187581" name="dates" class="form-control"></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-4">
            <input id="payment_method" type="hidden" value="PayPal" data-gdocs="entry.1634675268" />
            <input type="submit" value="PayPal" class="btn btn-primary" />
            <input type="submit" value="Cash" class="btn btn-default" />
          </div>
        </div>
    </div>
    <div class="col-sm-6">
      <h2 class="text-center">High Holiday Seating</h2>
      <hr />
      <div class="form-group">
        <label for="member_adult" class="col-sm-5 control-label text-right">Member Adult ($72)</label>
        <div class="col-sm-3">
          <input id="member_adult" type="number" value="0" min="0" step="1"
                 data-gdocs="entry.333865748"
                 data-paypal-item="Member Adult Seat"
                 data-paypal-amount="72.00" class="form-control" />
        </div>
        <div class="col-sm-4 help-text">&nbsp;</div>
      </div>
      <div class="form-group">
        <label for="member_child" class="col-sm-5 control-label text-right">Member Child ($54)</label>
        <div class="col-sm-3">
          <input id="member_child" type="number" value="0" min="0" step="1"
                 data-gdocs="entry.1870149190"
                 data-paypal-item="Child Member Seat"
                 data-paypal-amount="54.00" class="form-control" />
        </div>
        <div class="col-sm-4 help-text">
          Under 13. Includes complimentary babysitting.
        </div>
      </div>
      <div class="form-group">
        <label for="nonmember_adult" class="col-sm-5 control-label text-right">Non-Member Adult ($125)</label>
        <div class="col-sm-3">
          <input id="nonmember_adult" type="number" value="0" min="0" step="1"
                 data-gdocs="entry.646547736"
                 data-paypal-item="Non-Member Adult Seat"
                 data-paypal-amount="125.00" class="form-control" />
        </div>
        <div class="col-sm-4 help-text">&nbsp;</div>
      </div>
      <div class="form-group">
        <label for="nonmember_child" class="col-sm-5 control-label text-right">Non-Member Child ($72)</label>
        <div class="col-sm-3">
          <input id="nonmember_child" type="number" value="0" min="0" step="1"
                 data-gdocs="entry.1729958570"
                 data-paypal-item="Non-Member Child Seat"
                 data-paypal-amount="72.00" class="form-control" />
        </div>
        <div class="col-sm-4 help-text">
          Under 13. Includes complimentary babysitting.
        </div>
      </div>

      <div class="form-group">
        <label for="babysitting" class="col-sm-5 control-label text-right">Babysitting ($10/day/child)</label>
        <div class="col-sm-3">
          <input id="babysitting" type="number" value="0" min="0" step="1"
                 data-gdocs="entry.697830986"
                 data-paypal-item="Babysitting"
                 data-paypal-amount="10.00" class="form-control" />
        </div>
        <div class="col-sm-4 help-text">&nbsp;</div>
      </div>

      <h2 class="text-center">Additional Sponsorship</h2>
      <hr />
      <div class="form-group">
        <label for="babysitting" class="col-sm-5 control-label text-right">Specific Sponsorship Levels</label>
        <div class="col-sm-3">
          <select id="sponsorship" data-gdocs="entry.1807653483" name="sponsorship" class="form-control chosen">
            <option data-paypal-amount="0" value="No Sponsorship" selected="selected">Select Below</option>
            <option data-paypal-amount="2500.00" value="Annual Learning Sponsor">$2,500 - Annual Learning Sponsor</option>
            <option data-paypal-amount="500.00" value="Monthly Learning Sponsor">$500 - Monthly Learning Sponsor</option>
            <option data-paypal-amount="1000.00" value="Luncheon Benefactor">$1,000 - Luncheon Benefactor</option>
            <option data-paypal-amount="625.00" value="Lavish Kiddush Benefactor">$625 - Lavish Kiddush Benefactor</option>
            <option data-paypal-amount="500.00" value="Gala Kiddush Benefactor">$500 - Gala Kiddush Benefactor</option>
            <option data-paypal-amount="420.00" value="Sponsored Kiddush Benefactor">$420 - Sponsored Kiddush Benefactor</option>
            <option data-paypal-amount="120.00" value="Breakfast Club">$120 - Breakfast Club</option>
            <option data-paypal-amount="180.00" value="Week of Learning">$180 - Week of Learning</option>
            <option data-paypal-amount="50.00" value="Day of Learning">$50 - Day of Learning</option>
            <option data-paypal-amount="500.00" value="Library Scholar">$500 - Library Scholar</option>
            <option data-paypal-amount="72.00" value="Library Siddur/Chumash">$72 - Library Siddur/Chumash</option>
            <option data-paypal-amount="54.00" value="Library Book">$54 - Library Book</option>
          </select>
        </div>
        <div class="col-sm-4 help-text">&nbsp;</div>
      </div>
    </div>
  </div>
  </form>
  <?php endif; ?>
</div>

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

<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/membership']); });
</script>
<?php
get_footer();
