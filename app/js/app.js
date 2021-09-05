// Import jQuery module (npm i jquery)
import $ from 'jquery';
window.jQuery = $;
window.$ = $;

const jQuery = $;

import Popper from 'popper.js';
import 'bootstrap/dist/js/bootstrap.min';
require('@fancyapps/fancybox/dist/jquery.fancybox.min');

import Swiper from 'swiper';
// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);

const DESKTOP_FROM = 1024;

// section2 tabs sliders
const slidersParents = $('.tabs-contents__item');
  
var swiper = new Swiper(".section-tabs-slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  
  observer: true,
  
  observeParents: true ,
  
  observSlideChildren: true,

});

// modal swiper
var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  observer: true,
  
  observeParents: true ,
  
  observSlideChildren: true,
});

// let swiperFeedback = new Swiper(".how-to-make-feedback__modal-swiper", {
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     type: "progressbar",
//   },
//   observer: true,
  
//   observeParents: true ,
  
//   observSlideChildren: true,
// });

// HEADER MOBILE NAV TOGLE
$('.header__nav-toggle').on('click', function(event) {
  event.preventDefault();
  $(this).closest('.header__navigation').toggleClass('_mobile-nav-open')
})


$('.nav-links__item--parent').on('click', '.nav-links__link', function(event) {
  event.preventDefault();
  if ($(window).width() <= DESKTOP_FROM) {
    $(this).closest('.nav-links__item--parent').toggleClass("active");
    $(this).siblings('.sub-menu').toggle();
  } else {
    $(this).closest('.nav-links__item--parent').removeClass("active");
    $(this).siblings('.sub-menu').removeAttr('style');
  }
});


// Переключение табов во второй секции на мобилке

const sectionTabs = $('.section-tabs');

if (sectionTabs.length) {
  sectionTabs.each(function() {
    const _self = $(this);
    const tabsTriggers = _self.find('.tabs-nav__trigger');

    _self.find('.section-tabs__mobile-trigger').on('click', function(event) {
      event.preventDefault();
      const currentTab = _self.find('.tabs-nav__trigger.active');
      const activeIndex = currentTab.parent().index();
    
      if ($(this).data('move') === 'prev') {
        if ( activeIndex === 0 ) {
          tabsTriggers.eq( tabsTriggers.length - 1 ).tab('show');
        } else {
          tabsTriggers.eq( activeIndex - 1 ).tab('show');
        }
      } else {
        if ( activeIndex === (tabsTriggers.length - 1) ) {
          tabsTriggers.eq(0).tab('show');
        } else {
          tabsTriggers.eq( activeIndex + 1 ).tab('show');
        }
      }
    });
  });
}


const thankModal = $('#thanksModal');
const timeoutToCloseThanksModal = +thankModal.data('timeout');

thankModal.on('shown.bs.modal', () => {
  setTimeout(() => {
    thankModal.modal('hide')
  }, timeoutToCloseThanksModal)
});

function showThanksModal(event) {
  $(event.target).off('hidden.bs.modal', showThanksModal);
  thankModal.modal('show');
};

$('form').on('submit', function(event) {
  event.preventDefault();
  const parent = $(this).closest('.modal');

  if (parent.length) {
    parent.on('hidden.bs.modal', showThanksModal)
    parent.modal('hide');
  } else {
    showThanksModal();
  }
});

// Коллапс Аккордеон собствеными руками.

const accordion = $('.accordion');

if (accordion.length) {
  accordion.on('click', '.accordion-item__header', function (event) {
    event.preventDefault();
    const parent = $(this).closest('.accordion-item');
    parent.siblings().removeClass('active');
    parent.toggleClass('active');
  })

  $('.accordion__show-all').on('click', 'a', function (event) {
    event.preventDefault();
    accordion.find('.accordion-item[style]').removeAttr('style');
    $(this).remove();
  });
};

// Show/Hide part of text 

$(document).ready(function(){
  if ( $(window).width() < 768){
    $('.content_block').addClass('hide')
  }
	$('.content_toggle').on('click', function(){
		$('.content_block').toggleClass('hide');	
		if ($('.content_block').hasClass('hide')) {
			$('.content_toggle').html('Показать все описание');
		} else {
			$('.content_toggle').html('Скрыть');
		}		
		return false;
	});				
});


// Наведение на обьект в расписании  
const timeTable = $('.timetable__wrapper');
if (timeTable.length) {
  const timeTableColoredBoxes = timeTable.find(".colored-box:not(.colored-box—-empty)");

  timeTableColoredBoxes.on({
      mouseenter: function () {
        timeTable.addClass(`_hover-${$(this).data('colored')}`)
      },
      mouseleave: function () {
        timeTable.removeClass(`_hover-${$(this).data('colored')}`)
      }
  });
};

// Показ ответа по кнопке в 28 секции

$(".section28-button").on('click', function(event) {
  const parent = $(this).closest(".section28-tabs-content");

  parent.find(".section28-tabs-content__img-wrapper").toggle();
  parent.find(".section28-tabs-content__left-hiden-block").toggle();
  
  const isActiveState = $(this).data('isactive') === "true";

  $(this).text(
    isActiveState
    ? $(this).data('deactivetitle')
    : $(this).data('activetitle')
   )
   $(this).data('isactive', isActiveState ? "false" : "true");
});


// Показ другого текста на странице отзывов в модалке на кнопке
// $(".swiper-button-next").on('click', function(event) {
//   const isActiveState = $(".feedback-button-next").data('isactive') === "true";
//   if ( $(".swiper-button-next").hasClass('swiper-button-disabled')) {
//     $(this).text(
//       isActiveState
//       ? $(this).data('deactivetitle')
//       : $(this).data('activetitle')
//      )
//      $(this).data('isactive', isActiveState ? "false" : "true");
//   }
// });