'use strict';
var theme = {
  /**
   * Theme's components/functions list
   * Comment out or delete the unnecessary component.
   * Some components have dependencies (plugins).
   */
  init: function () {
    theme.scrollButton();
    theme.accordion();
    theme.mobileMenu();
    theme.swiperslider();
    theme.tableSearch();
    theme.collApse();
    theme.tabings();
    if ($(window).innerWidth() <= 575) {
      theme.footerList();
    }
  },

  /**
   * Scroll to Top Button
   */
  scrollButton: function () {
    var $scrollTop = $('.scroll-top');
    if ($scrollTop.length) {
      var toggleScrollTop = function () {
        $(window).scrollTop() > 100 ? $scrollTop.addClass('active') : $scrollTop.removeClass('active');
      };
      $(window).on('load', toggleScrollTop);
      $(document).on('scroll', toggleScrollTop);
    }

    $("#scrolltoTop").click(function () {
      $("html").animate({ scrollTop: 0 }, "slow");
    });
  },

  /**
   * Accordion
   */
  accordion: function () {
    // $(".accordion > li:first").addClass("active").find("p").slideDown();
    $('.accordion li').on('click', function () {
      var dropDown = $(this).find("p");

      $(this).closest(".accordion").find("p").not(dropDown).slideUp();

      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      } else {
        $(this).closest(".accordion").find("li.active").removeClass("active");
        $(this).addClass("active");
      }

      dropDown.stop(false, true).slideToggle();
    });
  },

  /**
   * Mobile Menu
   */
  mobileMenu: function () {
    function popupMobileMenu() {
      if (window.matchMedia('(max-width: 1200px)').matches) {
        $('.navbar-button').on('click', function () {
          if ($('.nabbar-nav').hasClass('active')) {
            $('.nabbar-nav').removeClass('active');
            $(this).removeClass('active');
            $('.nabbar-nav .mainmenu .has-droupdown > a').siblings('.submenu, .rn-megamenu').removeClass('active').slideUp('400');
            $('.nabbar-nav .mainmenu .has-droupdown > a').removeClass('open');
          } else {
            $('.nabbar-nav').addClass('active');
            $(this).addClass('active');
          }
        });
  
        $('.nabbar-nav .mainmenu .has-droupdown > a').on('click', function (e) {
          e.preventDefault();
          $('.nabbar-nav .mainmenu .has-droupdown > a').not(this).siblings('.submenu, .rn-megamenu').removeClass('active').slideUp('400');
          $('.nabbar-nav .mainmenu .has-droupdown > a').not(this).removeClass('open');
          let $submenu = $(this).siblings('.submenu, .rn-megamenu');
          if ($submenu.hasClass('active')) {
            $submenu.removeClass('active').slideUp('400');
            $(this).removeClass('open');
          } else {
            $submenu.addClass('active').slideDown('400');
            $(this).addClass('open');
          }
        });
  
        $('.nabbar-nav').on('click', function (e) {
          if (e.target === this) {
            $('.nabbar-nav').removeClass('active');
            $('.navbar-button').removeClass('active');
            $('.nabbar-nav .mainmenu .has-droupdown > a').siblings('.submenu, .rn-megamenu').removeClass('active').slideUp('400');
            $('.nabbar-nav .mainmenu .has-droupdown > a').removeClass('open');
          }
        });
      }
    }
  
    popupMobileMenu();
  
    $(window).resize(function () {
      $('.navbar-button').off('click');
      $('.nabbar-nav .mainmenu .has-droupdown > a').off('click');
      $('.nabbar-nav').off('click');
  
      popupMobileMenu();
    });
  },

  /**
   * Swiper Slider
   */
  swiperslider: function() {
    new Swiper('.swiper-testimonial', {
      speed: 1000,
      loop: false,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: '.swiper-testimonial-right',
        prevEl: '.swiper-testimonial-left',
      },
      slidesPerView: 'auto',
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 20
        }
      }
    });
    new Swiper('.swiper-just-one-click', {
      speed: 1000,
      loop: false,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false
      },
      // navigation: {
      //   nextEl: '.swiper-testimonial-right',
      //   prevEl: '.swiper-testimonial-left',
      // },
      slidesPerView: 'auto',
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        470: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        767: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 15
        }
      }
    });
    new Swiper('.swiper-account-page', {
      speed: 1000,
      loop: false,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        }
      }
    });
  },

  
  /**
   * Table Search
   */

  tableSearch: function () {
    $('.input-table-search').on('keyup', function() {
      var value = $(this).val().toLowerCase();
      var tableId = $(this).data('table');
      var $table = $('#' + tableId);
      var $rows = $table.find('tbody tr');

      $rows.each(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });

      if ($rows.filter(':visible').length === 0) {
          if ($table.find('tbody .no-results').length === 0) {
              $table.find('tbody').append('<tr class="no-results"><td colspan="' + $table.find('thead th').length + '">No results found</td></tr>');
          }
      } else {
          $table.find('tbody .no-results').remove();
      }
  });
},

  /**
   * Collapse
  */

  collApse: function () {
    $(".ulcollapse > li:first").addClass("active").find("p").slideDown();
    $('.ulcollapse li').on('click', function () {
        var dropDown = $(this).find("p");

        $(this).closest(".ulcollapse").find("p").not(dropDown).slideUp();

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(this).closest(".ulcollapse").find("li.active").removeClass("active");
            $(this).addClass("active");
        }

        dropDown.stop(false, true).slideToggle();
    });
  },

  /**
   * Tabings
  */

  tabings: function () {
    $('.tabs .items .item').click(function() {
      $('.tabs .items .item').removeClass('active');
      $(this).addClass('active');
      var tabNumber = $(this).data('tab');
      $('.contents .item').removeClass('active');
      $('.contents .item[data-content="' + tabNumber + '"]').addClass('active');
  });
  $('.tabs .items .item').first().trigger('click');
  },

   /**
   * Footer List Toggle Function
   */
   footerList: function () {
    var $footerLists = $('ul.footer-list');
    $footerLists.find('li').not('.heading_list').hide();
    $footerLists.find('li.heading_list').addClass('downarrow');
    $footerLists.find('li.heading_list').on('click', function () {
      var $thisList = $(this).siblings();
      var $currentFooterList = $(this).closest('ul.footer-list');
      if ($thisList.is(':visible')) {
        $(this).addClass('downarrow').removeClass('uparrow');
        $thisList.slideUp();
      } else {
        $footerLists.find('li.heading_list').addClass('downarrow').removeClass('uparrow');
        $footerLists.find('li').not('.heading_list').slideUp();
        $(this).removeClass('downarrow').addClass('uparrow');
        $thisList.slideDown();
      }
    });
  }

};

// Initialize the theme
document.addEventListener('DOMContentLoaded', function () {
  theme.init();
});