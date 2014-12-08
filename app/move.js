define(function (require) {
  'use strict';
  var
    $ = require('jquery');

  $('#visit').submit(function (e) {
    e.preventDefault(); // nowhere to go

    var
      $visit = $(this),
      gdata = {
        pageHistory: 0,
        draftResponse: '[,,&quot;-123456789&quot;]',
        fbzx:'-132456789'
      };

    $visit
      .find('.btn').button('submit').end()
      .find('[data-gdocs]').each(function () {
        var $field = $(this);
        gdata[$field.data('gdocs')] = $field.val();
      });// gdata ready

    $.post($visit.data('gdocs'), gdata) // gdata posted
      .always(function () {
        $visit
          .find('.btn').button('reset').end()
          .find('.alert').removeClass('hidden').end()
          .find('[type="text"]').val('').end();
      });

    return false;
  });
});
