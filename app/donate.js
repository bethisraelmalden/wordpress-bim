define(function (require) {
  'use strict';
  require('jquery-chosen');
  var $ = require('jquery'),
    app = require('app/app'),

    $item = $('#item'),
    $amount = $('#amount_1'),
    $firstname = $('#first_name'),

    readhash = function (option) {
      option = option || decodeURIComponent(location.hash.substring(1));
      if (option) { $item.val(option).change().trigger('chosen:updated'); }
      return option;
    };

  $item.change(function () { // Update amount when the item changes.
    $amount.val($item.find(':selected').data('price'));
  }).chosen({ width: '100%', search_contains: true });

  if (readhash()) { $firstname.focus(); }

  $('form').on('reset', function () { // Reset chosen when form is reset.
    $item
      .val('General Donation')
      .trigger('chosen:updated');
  });

  // Update item and amount when clicking on a dedication item.
  $('#dedications a').click(function (e) { readhash($(this).text()); });
});
