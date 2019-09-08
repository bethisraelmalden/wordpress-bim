<?php
wp_enqueue_style('Calligraffitti', '//fonts.googleapis.com/css?family=Calligraffitti');
wp_enqueue_style('Cabin', '//fonts.googleapis.com/css?family=Cabin');
wp_enqueue_style('chosen', '//cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.min.css');
wp_enqueue_style('chosen-bootstrap', get_template_directory_uri() . '/lib/chosen-bootstrap-0.0.2/chosen-bootstrap.css');
get_header(); ?>
<?php if ($_GET['end-of-year']): ?>
<div id="content" class="container end-of-year">
  <p class="lead text-center">
    <span class="text-muted">There is still time to</span><br />
    <strong>make a difference</strong>.
  </p>
  <div class="col-sm-10 col-sm-offset-1">
    <div class="feature">
      <h2>
        <span class="text-muted">Every Gift</span> Matters
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/donate/ice-cream.jpg" class="pull-right img-thumbnail" />
      <p>
        You still have time to make a year-end tax deductible gift to BIM and be a partner in all of the work that we do to support the Malden Jewish community and Boston's Jewish community at large.
      </p>

      <br />
      <form class="form-inline well pull-left" action="https://www.paypal.com/cgi-bin/webscr" method="POST">
        <input type="hidden" name="return" value="http://bethisraelmalden.org" />
        <input type="hidden" name="business" value="director@bethisraelmalden.org" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="hidden" name="cmd" value="_cart" />
        <input type="hidden" name="upload" value="1" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="charset" value="utf-8" />
        <input type="hidden" name="mrb" value="3FWGC6LFTMTUG"/>
        <input type="hidden" name="quantity_1" value="1" />
        <input type="hidden" name="item_number" value="" />
        <input type="hidden" name="shipping_1" value="0.00" />
        <input type="hidden" name="cn" value="Add a note" />
        <input type="hidden" name="no_note" value="0" />
        <input type="hidden" name="no_shipping" value="1" />

        <div class="form-group">
          <select name="item_name_1" class="form-control chosen">
            <option>Mikvah Fund</option>
            <option>Pulpit Fund</option>
            <option>Building Fund</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">$</div>
              <input type="text" name="amount_1" class="form-control" placeholder="Amount">
            <div class="input-group-addon">.00</div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Donate</button>
      </form>

      <p style="clear:left; font-size:98%">
        Want to donate by mail?<br />
        Send checks to 10 Dexter Street, Malden, MA 02148
      </p>
    </div>
    <hr />

    <div class="feature">
      <h2>
        <span class="text-muted">Spread</span> Spiritual Growth
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/donate/seed-learning.jpg" class="pull-left img-thumbnail" />
      <p>Keeping our doors open allows us to serve not only the Malden community but people from surrounding communities and out of state. Our daily minyanim and numerous Torah classes create an environment in which people can grow spiritually at a pace that suits their needs.</p>
      <p>Our partnership with JPULSE has brought in two dynamic families who are connecting with a growing number of unaffiliated young Jewish professionals.</p>
    </div>
    <hr style="clear: both" />

    <div class="feature">
      <h2>
        <span class="text-muted">Support</span> Our Mikvah
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/move/mikvah-pool.jpg" class="pull-right img-thumbnail" />
      <p>Our mikvah, <strong>Mayanei Tovah</strong>, is used by communities all around Malden, recently tripling the number of initially projected monthly users. There are still naming opportunities left  - you can be a significant contributor to this important mitzvah by making a dedication in your name or the name of a loved one!</p>
    </div>
    <hr style="clear: both" />

    <div class="feature">
      <h2>
        <span class="text-muted">Help</span> Jewish Education
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/img/donate/puzzle-work.jpg" class="pull-left img-thumbnail" />
      <p>Through the Congregation Beth Israel of Malden Ruderman Family Endowment Fund, we continue to provide  significant financial support to a number of Orthodox Jewish schools in the Boston area.</p>
      <br />
    </div>
    <hr style="clear: both" />

    <h2 class="text-center">
      <span class="text-muted">Thank You</span> for your Generous Support
    </h2>
    <div class="center-block" style="max-width: 45em;">
      <form class="form-inline well text-center center-block" action="https://www.paypal.com/cgi-bin/webscr" method="POST">
          <input type="hidden" name="return" value="http://bethisraelmalden.org" />
          <input type="hidden" name="business" value="director@bethisraelmalden.org" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="upload" value="1" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="mrb" value="3FWGC6LFTMTUG"/>
          <input type="hidden" name="quantity_1" value="1" />
          <input type="hidden" name="item_number" value="" />
          <input type="hidden" name="shipping_1" value="0.00" />
          <input type="hidden" name="cn" value="Add a note" />
          <input type="hidden" name="no_note" value="0" />
          <input type="hidden" name="no_shipping" value="1" />


          <div class="form-group">
            <select name="item_name_1" class="form-control chosen">
              <option>Mikvah Fund</option>
              <option>Pulpit Fund</option>
              <option>Building Fund</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">$</div>
                <input type="text" name="amount_1" class="form-control" placeholder="Amount">
              <div class="input-group-addon">.00</div>
            </div>
          </div>

          <button type="submit" class="btn btn-lg btn-primary">Donate Now</button>
        </form>
      </div>
  </div>
</div>
<?php else: ?>
<div id="content" class="container">
  <p class="lead text-center">
    Help the Jewish renaissance in Malden with your tax-deductible donation.
  </p>
  <div class="row">
    <div class="col-sm-5 col-sm-offset-2">
      <section class="donate-cash-check">
        <h2>Cash &amp; Check</h2>
        <p>Please send cash or checks to:</p>
        <address class="text-center">
          <strong>Congregation Beth Israel</strong><br>
          10 Dexter St<br>
          Malden, MA 02148
        </address>
      </section>
      <hr />

      <h2>Credit Cards</h2>
      <form class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="POST">
        <input type="hidden" name="return" value="http://bethisraelmalden.org" />
        <input type="hidden" name="business" value="director@bethisraelmalden.org" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="hidden" name="cmd" value="_cart" />
        <input type="hidden" name="upload" value="1" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="charset" value="utf-8" />
        <input type="hidden" name="mrb" value="3FWGC6LFTMTUG"/>
        <input type="hidden" name="quantity_1" value="1" />
        <input type="hidden" name="item_number" value="" />
        <input type="hidden" name="shipping_1" value="0.00" />
        <input type="hidden" name="cn" value="Add a note" />
        <input type="hidden" name="no_note" value="0" />
        <input type="hidden" name="no_shipping" value="1" />

        <div class="form-group">
          <label for="item" class="col-sm-3 control-label">Item</label>
          <div class="col-sm-9">
            <select id="item" name="item_name_1" class="form-control chosen">
              <optgroup label="Funds">
                <option data-price="0" value="General Donation" selected="selected">General Donation</option>
                <option data-price="0" value="Pulpit Fund">Rabbi's Pulpit Fund</option>
                <option data-price="0" value="Mikvah Fund">Mikvah Fund</option>
                <option data-price="0" value="Security Fund">Security Fund</option>
                <option data-price="0" value="Library Fund">Library Fund</option>
                <option data-price="0" value="Charidy Campaign">Charidy Campaign</option>
                <option data-price="0" value="Mishna Neshama Siyum">Mishna Neshama Siyum</option>
                <option data-price="0" value="Aliyah Pledge">Aliyah Pledge</option>
                <option data-price="0" value="School Bus">School Bus</option>
              </optgroup>
              <!--optgroup label="SEED Program">
                <option data-price="18" value="Chai (SEED)">$18 - Chai (SEED)</option>
                <option data-price="36" value="Double Chai (SEED)">$36 - Double Chai (SEED)</option>
                <option data-price="54" value="Triple Chai (SEED)">$54 - Triple Chai (SEED)</option>
                <option data-price="72" value="Donor (SEED)">$72 - Donor (SEED)</option>
                <option data-price="108" value="Benefactor (SEED)">$108 - Benefactor (SEED)</option>
                <option data-price="144" value="Luncheon (SEED)">$144 - Luncheon (SEED)</option>
                <option data-price="180" value="Day of Learning (SEED)">$180 - Day of Learning (SEED)</option>
                <option data-price="540" value="Week of Learning (SEED)">$540 - Week of Learning (SEED)</option>
              </optgroup-->
              <optgroup label="Learning">
                <option data-price="18" value="Day of Learning">$18 - Day of Learning</option>
                <option data-price="72" value="Sefer Dedication">$72 - Siddur/Chumash Dedication</option>
                <option data-price="54" value="Other Book Dedication">$54 - Other Book Dedication</option>
                <option data-price="100" value="Week of Learning">$100 - Week of Learning</option>
              </optgroup>
              <optgroup label="Sponsorships">
                <option data-price="5" value="Breakfast">$5 - Breakfast</option>
                <option data-price="18" value="Week of Breakfast">$18 - Week of Breakfast</option>
                <option data-price="18" value="School-Year-Kiddush">$18 - End of School Year Kiddush</option>
                <option data-price="54" value="Seudah Shelishit">$54 - Seudah Shelishit</option>
                <option data-price="72" value="Kiddush">$72 - Kiddush</option>
                <option data-price="90" value="Gala Kiddush">$90 - Gala Kiddush</option>
                <option data-price="120" value="Lavish Kiddush">$120 - Lavish Kiddush</option>
                <option data-price="250" value="Luncheon">$250 - Luncheon</option>
                <option data-price="500" value="Kiddush Pillar">$500 - Kiddush Pillar</option>
              </optgroup>
              <optgroup label="Seasonal">
                <option data-price="0" value="Matanot l'Evyonim">Matanot l'Evyonim (Purim)</option>
                <option data-price="0" value="Ma'ot Chitim">Ma'ot Chitim (Pesach)</option>
                <!--option data-price="0" value="Lulav/Etrog Set">Lulav/Etrog Set (Sukkot)</option-->
                <option data-price="0" value="Lag B'Omer">Lag B'Omer</option>
              </optgroup>
              <optgroup label="Mikvah Dedications">
                <option data-price="36000" value="Beit HaTevillah (Mikvah Room)">$36,000 - Beit HaTevillah (Mikvah Room)</option>
                <option data-price="25000" value="Preparation Room">$25,000 - Preparation Room</option>
                <option data-price="5000" value="Utility Room">$5,000 - Utility Room</option>
                <option data-price="5000" value="Door">$5,000 - Door</option>
                <option data-price="3600" value="Mezuzah">$3,600 - Mezuzah</option>
                <option data-price="2500" value="Plaque ($2,500)">$2,500 - Plaque</option>
                <option data-price="1800" value="Plaque ($1,800)">$1,800 - Plaque</option>
                <option data-price="1000" value="Plaque ($1,000)">$1,000 - Plaque</option>
                <option data-price="500" value="Plaque ($500)">$500 - Plaque</option>
                <option data-price="360" value="Plaque ($360)">$360 - Plaque</option>
              </optgroup>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="amount_1" class="col-sm-3 control-label">Amount</label>
          <div class="col-sm-5">
            <div class="input-group">
              <span class="input-group-addon" title="USD">$</span>
              <input id="amount_1" name="amount_1" type="number" class="form-control" value="0.00" min="0" step="0.01" />
            </div>
          </div>
        </div>

        <!-- div class="form-group">
          <label for="first_name" class="col-sm-3 control-label">First Name</label>
          <div class="col-sm-9">
            <input id="first_name" name="first_name" type="text" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <label for="last" class="col-sm-3 control-label">Last Name</label>
          <div class="col-sm-9">
            <input id="last_name" name="last_name" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="address1" class="col-sm-3 control-label">Address</label>
          <div class="col-sm-9">
            <input id="address1" name="address1" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="city" class="col-sm-3 control-label">City</label>
          <div class="col-sm-5">
            <input id="city" name="city" type="text" class="form-control" />
          </div>
          <label for="state" class="col-sm-1 control-label">State</label>
          <div class="col-sm-3">
            <select id="state" name="state" value="" class="form-control">
              <option value=""></option><option value="AA">AA</option><option value="AE">AE</option><option value="AK">AK</option><option value="AL">AL</option><option value="AP">AP</option><option value="AR">AR</option><option value="AS">AS</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DC">DC</option><option value="DE">DE</option><option value="FL">FL</option><option value="FM">FM</option><option value="GA">GA</option><option value="GU">GU</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MH">MH</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MP">MP</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="PR">PR</option><option value="PW">PW</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VI">VI</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="zip" class="col-sm-3 control-label">Zip</label>
          <div class="col-sm-9">
            <input id="zip" name="zip" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="night_phone_a" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-9">
            <input id="night_phone_a" name="night_phone_a" type="text" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input id="email" name="email" type="email" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label for="noteToSeller" class="col-sm-3 control-label">Note</label>
          <div class="col-sm-9">
            <input id="noteToSeller" name="noteToSeller" type="text" class="form-control" />
          </div>
        </div-->

        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-3">
            <button type="submit" class="btn btn-lg btn-primary">Donate Now</button>
            <!-- button type="reset" class="btn btn-danger btn-link pull-right">Reset Form</button-->
          </div>
        </div>
      </form>

    </div><div id="dedications" class="col-sm-4">
      <!--h3 class="text-center">SEED Program <br /><small>Dedication Opportunities</small></h3>
      <ul class="list-unstyled">
        <li><span class="price">$18</span> &ndash; <a href="#Chai (SEED)">Chai (SEED)</a></li>
        <li><span class="price">$36</span> &ndash; <a href="#Double Chai (SEED)">Double Chai (SEED)</a></li>
        <li><span class="price">$54</span> &ndash; <a href="#Triple Chai (SEED)">Triple Chai (SEED)</a></li>
        <li><span class="price">$72</span> &ndash; <a href="#Donor (SEED)">Donor (SEED)</a></li>
        <li><span class="price">$108</span> &ndash; <a href="#Benefactor (SEED)">Benefactor (SEED)</a></li>
        <li><span class="price">$144</span> &ndash; <a href="#Luncheon (SEED)">Luncheon (SEED)</a></li>
        <li><span class="price">$180</span> &ndash; <a href="#Day of Learning (SEED)">Day of Learning (SEED)</a></li>
        <li><span class="price">$540</span> &ndash; <a href="#Week of Learning (SEED)">Week of Learning (SEED)</a></li>
      </ul>
      <hr /-->
      <h3 class="text-center">Mikvah Mayanei Tovah<br /><small>Dedication Opportunities</small></h3>
      <ul class="list-unstyled">
        <li class="taken"><span class="price">$72,000</span> &ndash; Building <span class="status">Taken</span></li>
        <li><span class="price">$36,000</span> &ndash; <a href="#Beit HaTevillah (Mikvah Room)">Beit HaTevillah (Mikvah Room)</a></li>
        <li><span class="price">$25,000</span> &ndash; <a href="#Preparation Room">Preparation Room</a></li>
        <li class="taken"><span class="price">$20,000</span> &ndash; Reception <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$18,000</span> &ndash; Preparation Room <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$12,000</span> &ndash; Bor HaTachton <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$12,000</span> &ndash; Bor HaZeria <span class="status">Taken</a></li>
        <li class="taken"><span class="price">$12,000</span> &ndash; Bor HaShaka <span class="status">Taken</a></li>
        <li class="taken"><span class="price">$10,000</span> &ndash; Entrance <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$10,000</span> &ndash; Entrance Hallway <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$10,000</span> &ndash; Inner Hallway <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$10,000</span> &ndash; Dish Mikvah <span class="status">Taken</span></li>
        <li class="taken"><span class="price">$7,200</span> &ndash; Washing Stations <span class="status">Taken</span></li>
        <li><span class="price">$5,000</span> &ndash; <a href="#Utility Room">Utility Room</a></li>
        <li><span class="price">$5,000</span> &ndash; <a href="#Door">Door</a> (9) <span class="status">5 Taken</span></li>
        <li><span class="price">$3,600</span> &ndash; <a href="#Mezuzah">Mezuzah</a> (6) <span class="status">3 Taken</span></li>
        <li><span class="price">$2,500</span> &ndash; <a href="#Plaque ($2,500)">Plaque ($2,500)</a></li>
        <li><span class="price">$1,800</span> &ndash; <a href="#Plaque ($1,800)">Plaque ($1,800)</a></li>
        <li><span class="price">$1,000</span> &ndash; <a href="#Plaque ($1,000)">Plaque ($1,000)</a></li>
        <li><span class="price">$500</span> &ndash; <a href="#Plaque ($500)">Plaque ($500)</a></li>
        <li><span class="price">$360</span> &ndash; <a href="#Plaque ($360)">Plaque ($360)</a></li>
      </ul>
      <div class="text-center">
        <big>Thank you for your generous support!</big>
      </div>
    </div>
  </div>
</div>
<?php endif ?>

<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/donate']); });
</script>
<?php
get_footer();
