<?php
  function append_query_string($url) {
      return add_query_arg($_GET, $url);
  }
  add_filter('the_permalink', 'append_query_string');

  if ('' == $_GET['event']) {
    $_GET['event'] = '2020-fall-concert';
    // header('Location: https://docs.google.com/forms/d/1WXZSvUmzeWxTAMxa25L-BD0CqfFHgGKuf2WRZpJJ-kc/viewform');
    // exit();
  }
?>

<?php get_header(); ?>
<div id="content" class="container">
<?php if ($_GET['thankyou']): ?>
  <h1>Your response has been recorded. Thank you!</h1>
<?php else: switch ($_GET['event']): ?>
<?php case 'x2019-chanukah': ?>
  <h1>Chanukah Bash</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSc1g1XBaS6fIolvJte6v6Oz8dyfFP8-NN0jQk-wOr2Lnb-kQA/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.467309924"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.1239178442"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1091378211"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Coming" data-gdocs="entry.1033105750" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($12)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.1033105750"
                 data-paypal-item="Chanukah - Adult"
                 data-paypal-amount="12.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($6)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.348538221"
                 data-paypal-item="Chanukah - Child"
                 data-paypal-amount="6.00"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($36)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.1872214929"
                  data-paypal-item="Chanukah - Family max"
                  data-paypal-amount="36.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="notes" class="col-sm-6 control-label">
          Other Notes
        </label>
        <div class="col-sm-6">
          <textarea id="notes" data-gdocs="entry.1938692856"></textarea>
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
                   data-gdocs="entry.1553203501"
                   data-paypal-item="Chanukah - Gelt Sponsor"
                   data-paypal-amount="18.00" /> Gelt Sponsor ($18)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1436561775"
                   data-paypal-item="Chanukah - Menorah Sponsor"
                   data-paypal-amount="36.00" /> Menorah Sponsor  ($36)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.327271197"
                   data-paypal-item="Chanukah - Dreidel Sponsor"
                   data-paypal-amount="54.00" /> Dreidel Sponsor ($54)
          </label>

          <p class="help-block">Thank you for your generous support.</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="Pay Now"
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="Pay Now" class="btn btn-primary" />
          <input type="submit" value="Pay Later" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2019/12/annual-chanukah-bash-5780/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2019/12/2019-12-24-chanukah-232x300.jpg" />
      </a>
    </div>
  </div>

<?php case '2020-fall-concert': ?>
  <h1>Virtual Chanukah Concert</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/e/1FAIpQLSeg1wB1YCQpobQCzL8Nuwzm1sMEcFc88rLnVQZmfntFGi4wPw/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.467309924"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.1239178442"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1091378211"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Coming" data-gdocs="entry.1033105750" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label>
            <input type="checkbox" value="Coming"
                   data-gdocs="entry.1033105750" /> Yes, I'd like to attend the Virtual Concert.
          </label>
      </div>

      <div class="form-group">
        <label for="sponsorship" class="col-sm-6 control-label">
          Add a sponsorship?
        </label>
        <div class="col-sm-6">
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1553203501"
                   data-paypal-item="Chanukah - Fall Series Sponsor"
                   data-paypal-amount="1000.00" /> Fall Series Sponsor ($1,000)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1436561775"
                   data-paypal-item="Chanukah - Concert Sponsor"
                   data-paypal-amount="500.00" /> Concert Sponsor  ($500)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.327271197"
                   data-paypal-item="Chanukah - Gold Sponsor"
                   data-paypal-amount="360.00" /> Gold Sponsor ($360)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.1347645996"
                   data-paypal-item="Chanukah - Silver Sponsor"
                   data-paypal-amount="250.00" /> Silver Sponsor ($250)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.11054681"
                   data-paypal-item="Chanukah - Bronze Sponsor"
                   data-paypal-amount="180.00" /> Bronze Sponsor ($180)
          </label><br />
          <label>
            <input type="checkbox" value="1"
                   data-gdocs="entry.111314750"
                   data-paypal-item="Chanukah - Partner Sponsor"
                   data-paypal-amount="90.00" /> Partner Sponsor ($90)
          </label>
          <label>Other</label>
            <input type="text" value=""
                   data-gdocs="entry.1938692856"
                   data-paypal-item="Chanukah - Other Sponsor" />

          <p class="help-block">Thank you for your generous support.</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="Pay Now"
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="Pay Now" class="btn btn-primary" />
          <input type="submit" value="Pay Later" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="https://bethisraelmalden.org/2020/11/virtual-chanukah-concert/">
        <img src="https://bethisraelmalden.org/wp-content/uploads/2020/11/Rabbi-Green-1-v-2-300x300.png" />
      </a>
    </div>
  </div>
<?php break; case 'x2019-shevat': ?>
  <h1>Tu B'Shevat Seder</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSfotWO3vlSzb2KuuzxWC9TZujGbE2N8XNIgEJCfIQM7qY-i3g/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.467309924"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.1239178442"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1091378211"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Coming" data-gdocs="entry.1033105750" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($10)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.1033105750"
                 data-paypal-item="Tu B'Shevat Seder - Adult"
                 data-paypal-amount="10.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($5)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.348538221"
                 data-paypal-item="Tu B'Shevat Seder - Child"
                 data-paypal-amount="5.00"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($30)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.1872214929"
                  data-paypal-item="Tu B'Shevat Seder - Family max"
                  data-paypal-amount="30.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="notes" class="col-sm-6 control-label">
          Other Notes
        </label>
        <div class="col-sm-6">
          <textarea id="notes" data-gdocs="entry.1938692856"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1500179091" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2019/01/tu-b'shevat-seder-5779/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2019/01/190120-tu-bshevat-232x300.jpg" />
      </a>
    </div>
  </div>

<?php break; case 'x2020-purim': ?>
  <h1>Purim Seudah</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSdVBXP08_B3PGZmLpnbaAbuu6UG62zxy4CsJ0SBLSgCEj0wew/formResponse"
          >
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
      <div class="form-group">
        <label for="add_sponsorship" class="col-sm-6 control-label">
          Become a sponsor ($54)?
        </label>
        <div class="col-sm-6">
          <select id="add_sponsorship" name="add_sponsorship"
                  class="form-control"
                  data-gdocs="entry.4276840">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>
      <hr />
      <h2>Matanot L’evyonim<br /><small>Purim Charity Fund</small></h2>
      <p class="text-justify">
      On Purim, we have the mitzvah of Matanot L'Evyonim-charitable gifts to
      the poor.The mitzvah is to give two separate gifts to two needy people
      and is to be distributed on Purim day.
      The monies you pledge here will be distributed by the Rabbi on Purim day.
      </p>
      <div class="form-group">
        <label for="matanot" class="col-sm-6 control-label">
          Matanot L'Evyonim
        </label>
        <div class="col-sm-6">
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input id="matanot" name="matanot" type="text"
                     placeholder="Amount"
                     data-gdocs="entry.250828265"
                      data-paypal-item="Purim - Matanot L'Evyonim"
                     data-paypal-num="1" />
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <!-- input type="hidden" value="0" data-gdocs="entry.1829509625" /-->
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.273947779" />
          <input type="submit" value="Pay Now" class="btn btn-primary" />
          <input type="submit" value="Pay Later" class="btn btn-default" />
          <!--p class="help-block">Pay by February 28th for a 5% discount.</p-->
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2020/03/purim-seudah-5780/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2020/03/2020-03-10-purim-232x300.jpg" />
      </a>
    </div>
  </div>

<?php break; case 'x2017-shabbat-hagadol': ?>
  <h1>Shabbat HaGadol Dinner</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/e/1FAIpQLSdokVfSjnOVyYg44jB21vBEB1MQRETVuDzrTCGj5fVjjIEcsA/formResponse"
          >
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1183841410"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.686756315"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1084062973"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Interested" data-gdocs="entry.643043734" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.563073468" />
          <input type="submit" value="Not Interested" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not interested.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($16)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.643043734"
                 data-paypal-item="Shabbat HaGadol Dinner - Adult"
                 data-paypal-amount="16.00" />
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
                 data-gdocs="entry.1531876611"
                 data-paypal-item="Shabbat HaGadol Dinner - Child"
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
                 data-gdocs="entry.2115274992" />
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($64)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.1870099763"
                  data-paypal-item="Shabbat HaGadol Dinner - Family max"
                  data-paypal-amount="64.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="comments" class="col-sm-6 control-label">
          Comments
        </label>
        <div class="col-sm-6">
          <textarea id="comments" name="comments"
            class="form-control"
            data-gdocs="entry.538223567">
          </textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.563073468" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <!--a href="http://bethisraelmalden.org/2017/03/purim-seudah-5777/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2017/03/purim-5777-300x168.png" />
      </a-->
    </div>
  </div>

<?php break; case 'x2020-pesach': ?>
  <form id="rsvp" class="form form-horizontal" method="POST"
        data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSfnImWTH0v0At8V0mSWA3mxc1AJYobiXQYi70s_r4v1WtGBmg/formResponse">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-2">
        <h1>Passover <small>5780</small></h1>
        <h2>Sale of Chametz</h2>
        <p class="text-justify">
          Any <em>chametz</em> owned by a Jew during Passover week is
          forbidden for actual use forever. If there is <em>chametz</em> that
          you do not want to dispose of (eg. bottle of shnapps), you must
          arrange for a formal sale of <em>chametz</em> to a non-Jew that
          will go into effect before Passover.
        </p>
        <p class="text-justify">
          This contract must be completed by
          <strong>7:30am on Wednesday, April 8th</strong>.
          If you miss the deadline, call the Rabbi at
          <a href="tel:+17812231471">781-223-1471</a>.
        </p>
        <p>
          Although it is preferable to authorize the Rabbi to sell your chametz in-person <strong>that will not be an option this year in order to prevent the spread of the coronavirus</strong>. You can fill out the form below or call the Rabbi to make arrangements.
        </p>
        <ul>
          <li>Please do not call the syagogue number. Call to speak or leave a message with the Rabbi at  at <a href="tel:+17812231471">781-223-1471</a>.</li>
          <li>Please do not mail in the form. Fill out this form or call the Rabbi.</li>
        </ul>

        <h3>Power of Attorney Form</h3>
        <p class="text-justify">
          I (we) hereby authorize Rabbi Yitzchak Zev Rabinowitz to sell all
          the chametz that is in my (our) possession, home and/or place of
          business, in accordance with the requirements of Jewish Law.
        </p>

        <div class="form-group">
          <div class="col-sm-12">
            <textarea id="names" name="names" class="form-control"
                      placeholder="Names"
                      data-gdocs="entry.25969392"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <textarea id="addresses" name="addresses" class="form-control"
                   placeholder="Addresses"
                   data-gdocs="entry.395634033"></textarea>
            <p class="help-block">Include addresses of all premises.</p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            Approximate total value of the chametz items you are selling
            (focus on the value of items that we conventionally
            refer to as real chametz, e.g. breads, pasta, cereals, pastries,
            oatmeal etc.).
          </div>
          <div class="col-sm-4">
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input type="text" class="form-control"
                     placeholder="Value"
                     data-gdocs="entry.1979450425" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <input type="text" id="signed" name="signed" class="form-control"
                   placeholder="Signed"
                   data-gdocs="entry.963998337" />
          </div>
          <div class="col-sm-4">
            <input type="text" id="dated" name="dated" class="form-control"
                   placeholder="Date"
                   data-gdocs="entry.867892090" />
          </div>
        </div>

        <hr />
        <div class="form-group">
          <div class="col-sm-8">
            Please make out all contributions for the sale of chametz to
            the rabbi for his services.
          </div>
          <div class="col-sm-4">
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input type="text" class="form-control"
                     placeholder="Amount"
                     data-gdocs="entry.1677582139"
                     data-paypal-item="Pesach - Chametz Sale Contribution"
                     data-paypal-num="1" />
            </div>
          </div>
        </div>

        <hr />
        <h2>Ma’ot Chitin<br /><small>Passover Charity Fund</small></h2>
        <p class="text-justify">
        Ma’ot Chitin is the annual Passover fund that helps our less fortunate
        brethren celebrate Passover with joy and respect. To perform this
        Tzedaka that has been practised by Jewish communities around the world
        for centuries, please donate here or write a check out to Congregation Beth Israel, and write "Ma’ot Chitin" in the memo line.
        </p>
        <p>
          <strong>Special message</strong>: Please bear in mind that the devastating effect of the coronavirus on the economy has put many people into serious financial distress. Please open your hearts as best as you can. May the kindness we show others arouse the Almighty's mercy upon the world.
        </p>
        <div class="form-group">
          <div class="col-sm-8">
            <input id="maot-name" name="maot-name" class="form-control"
                   placeholder="Name"
                   data-gdocs="entry.966939546" />
          </div>
          <div class="col-sm-4">
            <div class="input-group">
              <div class="input-group-addon">$</div>
              <input id="maot" name="maot" type="text" class="form-control"
                     placeholder="Amount"
                     data-gdocs="entry.522294352"
                     data-paypal-item="Pesach - Ma'ot Chitin"
                     data-paypal-num="1" />
            </div>
          </div>
        </div>

        <hr />
        <div class="form-group text-center">
          <div class="col-sm-12 text-center">
            <label>
              <input name="notme" type="checkbox" value="1" />
              Check this box if you are not making any contributions to the
              Rabbi or Ma'ot Chitin.
            </label>
            <p>
          </div>
        </div>

        <hr />
        <div class="text-center">
          Wishing you a healthy, kosher, and joyous Pesach!<br />
          Rabbi Yitzchak and Tova Rabinowitz
        </div>

        <hr />
        <div class="form-group text-center">
          <div class="col-sm-12 text-center">
            <input id="notme" type="hidden" value="0" />
            <input id="payment_method" type="hidden" value="Pay Now"
                   data-gdocs="entry.1112114755" />
            <input type="submit" value="Pay Now" class="btn btn-lg btn-primary" />
            <input type="submit" value="Pay Later" class="btn btn-lg btn-default" />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="well pull-right">
          <strong>Passover 5780 Downloads</strong>
          <p>All the guides, in one place.</p>
          <ul class="list-unstyled">
            <li>
              <i class="glyphicon glyphicon-download"></i>
              <a href="http://bethisraelmalden.org/wp-content/uploads/2019/09/5780-Annual-Halacha-Guide.pdf">Halacha Guidebook</a>
            </li>
<!--             <li>
              <i class="glyphicon glyphicon-download"></i>
              <em>Product Supplement (coming soon)</em>
            </li> -->
            <li>
              <i class="glyphicon glyphicon-download"></i>
              <a href="http://bethisraelmalden.org/wp-content/uploads/2020/03/Passover-5780-2020-Supplement.pdf">Product Supplement</a>
            </li>
<!--             <li>
              <i class="glyphicon glyphicon-download"></i>
              <a href="http://bethisraelmalden.org/wp-content/uploads/2015/03/5775-sefirah.pdf">Sefirat HaOmer Chart</a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </form>

<?php break; case 'x2017-lag-bomer': ?>
  <h1>Lag B'Omer</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/e/1FAIpQLSc9GMlRaNUbt8m-3BEzi5T8ITvsvXJBbCxO2QC8GNiGtYQ4-A/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1706211117"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.559931540"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1807666963"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Cannot Attend" data-gdocs="entry.954606298" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($8)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.954606298"
                 data-paypal-item="Lag B'Omer - Adult"
                 data-paypal-amount="8.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($4)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.1513278221"
                 data-paypal-item="Lag B'Omer - Child"
                 data-paypal-amount="4.00"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/?p=5577">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2017/05/lag-bomer-5777-300x232.png" />
      </a>
    </div>
  </div>

<?php break; case 'x2019-shavuot': ?>
  <h1>Shavuoton Dinner</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSflZpvSP3xlauFFNIk2BIF68UVIkmfDXHf5oesq3nM-a5Yu5A/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.884522296"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.746781618"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1739930788"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Interested" data-gdocs="entry.1050952664" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.821983375" />
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
                 data-gdocs="entry.1050952664"
                 data-paypal-item="Shavuot - Adult"
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
                 data-gdocs="entry.2001808116"
                 data-paypal-item="Shavuot - Child"
                 data-paypal-amount="8.00"/>
          <p class="help-block">Ages 5-13</p>
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($45)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.1410218048"
                  data-paypal-item="Shavuot - Family max"
                  data-paypal-amount="45.00">
            <option value="0" selected="selected">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.821983375" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>

    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2019/05/shavuaton-5779/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2019/05/2019-shavuot-232x300.jpg" />
      </a>
    </div>
  </div>

<?php break; case 'x2015-07-shabbaton': ?>
  <h1>Shabbat Nachamu Shabbaton</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/16EZwhH1k0Jw0ibxQsQ2f5zEPqWyxR9-Dg-DMvXzhGOY/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1524512453"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.532285030"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.89148143"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Interested" data-gdocs="entry.1193950207" />
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
                 data-gdocs="entry.1193950207"
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
                 data-gdocs="entry.1060512057"
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
                 data-gdocs="entry.1750738418" />
        </div>
      </div>
      <div class="form-group">
        <label for="family_max" class="col-sm-6 control-label">
          Pay Family Max ($54)
        </label>
        <div class="col-sm-6">
          <select id="family_max" name="family_max" class="form-control"
                  data-gdocs="entry.1834299652"
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
          <select id="need_hospitality" name="need_hospitality"
                  class="form-control"
                  data-gdocs="entry.1921718414">
            <option value="No" selected="selected">No</option>
            <option value="Yes">Yes</option>
          </select>
          <!--p class="help-text text-center">
            <span class="alert-danger">
            Hospitality no longer available.
            </span>
          </p-->
        </div>
      </div>
      <div class="form-group">
        <label for="notes" class="col-sm-6 control-label">
          Other Notes
        </label>
        <div class="col-sm-6">
          <textarea id="notes" data-gdocs="entry.2110678729">
          </textarea>
        </div>
      </div>
      <hr />
      <!--div class="form-group">
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
      </div-->

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <!--input id="discount_rate" name="discount_rate" type="hidden"
                 value="5"
                 data-gdocs="entry.1042250289"
                 data-paypal="discount_rate_cart" /-->
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.706757101" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
          <!--p class="help-block">Pay by January 17th for a 5% discount.</p-->
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2015/07/medical-halacha-shabbaton/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2015/07/medical-halacha-shabbaton-300x233.png" />
      </a>
    </div>
  </div>
<?php break; case 'x2015-pizza': ?>
  <h1>Games &amp; Pizza Night</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1WKxet_TbsRFP9ZfFWGqvZ87e0KcQJHF3Cx21IupMVis/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1825140402"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.1845392549"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1104504766"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Coming" data-gdocs="entry.249036425" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.674400302" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Attending ($5 / person)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.249036425"
                 data-paypal-item="Games and Pizza - Attendee"
                 data-paypal-amount="5.00" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.674400302" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/?p=4746">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2015/12/games-pizza-2015-300x232.png" />
      </a>
    </div>
  </div>
<?php break; case 'x2016-shlocking': ?>
  <div class="text-center">
    <p class="lead">
      <strong>
      Motzai Shabbat, February 20th<br />
      Doors Open at 7:30pm
      </strong>
    </p>

    <p class="lead">
      <big>Beth Israel Malden</big><br />
      <em>in partnership with</em>
    </p>

    <p class="lead" style="font-variant: small-caps;">
      Yachad &bull; Ruderman Family Foundation &bull; Nefesh B'Nefesh<br />
      PRESENT
    </p>

    <p class="lead">
      <big><strong>LENNY SOLOMON &amp; SHLOCK ROCK</strong></big>
    </p>

    <hr />
  </div>

  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1YCwcWb9JRLQDNWjyFWVr45UCJRXYl5RAOS0eeRqk5HA/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1608760469"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.1459881364"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1965286632"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Not Coming" data-gdocs="entry.1895518161" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1044901675" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
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
                 data-gdocs="entry.1895518161"
                 data-paypal-item="Shlock Rock - Adult"
                 data-paypal-amount="15.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($10)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-gdocs="entry.879185112"
                 data-paypal-item="Shlock Rock - Child"
                 data-paypal-amount="10.00"/>
          <p class="help-block">Ages 3-12</p>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1044901675" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2016/01/shlock-rock-rsvp-5776/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2016/01/shlock-rock-5776-194x300.png" />
      </a>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-sm-6 col-sm-offset-2">
      <big>Free parking or take the
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/MBTA.svg/20px-MBTA.svg.png" alt="MBTA" />
      to Malden Center Station on the Orange Line (5 stops outbound from North
  Station towards Oak Grove) or Commuter Rail via Haverhill Line</big>
    </div>
  </div>

<?php break; case 'x2018-picnic': ?>
  <h1>End of Summer Picnic</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLScdWFiWjJLhrNNIvCK-R0ZxhFaZwZtpnLvw9GupsPVGKNpuyg/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1706211117"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.559931540"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1807666963"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Cannot Attend" data-gdocs="entry.954606298" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Adults ($8)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.954606298"
                 data-paypal-item="Picnic - Adult"
                 data-paypal-amount="8.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children ($4)
        </label>
        <div class="col-sm-6">
          <input id="children" type="number" name="children"
                 value="0" min="0" step="1" size="2" class="form-control"
                 data-family-max="skip"
                 data-gdocs="entry.1513278221"
                 data-paypal-item="Picnic - Child"
                 data-paypal-amount="4.00"/>
          <p class="help-block">Ages 4-12</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/?p=6510">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2018/08/end-of-summer-bbq-232x300.jpg" />
      </a>
    </div>
  </div>

<?php break; case 'x2018-manolson': ?>
  <h1>Gila Manolson Event</h1>
  <div class="row">
    <form id="rsvp" class="form-horizontal col-sm-5" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLScyRvMxqTQ-XvbdIb0FHvTFj8TYgdoPI3n3vSFRuDF3Yo0nWw/formResponse">
      <div class="form-group">
        <label for="first_name" class="col-sm-6 control-label">First Name</label>
        <div class="col-sm-6">
          <input id="first_name" type="text" name="first_name"
                 value="<?php echo $_GET['fname']?>" class="form-control"
                 data-gdocs="entry.1706211117"
                 data-paypal="first_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="last_name" class="col-sm-6 control-label">Last Name</label>
        <div class="col-sm-6">
          <input id="last_name" type="text" name="last_name"
                 value="<?php echo $_GET['lname']?>" class="form-control"
                 data-gdocs="entry.559931540"
                 data-paypal="last_name" />
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-6 control-label">Email</label>
        <div class="col-sm-6">
          <input id="email" type="email" name="email"
                 value="<?php echo $_GET['email']?>" class="form-control"
                 data-gdocs="entry.1807666963"
                 data-paypal="email" />
        </div>
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="1" />
          <input id="adults" type="hidden" name="adults"
                 value="Cannot Attend" data-gdocs="entry.954606298" />
          <input id="payment_method" type="hidden" value=""
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="Not Coming" class="btn btn-primary" />
          <p class="help-block">Please confirm you're not coming.</p>
        </div>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="col-sm-6 control-label">
          # Attending ($10)
        </label>
        <div class="col-sm-6">
          <input id="adults" type="number" name="adults" class="form-control"
                 value="0" min="0" step="1"
                 data-family-max="skip"
                 data-gdocs="entry.954606298"
                 data-paypal-item="Gila Manolson Event"
                 data-paypal-amount="10.00" />
        </div>
      </div>
      <div class="form-group">
        <label for="children" class="col-sm-6 control-label">
          # Children for Babysitting (free)
        </label>
        <div class="col-sm-6">
          <textarea id="children" name="children"
            data-gdocs="entry.1513278221"
            class="form-control"></textarea>
          <p class="help-block">List age of each child.</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-6">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.1404141729" />
          <input type="submit" value="PayPal" class="btn btn-primary" />
          <input type="submit" value="Cash" class="btn btn-default" />
        </div>
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-4 text-center">
      <a href="http://bethisraelmalden.org/2018/09/finding-yourself-in-the-crowd/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2018/09/2018-gila-manolson-791x1024.jpg" />
      </a>
    </div>
  </div>

<?php break; case 'x2015-dinner': ?>
  <div class="page-dinner well">
    <div class="background"></div>
    <div class="text-center">
      <img src="<?php echo get_template_directory_uri(); ?>/img/dinner/logo.png"/>
      <h1>
        Honoring Rabbi Yitzchak &amp; Tova Rabinowitz<br />
        <em>for their 18 years of service</em>
      </h1>
      <h2 class="text-center">Dinner &amp; Journal Reservations</h2>
      <h4>
        Sivan 13, 5775 / Sunday, May 31, 2015<br />
        Reception at 6pm, Dinner at 7pm
      </h4>
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
          <div class="alert alert-warning">
            The deadline for banquet reservations has past.
          </div>
          <!-- div class="form-group">
            <div class="col-sm-6">
              <label class="control-label">
                <input name="notme" type="radio" value="Yes"
                       <?php echo ('1' === $_GET['notme'] ? '' : 'checked'); ?>
                       data-gdocs="entry.481247392" />
                Attending
              </label>
              <small>($125 per person)</small><br />

              <label class="control-label">
                <input name="notme" type="radio" value="No"
                       <?php echo ('1' === $_GET['notme'] ? 'checked' : ''); ?>
                       data-gdocs="entry.481247392" />
                Unable to Attend
              </label>
              <small>(Please accept our donation.)</small>
            </div>
            <div class="col-sm-12">
              <label for="guests" class="control-label">
                Number attending
              </label>
              <small>($125 per person)</small>
            </div>
            <div class="col-sm-4">
              <select id="guests" name="guests" class="form-control"
                      data-gdocs="entry.1859262524"
                      data-paypal-item="Chai Celebration - Banquet"
                      data-paypal-amount="125.00" />
                <option value="0" <?php echo ('1' === $_GET['notme'] ? 'selected' : ''); ?>>Unable to Attend</option>
                <option value="1" <?php echo ('1' === $_GET['notme'] ? '' : 'selected'); ?>>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div -->

          <hr />
          <h4>Journal Ad</h4>
          <!--p>
            Place an ad as a salute to Rabbi and Rebbetzin Rabinowitz,
            to the legacy of Congregation Beth Israel of Malden,
            and to the future of Malden's Jewish Community.
          </p-->
          <div class="alert alert-warning">
            The deadline for including an ad in the printed Journal has passed.
            You can still submit a message that will be published in the online
            Journal after the dinner.
          </div>

          <div class="form-group">
            <div class="col-sm-6">
              <select id="level" name="level" class="form-control"
                      data-gdocs="entry.184912279">
                <option value="None" selected>Select Ad Level</option>
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
            <label for="other" class="col-sm-3 control-label">
              Other Amount
            </label>
            <div class="col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input id="other" type="number" name="other"
                       class="form-control"
                       value="0.00" min="0.00" step="0.01"
                       data-gdocs="entry.2055518957"
                       data-paypal-item="Chai Celebration - Other"
                       data-paypal-num="1" />
              </div>
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

<?php break; case 'x2019-siyum': ?>
  <div class="page-siyum well">
    <div class="background"></div>
    <div class="text-center">
      <img src="http://bethisraelmalden.org/wp-content/uploads/2019/05/2019-05-30-Mishna-Neshama-Banner.jpg" style="max-width: 100%"/>
      <h1>
        – An Uplifting Celebration 21 Years in the Making –
      </h1>
      <!-- <h2 class="text-center">Dinner &amp; Journal Reservations</h2> -->
      <h2 class="text-center">Ad Journal Submissions</h2>
<!--       <h4>
        Sivan 23, 5779 / Sunday, June 23, 2019<br />
        Reception at 5:30pm, Buffet Dinner at 6:30pm
      </h4>
 -->      <hr />
    </div>

    <form id="rsvp" class="form-horizontal" method="POST"
          data-gdocs="https://docs.google.com/forms/u/2/d/e/1FAIpQLSdcxZ9F93G4JCFgcr8XNSLN_Efq1Nbi2x14xPGLq51ZqzWM3g/formResponse">
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

          <hr />
          <div class="col-sm-6">
            <p>
              <strong>SHAS</strong> - Short for "shisha sidrei",
              literally "six orders"; an acronym for the entire mishnayot.
            </p>
            <p>
              <strong>Seder</strong> -  one of six orders of the Mishna. Plural "sedarim".
            </p>
            <p>
              <strong>Masechta</strong> - one of 63 books of Mishna. Plural "masechtot". Each
              Seder has between eight and
              thirteen Masechtot.
            </p>
          </div>

          <div class="col-sm-6">
            <p>
              <strong>Perek</strong> -  Chapter. Plural "perakim".
            </p>
            <p>
              <strong>Mishna</strong> - the paragraphs within each chapter. Plural “mishnayot”.
              "A mishna" refers to one paragraph; "THE Mishna" refers to the entire body of work.
            </p>
          </div>
        </div>

        <div class="col-sm-7">
          <!-- <h4>Dinner Reservations</h4> -->
          <!--div class="alert alert-warning">
            The deadline for banquet reservations has past.
          </div-->
          <!-- <div class="form-group">
            <div class="col-sm-6">
              <label class="control-label">
                <input name="notme" type="radio" value="Yes"
                       <?php echo ('1' === $_GET['notme'] ? '' : 'checked'); ?>
                       data-gdocs="entry.481247392" />
                Attending
              </label>
              <small>($125 per person)</small><br />

              <label class="control-label">
                <input name="notme" type="radio" value="No"
                       <?php echo ('1' === $_GET['notme'] ? 'checked' : ''); ?>
                       data-gdocs="entry.481247392" />
                Unable to Attend
              </label>
              <small>(Please accept our donation.)</small>
            </div>
            <div class="col-sm-12">
              <label for="guests" class="control-label">
                Number attending
              </label>
              <small>($125 per person)</small>
            </div>
            <div class="col-sm-4">
              <select id="guests" name="guests" class="form-control"
                      data-gdocs="entry.1859262524"
                      data-paypal-item="Mishna Neshama Siyum - Dinner"
                      data-paypal-amount="125.00" required />
                <option disabled value="" <?php echo ('1' === $_GET['notme'] ? '' : 'selected'); ?>>Select One</option>
                <option value="0" <?php echo ('1' === $_GET['notme'] ? 'selected' : ''); ?>>Unable to Attend</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div > -->

          <!-- <hr /> -->
          <h4>Journal Ad</h4>
          <p>
            Participating in a siyum is a great merit.

            <strong>Please help us reach
            our goal to get sponsors for all 6 sedarim, all 63 masechtot,
            all 525 perakim, and all 4,192 mishnayot.</strong>
          </p>
          <div class="alert alert-warning">
            The deadline for including an ad in the printed Journal has passed.
            You can still submit a message that will be published in the online
            Journal after the dinner.
          </div>

          <div class="form-group">
            <div class="col-sm-6">
              <select id="level" name="level" class="form-control"
                      data-gdocs="entry.184912279">
                <option value="None" selected>Select Ad Level</option>
                <option data-paypal-item="Mishna Neshama Siyum - Siyum Sponsor"
                        data-paypal-amount="25000.00"
                        data-paypal-num="1"
                        value="Siyum Sponsor">$25,000 - Siyum Sponsor</option>

                <option data-paypal-item="Mishna Neshama Siyum - SHAS Sponsor"
                        data-paypal-amount="18000.00"
                        data-paypal-num="1"
                        value="SHAS Sponsor">$18,000 - SHAS Sponsor</option>

                <option data-paypal-item="Mishna Neshama Siyum - Seder Sponsor"
                        data-paypal-amount="10000.00"
                        data-paypal-num="1"
                        value="Seder Sponsor">$10,000 - Seder Sponsor</option>

                <option data-paypal-item="Mishna Neshama Siyum - 20 Masechtot"
                        data-paypal-amount="7200.00"
                        data-paypal-num="1"
                        value="20 Masechtot">$7,200 - 20 Masechtot</option>

                <option data-paypal-item="Mishna Neshama Siyum - 10 Masechtot"
                        data-paypal-amount="5000.00"
                        data-paypal-num="1"
                        value="10 Masechtot">$5,000 - 10 Masechtot</option>

                <option data-paypal-item="Mishna Neshama Siyum - 50 Perakim"
                        data-paypal-amount="3600.00"
                        data-paypal-num="1"
                        value="50 Perakim">$3,600 - 50 Perakim</option>

                <option data-paypal-item="Mishna Neshama Siyum - Platinum Page 25 Perakim"
                        data-paypal-amount="2500.00"
                        data-paypal-num="1"
                        value="Platinum Page 25 Perakim">$2,500 - Platinum Page 25 Perakim</option>

                <option data-paypal-item="Mishna Neshama Siyum - Diamond Page 10 Perakim"
                        data-paypal-amount="1800.00"
                        data-paypal-num="1"
                        value="Diamond Page 10 Perakim">$1,800 - Diamond Page 10 Perakim</option>

                <option data-paypal-item="Mishna Neshama Siyum - Gold Page 250 Mishnayot"
                        data-paypal-amount="1000.00"
                        data-paypal-num="1"
                        value="Gold Page 250 Mishnayot">$1,000 - Gold Page 250 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Silver Page 100 Mishnayot"
                        data-paypal-amount="720.00"
                        data-paypal-num="1"
                        value="Silver Page 100 Mishnayot">$720 - Silver Page 100 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Full Page 50 Mishnayot"
                        data-paypal-amount="500.00"
                        data-paypal-num="1"
                        value="Full Page 50 Mishnayot">$500 - Full Page 50 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Half Page 25 Mishnayot"
                        data-paypal-amount="360.00"
                        data-paypal-num="1"
                        value="Half Page 25 Mishnayot">$360 - Half Page 25 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Quarter Page 10 Mishnayot"
                        data-paypal-amount="250.00"
                        data-paypal-num="1"
                        value="Quarter Page 10 Mishnayot">$250 - Quarter Page 10 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Eighth Page 5 Mishnayot"
                        data-paypal-amount="125.00"
                        data-paypal-num="1"
                        value="Eighth Page 5 Mishnayot">$125 - Eighth Page 5 Mishnayot</option>

                <option data-paypal-item="Mishna Neshama Siyum - Greeting"
                        data-paypal-amount="72.00"
                        data-paypal-num="1"
                        value="Greeting">$72 - Greeting</option>

              </select>
            </div>
            <label for="other" class="col-sm-3 control-label">
              Other Amount
            </label>
            <div class="col-sm-3">
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input id="other" type="number" name="other"
                       class="form-control"
                       value="0.00" min="0.00" step="0.01"
                       data-gdocs="entry.2055518957"
                       data-paypal-item="Mishna Neshama Siyum - Other"
                       data-paypal-num="1" />
              </div>
            </div>

            <div class="col-sm-12">
              <span class="help-block">
                <!-- <strong>Ads of $720 or more entitle donor to dinner reservations
                for two.</strong><br />  -->Your ad can be tax-deductible as a charitable
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
                <a href="mailto:siyum@bethisraelmalden.org">siyum@bethisraelmalden.org</a>.
              </span>
            </div>
          </div>
        </div>
      </div>

      <hr />
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-3">
          <input id="notme" type="hidden" value="0" />
          <input id="payment_method" type="hidden" value="PayPal"
                 data-gdocs="entry.391920344" />
          <button type="submit" value="PayPal" class="btn btn-lg btn-primary">Pay Now (Credit Card or PayPal)</button>
          <button type="submit" value="Cash" class="btn btn-lg btn-default">Pledge and Pay Later</button>
        </div>
      </div>
    </form>
  </div>

  <div class="page-siyum container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>
          The theme of this event is "Mishna/
          Neshama: Raising Our Community". Beth
          Israel of Malden seeks to enrich and
          uplift the lives of our entire community.
        </h3>
        <p>
          We are made of body and soul. Although the body
          eventually ceases to function, the soul lives on in
          the Afterlife. The actions of the living can positively
          affect the soul. When we do mitzvot in memory of a
          departed soul, the soul ascends to a higher level of
          closeness to G-d in Heaven. <strong>The Mishna raises the
          souls of those who study it and the souls of the
          departed in whose memory it is studied.</strong>
        </p>

        <h3>What is Mishna?</h3>
        <p>
          Mishna is a fundamental part of the study of Torah. Mishna elucidates the Chumash. Talmud elucidates the Mishna.
        </p><p>
          Mishna consist of 6 orders. Each order contains tractates. Each tractate consists of chapters. Each chapter consists of individual sections that are called a mishna in singular form and mishnayot in plural form.
        </p>

        <h3>Why Mishna?</h3>
        <p>
          The study of Mishna has a particularly unique effect
          on a soul. Mishna is the soul of Torah. As the soul
          gives the energy of life to the body, Mishna gives light
          to the Five Books of the Torah and life to the Talmud.
        </p>

        <h3>What is a Siyum?</h3>
        <p>The completion of an entire order is considered a significant accomplishment and is celebrated with a siyum which means completion. When the entire six orders of Mishna are completed the celebration is even greater for this entire fundamental body of Torah has been completed.</p>

        <h3>How can I participate?</h3>
        <p>You can participate in our Siyum by making a dedication in our journal to commemorate a departed loved one, or even just for the merit of participating in this special event. Participating in a siyum is considered like participating in the study of the Torah that was completed. Therefore, this is a unique opportunity to bring a special merit to the soul of a departed loved one by making a dedication in their memory.</p>

        <h3>A Meaningful Memorial</h3>
        <p>
          There is a well established practice to study Mishna in
          particular for the soul of someone who has departed,
          because Mishna has its unique power to bring
          ascension to the soul. This is alluded to by the fact that
          the Hebrew letters that spell the word Mishna <strong>ה,נ,ש,מ</strong>
          also spell neshama <strong>נשמה</strong> ,the Hebrew word for soul.
          Since participating in a Siyum of Mishna is considered
          like studying it, donating in honor of this event is a
          unique way to memorialize a loved one.
        </p>

        <big style="color: #ac723a">
          <strong>Please consider making a contribution in
          the name of a loved one. Your donation will
          directly support Jewish community growth
          and Torah study in Malden.</strong>
        </big>

        <hr />
        <h3>Tribute Committee</h3>
        <div class="col-sm-6">
          Bostoner Rebbe <br />
          Rabbi Naftoli Bier <br />
          Rabbi Gershon Segal <br /><br />

          Barton Brass <br />
          Harvey and Reva Gertel <br />
          Barry and Sandy Goldman <br />
          Harvey and Arlene Goldman
        </div>
        <div class="col-sm-6">
          Dr. Jesse and Brenda Hefter <br />
          Jay and Cheryl Lamport <br />
          Dovid and Penina Rosengard <br />
          Dr. David and Miri Rosmarin <br />
          Susan and Larry Weiner
        </div>
      </div>
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

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min.js"></script>

<script>
  $('html').removeClass('no-js');

  $('[data-reldate]').each(function () {
    var $this = $(this),
      reldate = moment($this.data('reldate'));
    $this
      .attr('title', reldate.format('ddd, D MMM YYYY h:mm a'))
      .text(reldate.fromNow())
      .removeClass('stop-fouc');
  });

  var app = {
      $pay: $('#payment_method'),
      $rsvp: $('#rsvp'),
      $paypal: $('#paypal')
    };

  app.init = function () {
    app.$rsvp
      .submit(app.submit)
      .find(':input:first').focus().end()
      .find('[type=submit]')
        .click(function () {
          //$(this).button('loading');
          app.$pay.val($(this).val()); // update payment method
          // app.$rsvp.find('[type=submit]').attr('disabled', true);
        })
      .end();
    return app;
  };

  app.skipUnchecked = function ($field) {
    return $field.is(':checkbox,:radio,option') && !$field.is(':checked');
  };

  app.build_paypal = function (isInterested) {
    var num = 0,
      isFamilyMax = ('1' === $('#family_max').val()),
      pdata = {};

    if (!isInterested) { return true; } // nothing to do

    app.$rsvp.find('[data-paypal]').each(function () {
      var $field = $(this);
      if (app.skipUnchecked($field)) { return; }
      pdata[$field.data('paypal')] = $field.val();
    });// initial paypal data

    app.$rsvp.find('[data-paypal-item]').each(function () {
      var $field = $(this);
      if (app.skipUnchecked($field)) { return; }
      if (isFamilyMax && 'skip' === $field.data('family-max')) { return; }

      var quant = parseInt($field.data('paypal-num') || $field.val() || 0, 10);
      var amount = parseFloat($field.data('paypal-amount') || $field.val() || 0, 10);

      /** Special Dinner Rules **/
      var usdLevel = parseInt($('#level :selected').data('paypal-amount'), 10);
      var usdOther = parseFloat($('#other').val(), 10);
      var hasFreeSeats = (usdLevel >= 720 || usdOther >= 720);
      if ('guests' === $field.attr('id') && hasFreeSeats) {
        quant = Math.max(0, quant - 2);
      }//end if: free banquet for two
      /** END SPECIAL RULES **/

      if (0 !== quant && 0 !== amount) {
        num += 1;
        pdata['item_name_' + num] = $field.data('paypal-item');
        pdata['amount_' + num] = ('' + amount);
        pdata['quantity_' + num] = ('' + quant);
      }//end if: added field
    });// paypal item data

    if (0 === num) {
      //app.$rsvp.find('input[type=submit]').button('reset');
      alert('No items selected.');
      return false;
    }//end if: nothing selected

    $.each(pdata, function (k, v) {
      app.$paypal.append(
        '<input type="hidden" name="{k}" value="{v}" />'
        .replace('{k}', k).replace('{v}', v)
      );
    });// paypal form built

    return true;
  };

  app.submit_gdocs = function (isInterested) {
    var
      isCash = ('Cash' === app.$pay.val() || 'Pay Later' === app.$pay.val()),
      gdata = {
        pageHistory: 0,
        draftResponse: '[,,&quot;-123456789&quot;]',
        fbzx:'-132456789'
      };

    app.$rsvp.find('[data-gdocs]').each(function () {
      var $field = $(this);
      if (app.skipUnchecked($field)) { return; }
      gdata[$field.data('gdocs')] = $field.data('gdocs-value') || $field.val();
    });// gdata ready

    // $.post(app.$rsvp.data('gdocs'), gdata) // gdata posted
    $.ajax({
      type: 'POST',
      url: app.$rsvp.data('gdocs'),
      data: gdata,
      global: false
    })
    .always(function () {
      if (!isInterested || isCash) {
        window.location = location.href + '&thankyou=1';
      } else {
        app.$paypal.submit();
      }//end if: redirected
    });

    return true; // always works
  };

  app.submit = function (e) {
    e.preventDefault(); // nowhere to go
    var notme = $('#notme,[name=notme]:checked').val();
    var isInterested = ('0' === notme || 'Yes' == notme);
    if (!app.build_paypal(isInterested)) { return false; }
    if (!app.submit_gdocs(isInterested)) { return false; }
    return false;
  };

  $(app.init); // initialize
  window.app = app;
</script>

<?php
get_footer();
