/**
 * @file
 * Defines Javascript behaviors for the tocify module.
 */

(function ($, Drupal, drupalSettings) {

"use strict";

Drupal.behaviors.nodeDetailsSummaries = {
  attach: function (context) {

    var toc = $("#tocify").tocify({
      selectors: "h2,h3,h4,h5",
      context: '.node__content'
    });

  }
};

})(jQuery, Drupal, drupalSettings);

