define(function (require) {
  'use strict';
  require('transparency');
  var $ = require('jquery'),
    app = require('app/app'),
    moment = require('moment'),
    url = {
      eruv: 'http://bethisraelmalden.org/api/eruv/status.php?callback=?',
      calendar: 'http://bethisraelmalden.org/api/calendar/upcoming.php?callback=?'
    };

  $.getJSON(url.calendar).done(function(data) {
    var events = [],
      tmp_day = '',
      tmp_events = [];

    $.each(data.events, function (idx, item) {
      var t = moment(item.when),
        day = t.format('dddd, MMMM Do');

      if (day != tmp_day) { // new day
        if (tmp_day) { events.push({day: tmp_day, events: tmp_events}); }
        tmp_day = day;
        tmp_events = [];
      }//end if

      tmp_events.push({when: t.format('hh:mma'), title: item.title});
    });//end $.each

    if (tmp_day) { events.push({day: tmp_day, events: tmp_events}); }//end if

    $('#upcoming')
      .find('.loading').remove().end()
      .render(events);
  });//end $.getJSON

  $.getJSON(url.eruv).done(function(tweets) {
    var
      tweet = tweets[0],
      dtNow = moment(),
      dtPost = moment(tweet.created_at),
      text = tweet.text.replace('\u00a0', ' '), // scrub weird text
      status = text.slice(0, text.indexOf(' '));

    $('.eruv-status .loading').remove();
      
    if(dtNow.diff(dtPost, 'days') > 1) { // No Update
      $('#eruv-status').text('');
      $('#eruv-info').html(
        '<a href="https://twitter.com/maldeneruv/">No Update</a>'
      );
    } else { // Updated
      $('#eruv-status').text(status);
      $('#eruv-info').html(
        '<a href="https://twitter.com/maldeneruv/status/' + tweet.id_str
          + '">' + dtPost.fromNow() + '</a>'
      );
    }//end if: check for updates
  });//end: $.getJSON
});
