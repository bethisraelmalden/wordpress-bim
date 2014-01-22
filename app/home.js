define(function (require) {
  'use strict';
  var $ = require('jquery'),
    app = require('app/app'),
    moment = require('moment'),
    eruv_url = 'http://bethisraelmalden.org/api/eruv/status.php?callback=?';

  $.getJSON(eruv_url).done(function(tweets) {
    var
      tweet = tweets[0],
      dtNow = moment(),
      dtPost = moment(tweet.created_at),
      text = tweet.text.replace('\u00a0', ' '),
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
