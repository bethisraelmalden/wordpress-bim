<?php case '2015-gamenight': ?>
  <h1>January 2015 - Game Night</h1>
  <div class="row">
    <form id="rsvp" class="form col-sm-4" method="POST"
          data-gdocs="https://docs.google.com/forms/d/1yW8WDgYejESPIuvbL9sqlvn4AqhgTdydmhYdKSCgC6U/formResponse">
      <div class="form-group">
        <label for="first_name" class="control-label">First Name</label>
        <input id="first_name" type="text" name="first_name"
               value="<?php echo $_GET['fname']?>" class="form-control"
               data-gdocs="entry.1394265091"
               data-paypal="first_name" />
      </div>
      <div class="form-group">
        <label for="last_name" class="control-label">Last Name</label>
        <input id="last_name" type="text" name="last_name"
               value="<?php echo $_GET['lname']?>" class="form-control"
               data-gdocs="entry.2116404569"
               data-paypal="last_name" />
      </div>
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input id="email" type="email" name="email"
               value="<?php echo $_GET['email']?>" class="form-control"
               data-gdocs="entry.1677663896"
               data-paypal="email" />
      </div>
      <?php if('1' == $_GET['notme']): ?>
      <div class="form-group">
        <input id="notme" type="hidden" value="1" />
        <input id="adults" type="hidden" name="adults"
               value="Not Interested" data-gdocs="entry.1212927425" />
        <input id="payment_method" type="hidden" value=""
               data-gdocs="entry.1104698442" />
        <input type="submit" value="Not Interested" class="btn btn-primary" />
        <p class="help-block">Please confirm you're not interested.</p>
      </div>
      <?php else: ?>
      <div class="form-group">
        <label for="adults" class="control-label"># Attending ($5 each)</label>
        <input id="adults" type="number" name="adults"
               class="form-control"
               value="0" min="0" step="1"
               data-gdocs="entry.1212927425"
               data-paypal-item="Game Night"
               data-paypal-amount="5.00" />
        <p class="help-block">Includes all you can eat pizza!</p>
      </div>
      <div class="form-group">
        <label for="games" class="control-label">
          Which games will you bring?
        </label>
        <textarea id="games" name="games" class="form-control"
                  data-gdocs="entry.472182146" rows="4"></textarea>
        <p class="help-block">
          Please mark any games you bring so you can take it home afterwards.
        </p>
      </div>
      <div class="form-group">
        <input id="notme" type="hidden" value="0" />
        <input id="payment_method" type="hidden" value="PayPal"
               data-gdocs="entry.1104698442" />
        <input type="submit" value="PayPal" class="btn btn-primary" />
        <input type="submit" value="Cash" class="btn btn-default" />
      </div>
      <?php endif; ?>
    </form>
    <div class="col-sm-6 text-center">
      <a href="http://bethisraelmalden.org/2015/01/game-pizza-night/">
        <img src="http://bethisraelmalden.org/wp-content/uploads/2015/01/Game-Night-e1420776222368.png" />
      </a>
    </div>
  </div>
<?php break; case '2015-shabbaton': ?>
