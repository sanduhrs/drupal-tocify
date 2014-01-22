/**
 * @file
 * Defines Javascript behaviors for the tocify module.
 */

(function ($, Drupal, drupalSettings) {

"use strict";

Drupal.behaviors.nodeDetailsSummaries = {
  attach: function (context) {
    var toc = $('#tocify').tocify({
      context: '.node'
    });
  }
};

})(jQuery, Drupal, drupalSettings);
