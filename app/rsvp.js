define(function (require) {
  'use strict';
  var
    $ = require('jquery'),
    $pay = $('#payment_method');

  $('#rsvp input[type=submit]').click(function() { $pay.val($(this).val()); });

  $('#rsvp').submit(function (e) {
    e.preventDefault(); // nowhere to go

    var
      $rsvp = $(this),
      $paypal = $('#paypal'),
      isCash = ('Cash' === $pay.val()),
      num = 0,
      pdata = {},
      gdata = {
        pageHistory: 0,
        draftResponse: '[,,&quot;-123456789&quot;]',
        fbzx:'-132456789'
      };

    $rsvp.find('[data-paypal]').each(function () {
      var $field = $(this);
      pdata[$field.data('paypal')] = $field.val();
    });// initial paypal data

    $rsvp.find('[data-paypal-item]').each(function () {
      var $field = $(this);
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
      $paypal.append(
        '<input type="hidden" name="{k}" value="{v}" />'
        .replace('{k}', k).replace('{v}', v)
      );
    });// paypal form built

    $rsvp.find('[data-gdocs]').each(function () {
      var $field = $(this);
      gdata[$field.data('gdocs')] = $field.val();
    });// gdata ready

    $.post($rsvp.data('gdocs'), gdata) // gdata posted
      .always(function () {
        if (isCash) {
          window.location = location.href + '&thankyou=1';
        } else {
          $paypal.submit();
        }//end if: redirected
      });

    return false;
  });
});
