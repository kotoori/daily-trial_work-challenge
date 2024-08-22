/*===============================
swiper
===============================*/
const swiperFv = new Swiper('.js-top-fv-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
	centeredSlides: true,
	autoplay: {
		delay: 5000,
	},
	slidesPerView: 'auto',

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const swiperPopular = new Swiper('.js-top-popular-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
	slidesPerView: 'auto',
	spaceBetween: 24,
	breakpoints:{
		750: {
			spaceBetween: 28,
		},
		950: {
			spaceBetween: 32,
				}
	},


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

	// Scrollbar
	scrollbar: {
    el: '.swiper-scrollbar',
  },
});