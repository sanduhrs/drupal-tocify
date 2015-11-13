/**
 * @file
 * Defines Javascript behaviors for the tocify module.
 */

(function ($, Drupal, drupalSettings) {

"use strict";

Drupal.behaviors.nodeDetailsSummaries = {
  attach: function (context) {

    var toc = $("#tocify").tocify({
      context: '.node__content',
      selectors: 'h2,h3,h4,h5,h6',
      showAndHide: true,
      showEffect: 'slideDown',
      showEffectSpeed: 'medium',
      hideEffect: 'none',
      hideEffectSpeed: 'medium',
      smoothScroll: true,
      scrollTo: 95,
      showAndHideOnScroll: true,
      highlightOnScroll: true,
      highlightOffset: 40,
      theme: 'none',
      extendPage: true,
      extendPageOffset: 100,
      history: true,
      hashGenerator: 'compact',
      highlightDefault: true,
      ignoreSelector: '.comment-form__title',
      scrollHistory: false
    });
    toc.parent().parent()
        .css('overflow', 'auto')
        .css('height', '80%');

  }
};

})(jQuery, Drupal, drupalSettings);

