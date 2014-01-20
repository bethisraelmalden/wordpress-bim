define(function (require) {
  'use strict';
  require('moment');
  var app = require('app/app'),
    //eruv_url = 'http://bethisraelmalden.org/api/eruv/status.php';
    eruv_url = 'http://localhost/repos/bethisraelmalden.org/api/eruv/status.php';

  $.getJSON(eruv_url).done(function(tweets) {
    var
      tweet = tweets[0],
      dtNow = momen(),
      dtPost = moment(tweet.created_at),
      text = tweet.text,
      status = text.slice(0, text.indexOf(' '));

    if(dtNow.diff(dtPost, 'days') > 1) {
      $('#eruv-status').text('Checking...');
      $('#eruv-info')
        .html('<a href="https://twitter.com/maldeneruv">twitter</a>');
    } else {
      $('#eruv-status').text(status);
      $('#eruv-info').html(
        '<a href="https://twitter.com/maldeneruv/status/' + tweet.id_str
        + '">' + dtPost.fromNow() + '</a>'
      );
    }//end if: newer than 24 hours
  });//end: $.getJSON
});
