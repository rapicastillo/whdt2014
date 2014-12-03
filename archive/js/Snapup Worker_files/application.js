// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// or vendor/assets/javascripts of plugins, if any, can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear at the bottom of the
// compiled file.
//
// Read Sprockets README (https://github.com/sstephenson/sprockets#sprockets-directives) for details
// about supported directives.
//
// require jquery
// require jquery_ujs

// require twitter/bootstrap
// require turbolinks
// require_tree .
// require flat-ui

/**
 * adds a bindGlobal method to Mousetrap that allows you to
 * bind specific keyboard shortcuts that will still work
 * inside a text input field
 *
 * usage:
 * Mousetrap.bindGlobal('ctrl+s', _saveChanges);
 */
/* global Mousetrap:true */

Mousetrap = (function(Mousetrap) {
    var _globalCallbacks = {},
        _originalStopCallback = Mousetrap.stopCallback;

    Mousetrap.stopCallback = function(e, element, combo, sequence) {
        if (_globalCallbacks[combo] || _globalCallbacks[sequence]) {
            return false;
        }

        return _originalStopCallback(e, element, combo);
    };

    Mousetrap.bindGlobal = function(keys, callback, action) {
        Mousetrap.bind(keys, callback, action);

        if (keys instanceof Array) {
            for (var i = 0; i < keys.length; i++) {
                _globalCallbacks[keys[i]] = true;
            }
            return;
        }

        _globalCallbacks[keys] = true;
    };

    return Mousetrap;
}) (Mousetrap);

$(function() {
  $(window).blur(function() {
    $('[rel=tooltip]').mouseleave();
  });

  $('#shortcut-info')
  .mouseenter(function() {
    $('[rel=tooltip][key]').mouseenter();
  })
  .mouseleave(function() {
    $('[rel=tooltip]').mouseleave();
  });

  Mousetrap.bind(['ctrl', 'command'], function() {
    $("[rel=tooltip][key^=command]").mouseenter();
    return false;
  }, 'keydown');

  Mousetrap.bind(['ctrl', 'command'], function() {
    $("[rel=tooltip][key^=command]").mouseleave();
    return false;
  }, 'keyup');
});
