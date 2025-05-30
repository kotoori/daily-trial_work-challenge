
const swiperPopular = new Swiper('.js-popular-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
	slidesPerView: 1.15,
	spaceBetween: 24,
	breakpoints:{
		750: {
			slidesPerView: 2.19,
			spaceBetween: 28,
		},
		950: {
			slidesPerView: 3.19,
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

