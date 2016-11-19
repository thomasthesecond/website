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
  console.log("Home page");
  var nav = document.querySelector(".js-nav");

  var swiper = new Swiper(".HomeSwiper", {
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

function contactPage() {
  var button = document.querySelector(".js-submit");
  var form = document.querySelector(".js-form");
  var nameField = document.getElementById("name");
  var emailField = document.getElementById("email");
  var descriptionField = document.getElementById("description");
  var fields = [nameField, emailField, descriptionField];

  if (button && form) {
    button.addEventListener("click", function() {
      addClass(form, "has-validated");
    });
  }

  for (var i = 0; i < fields.length; i++) {
    if (fields[i]) {
      fields[i].onchange = function() {
        if (this.value) {
          addClass(this, "is-filled");
        } else {
          removeClass(this, "is-filled");
        }
      };
    }
  }
}

function navigation() {
  var nav = document.querySelector(".js-nav");
  var hamburger = document.querySelector(".js-hamburger");
  var menu = document.querySelector(".js-menu");
  var logo = document.querySelector(".js-logo");

  var isHomePage = hasClass(document.body, "Home");

  if (nav && !isHomePage) {
    var headroom = new Headroom(nav, {
      // offset: 205,
      // tolerance: 5
    });

    headroom.init();
  }

  if (hamburger) {
    hamburger.addEventListener("click", function() {
      toggleClass(this, "is-active");

      if (hasClass(menu, "-hidden")) {
        removeClass(menu, "-hidden");
        addClass(menu, "-visible");
      } else {
        removeClass(menu, "-visible");
        addClass(menu, "-hidden");
      }

      if (hasClass(this, "is-active")) {
        noScroll.on();
      } else {
        noScroll.off();
      }

      if (hasClass(document.body, "StoryPage")) {
        if (hasClass(logo, "-white")) {
          removeClass(logo, "-white");
        } else {
          addClass(logo, "-white");
        }

        if (hasClass(hamburger, "-white")) {
          removeClass(hamburger, "-white");
        } else {
          addClass(hamburger, "-white");
        }
      }
    });

    document.onkeydown = function(event) {
      event = event || window.event;
      var isEscape = false;
      if ("key" in event) {
        isEscape = (event.key === "Escape" || event.key === "Esc");
      } else {
        isEscape = (event.keyCode === 27);
      }
      if (isEscape) {
        removeClass(hamburger, "is-active");
        removeClass(menu, "-visible");
        addClass(menu, "-hidden");
        noScroll.off();

        if (hasClass(document.body, "StoryPage")) {
          addClass(logo, "-white");
          addClass(hamburger, "-white");
        }
      }
    }
  }
}

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

function isScrolledIntoView(el) {
  var elemTop = el.getBoundingClientRect().top;
  var elemBottom = el.getBoundingClientRect().bottom;

  // return (elemTop < window.innerHeight) && (elemBottom >= 0);
  return (elemTop >= 0) && (elemBottom <= window.innerHeight);
}

function preloader() {
  var preloader = document.querySelector(".Preloader");
  var preloaderIcon = preloader.querySelector(".icon");
  var page = document.querySelector(".Page");

  if (hasClass(page, "is-loading") && hasClass(preloader, "is-loading")) {
    noScroll.on();

    removeClass(preloader, "is-loading");

    setTimeout(function() {
      addClass(preloader, "is-loading");
    }, 3000);

    setTimeout(function() {
      noScroll.off();
      removeClass(page, "is-loading");
      preloaderIcon.style.display = "none";
    }, 4500);
  }
}

function lonelyPlanet() {
  // var hamburger = document.querySelector(".js-hamburger");
  // var logo = document.querySelector(".js-logo");
  // var intro = document.querySelector(".Intro");
  //
  // console.log(isScrolledIntoView(intro));
  // window.onscroll = debounce(function() {
  //   console.log("scrolling");
  //   console.log(isScrolledIntoView(intro));
  //
  //   if (isScrolledIntoView(intro)) {
  //     removeClass(logo, "-white");
  //     removeClass(hamburger, "-white");
  //   } else {
  //     addClass(logo, "-white");
  //     addClass(hamburger, "-white");
  //   }
  // }, 0);

  preloader();
}

function airbnb() {
  var swiper = new Swiper('.Carousel > .swiper-container', {
    pagination: '.Carousel-pagination',
    paginationClickable: true,
    nextButton: '.Carousel-next',
    prevButton: '.Carousel-prev'
  });

  preloader();
}

(function() {
  "use strict";

  // if (hasClass(document.documentElement, "Home")) homePage();
  if (hasClass(document.body, "Contact")) contactPage();
  if (hasClass(document.body, "LonelyPlanet")) lonelyPlanet();
  if (hasClass(document.body, "Airbnb")) airbnb();
  navigation();
}());
