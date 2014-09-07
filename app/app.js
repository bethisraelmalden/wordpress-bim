/*jslint indent: 2, maxlen: 120, browser: true */
/*global requirejs, require, define */
requirejs.config({
  paths: {
    /** Bootstrap */
    'bootstrap': '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min',
    //'bootstrap': '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min',
    'bootstrap-datepicker': '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min',

    /** jQuery */
    'jquery': '//code.jquery.com/jquery.min',
    'jquery-ui': '//code.jquery.com/ui/1.11.1/jquery-ui.min',
    'jquery-chosen': '//cdnjs.cloudflare.com/ajax/libs/chosen/1.0/chosen.jquery.min',

    /** requireJS */
    'text': '//cdnjs.cloudflare.com/ajax/libs/require-text/2.0.10/text',

    /** Vanilla JS */
    'moment': '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/moment.min',
    'transparency': 'lib/transparency-0.9.14/transparency.min'
  },

  shim: {
    'bootstrap': ['jquery'],
    'boostrap-datepicker': ['bootstrap'],
    'jquery-ui': ['jquery'],
    'jquery-chosen': ['jquery'],
    'transparency': ['jquery']
  }
});

define(function (require) {
  'use strict';
  require('bootstrap');
  var $ = require('jquery'),
    app = { version: '0.0.2' },
    moment = require('moment');

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
