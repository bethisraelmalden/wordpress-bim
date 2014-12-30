define(function (require) {
  'use strict';
  var
    $ = require('jquery'),
    app = {
      $pay: $('#payment_method'),
      $rsvp: $('#rsvp'),
      $paypal: $('#paypal')
    };

  app.init = function () {
    app.$rsvp
      .submit(app.submit)
      .find(':input:first').focus().end()
      .find('input[type=submit]')
        .click(function () {
          app.$pay.val($(this).val()); // update payment method
        })
      .end();
    return app;
  };

  app.build_paypal = function (isInterested) {
    var num = 0,
      isFamilyMax = ('1' === $('#family_max').val()),
      pdata = {};

    if (!isInterested) { return true; } // nothing to do

    app.$rsvp.find('[data-paypal]').each(function () {
      var $field = $(this);
      if ($field.is(':checkbox') && !$field.is(':checked')) { return; }
      pdata[$field.data('paypal')] = $field.val();
    });// initial paypal data

    app.$rsvp.find('[data-paypal-item]').each(function () {
      var $field = $(this);
      if ($field.is(':checkbox') && !$field.is(':checked')) { return; }
      if (isFamilyMax && 'skip' === $field.data('family-max')) { return; }
      if (0 !== parseInt($field.val(), 10)) {
        num += 1;
        pdata['item_name_' + num] = $field.data('paypal-item');
        pdata['amount_' + num] = $field.data('paypal-amount');
        pdata['quantity_' + num] = $field.val();
      }//end if: added field
    });// paypal item data

    if (0 === num) {
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
      isCash = ('Cash' === app.$pay.val()),
      gdata = {
        pageHistory: 0,
        draftResponse: '[,,&quot;-123456789&quot;]',
        fbzx:'-132456789'
      };

    app.$rsvp.find('[data-gdocs]').each(function () {
      var $field = $(this);
      if ($field.is(':checkbox') && !$field.is(':checked')) { return; }
      gdata[$field.data('gdocs')] = $field.val();
    });// gdata ready

    $.post(app.$rsvp.data('gdocs'), gdata) // gdata posted
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
    var isInterested = ('0' === $('#notme').val());
    if (!app.build_paypal(isInterested)) { return false; }
    if (!app.submit_gdocs(isInterested)) { return false; }
    return false;
  };

  $(app.init); // initialize
});
