define(function (require) {
  'use strict';
  require('jquery-chosen');
  var $ = require('jquery'),
    app = require('app/app');

  $('.chosen').chosen({width: '100%', search_contains: true});

  // Update amount when the item changes.
  $('#item').change(function () {
    $('#amount').val($(this).find(':selected').data('price'));
  });//end .change


  // Update item and amount when clicking on a dedication item.
  $('#dedications a').click(function (e) {
    var $this = $(this),
      itemName = $this.text(),
      itemPrice = $this.prevAll('.price')
                       .text()
                       .substring(1)
                       .replace(',', '');

    e.preventDefault();
    $('#item').val(itemName).trigger('chosen:updated');
    $('#amount')
      .val(itemPrice)
      .focus();
  });

});
