/**
 * Security Elementor widgets, front end: the Mailchimp signup form, the about
 * and exhibition carousels, the gallery and the counters. No jQuery.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  //  Mailchimp ajax
  UI.ajaxChimp('#mc_embed_signup form');

  // About widget owlCarousel
  UI.owl('.active-about-carusel', {
    items: 1,
    loop: true,
    margin: 30,
    dots: true
  });

  // Exibition widget owlCarousel
  UI.owl('.active-exibition-carusel', {
    items: 3,
    margin: 30,
    autoplay: true,
    loop: true,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  //  Gallery
  UI.justifiedGallery('#grid-container', {
    rowHeight: 200,
    captions: false,
    margins: 30
  });

  //  Counter Js
  if (document.querySelector('.facts-area')) {
    UI.counter('.counter', { time: 1000 });
  }
}());
