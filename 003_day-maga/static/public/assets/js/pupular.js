
const swiperPopular = new Swiper('.js-popular-swiper', {
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

