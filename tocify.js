/**
 * @file
 * Defines Javascript behaviors for the tocify module.
 */

(function ($, Drupal, drupalSettings) {

"use strict";

Drupal.behaviors.tocify = {
  attach: function (context) {
    var toc = $('#tocify').tocify({
      context: '.node__content'
    });
  }
};

})(jQuery, Drupal, drupalSettings);
