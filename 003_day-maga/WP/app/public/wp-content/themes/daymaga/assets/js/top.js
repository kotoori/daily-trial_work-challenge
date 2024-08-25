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
