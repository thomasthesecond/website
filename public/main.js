function hasClass(el, className) {
  if (el.classList) {
    return el.classList.contains(className);
  }

  return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
}

function addClass(el, className) {
  if (el.classList) {
    el.classList.add(className);
  } else {
    el.className += " " + className;
  }
}

function removeClass(el, className) {
  if (el.classList) {
    el.classList.remove(className);
  } else {
    el.className = el.className.replace(new RegExp('(^|\\b)' +
      className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
  }
}

function toggleClass(el, className) {
  if (hasClass(el, className)) {
    removeClass(el, className);
  } else {
    addClass(el, className);
  }
}

function homePage() {
  var nav = document.querySelector(".js-nav");

  var swiper = new Swiper(".swiper-container", {
    pagination: ".swiper-pagination",
    direction: "vertical",
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
    effect: "fade",
    // parallax: true,
    onTransitionStart: function(swiper) {
      // Nav Nav-fixed headroom js-nav headroom--not-bottom headroom--pinned headroom--top
      // Nav Nav-fixed headroom js-nav headroom--not-bottom headroom--not-top headroom--unpinned

      // if (swiper.activeIndex === 0 && hasClass(nav, "headroom--unpinned")) {
      if (swiper.activeIndex === 0) {
        nav.classList.remove("headroom--unpinned");
      }

      // if (swiper.previousIndex === 0 && !hasClass(nav, "headroom--unpinned")) {
      if (swiper.previousIndex === 0) {
        nav.classList.add("headroom--unpinned");
      }
    },
    onTransitionEnd: function(swiper) {
      // console.log("onTransitionEnd", swiper.previousIndex);
      // console.log("onTransitionEnd", swiper.activeIndex);
      // if (swiper.activeIndex === parseInt(document.querySelector(".swiper-slide").dataset.index, 10)) {
      //   console.log("animate");
      // }
      // console.log(document.querySelector(".swiper-slide").dataset.index);

      document.querySelector(".slide-" + swiper.previousIndex)
        .classList.remove("animated");
      document.querySelector(".slide-" + swiper.previousIndex)
        .classList.add("not-animated");

      document.querySelector(".slide-" + swiper.activeIndex)
        .classList.remove("not-animated");
      document.querySelector(".slide-" + swiper.activeIndex)
        .classList.add("animated");
    },
    mousewheelControl: true
  });
}

function navigation() {
  var nav = document.querySelector(".js-nav");
  var hamburger = document.querySelector(".js-hamburger");
  var headroom = new Headroom(nav, {
    // offset: 205,
    // tolerance: 5
  });

  headroom.init();

  hamburger.addEventListener("click", function() {
    toggleClass(this, "is-active");
  });
}

(function() {
  "use strict";

  homePage();
  navigation();
}());
