define(function (require) {
  'use strict';
  require('jquery-chosen');
  var $ = require('jquery'),
    app = require('app/app'),
    readhash = function (option) {
      option = option || location.hash.substring(1);
      if (option) {
        $('#item')
          .val(option)
          .change()
          .trigger('chosen:updated');
      }//end if
      return option;
    };

  $('#item')
    .change(function () { // Update amount when the item changes.
      $('#amount').val($('#item').find(':selected').data('price'));
    }).chosen({
      width: '100%',
      search_contains: true
    });

  if (readhash()) { $('#first').focus(); }

  // Update item and amount when clicking on a dedication item.
  $('#dedications a').click(function (e) {
    readhash($(this).text());
  });

  $('form').on('reset', function () {
    $('#item')
      .val('General Donation')
      .trigger('chosen:updated');
    });
});
