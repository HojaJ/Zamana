(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }
  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }
  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)


  /**
   * Clients Slider
   */
  new Swiper('.moments-slider', {
    speed: 400,
    navigation: {
      nextEl: '.moments-button-next',
      prevEl: '.moments-button-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      
      840: {
        slidesPerView: 3,
        spaceBetween: 80
      }
      // 992: {
      // }
    }
  });


/**
 * Product Slider 
 */

  new Swiper('.product-slider', {
    speed: 400,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    
  });

 /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    slidesPerView: 'auto',
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 7,
        spaceBetween: 40
      }
    }
  });



  /**
   * Suggest slider
   */
  new Swiper('.suggest-slider', {
    speed: 600,
    loop: true,
    grabCursor: false,
    allowTouchMove: false,
    navigation: {
      nextEl: '.suggests-button-next',
      prevEl: '.suggests-button-prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },

      1000: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Testimonials slider
   */
   new Swiper('.testimonials-slider', {
    navigation: {
      nextEl: '.testimonials-button-next',
      prevEl: '.testimonials-button-prev'
    }
  });
})();