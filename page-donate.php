<?php
wp_enqueue_style('chosen', '//cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.min.css');
wp_enqueue_style('chosen-bootstrap', get_template_directory_uri() . '/lib/chosen-bootstrap-0.0.2/chosen-bootstrap.css');
get_header(); ?>
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

        <div class="form-group">
          <label for="item" class="col-sm-3 control-label">Item</label>
          <div class="col-sm-9">
            <select id="item" name="item_name_1" class="form-control chosen">
              <optgroup label="Funds">
                <option data-price="0" value="General Donation" selected="selected">General Donation</option>
                <option data-price="0" value="Pulpit Fund">Rabbi's Pulpit Fund</option>
                <option data-price="0" value="Mikvah Fund">Mikvah Fund</option>
              </optgroup>
              <optgroup label="Learning">
                <option data-price="18" value="Day of Learning">$18 - Day of Learning</option>
                <option data-price="72" value="Book Dedication">$72 - Sefer / Book Dedication</option>
                <option data-price="100" value="Week of Learning">$100 - Day of Learning</option>
              </optgroup>
              <optgroup label="Sponsorships">
                <option data-price="5" value="Breakfast">$5 - Breakfast</option>
                <option data-price="18" value="Week of Breakfast">$18 - Week of Breakfast</option>
                <option data-price="36" value="Seudah Shelishit">$36 - Seudah Shelishit</option>
                <option data-price="54" value="Kiddush">$54 - Kiddush</option>
                <option data-price="144" value="Luncheon">$144 - Luncheon</option>
              </optgroup>
              <optgroup label="Seasonal">
                <option data-price="0" value="Matanot l'Evyonim">Matanot l'Evyonim (Purim)</option>
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

        <div class="form-group">
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
          <div class="col-sm-10 col-sm-offset-3">
            <button type="submit" class="btn btn-lg btn-primary">Go to Checkout</button>
            <button type="reset" class="btn btn-danger btn-link pull-right">Reset Form</button>
          </div>
        </div>
      </form>

    </div><div class="col-sm-4">
      <h3 class="text-center">Mikvah Mayanei Tovah<br /><small>Dedication Opportunities</small></h3>
      <ul id="dedications" class="list-unstyled">
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
        <li><span class="price">$3,600</span> &ndash; <a href="#Mezuzah">Mezuzah</a> (4) <span class="status">1 Taken</span></li>
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

<script src="<?php echo get_template_directory_uri(); ?>/lib/requirejs-2.1.9/require.js"></script>
<script>
requirejs.config({baseUrl: '<?php echo get_template_directory_uri(); ?>'});
require(['app/app'], function (app) { require(['app/donate']); });
</script>
<?php
get_footer();
