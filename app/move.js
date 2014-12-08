define(function (require) {
  'use strict';
  var
    $ = require('jquery');

  $('#visit').submit(function (e) {
    e.preventDefault(); // nowhere to go

    var
      $visit = $(this),
      gdata = {
        formkey: 'dHY4c3BKZDRiN2dhZlo2M1hEYVk3Tmc6MQ',
        embedded: true,
        ifq: ''
        //pageHistory: 0,
        //draftResponse: '[,,&quot;-123456789&quot;]',
        //fbzx:'-132456789'
      };

    $visit
      .find('.btn').button('submit').end()
      .find('[data-gdocs]').each(function () {
        var $field = $(this);
        gdata[$field.data('gdocs')] = $field.val();
      });// gdata ready

    $.post($visit.data('gdocs'), gdata) // gdata posted
      .done(function () {
        $visit
          .find('.btn').button('reset').end()
          .find('.alert').removeClass('hidden').end()
          .find('[type="text"]').text('').end();
      });

    return false;
  });
});
