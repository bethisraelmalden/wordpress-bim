/*jslint indent: 2, maxlen: 120, browser: true */
/*global requirejs, require, define */
requirejs.config({
  paths: {
    /** Bootstrap */
    'bootstrap': '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min',
    'bootstrap-datepicker': '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min',

    /** jQuery */
    'jquery': '//code.jquery.com/jquery.min',
    'jquery-ui': '//code.jquery.com/ui/1.10.3/jquery-ui',

    'moment': '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min',

    /** requireJS */
    'text': '//cdnjs.cloudflare.com/ajax/libs/require-text/2.0.10/text'
  },

  shim: {
    'bootstrap': ['jquery'],
    'boostrap-datepicker': ['bootstrap'],
    'jquery-ui': ['jquery']
  }
});

define(function (require) {
  'use strict';
  require('bootstrap');
  require('moment');
  var $ = require('jquery'),
    app = { version: '0.0.1pre' };

  $('html').removeClass('no-js');

  $('[data-reldate]').each(function () {
    var $this = $(this),
      reldate = moment($this.data('reldate'));
    $this
      .attr('title', reldate.format('ddd, D MMM YYYY h:mm a'))
      .text(reldate.fromNow())
      .removeClass('stop-fouc');
  });

  return app;
});
