const swiperPrice = new Swiper('.swiper__price', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination__price',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next__price',
        prevEl: '.swiper-button-prev__price',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar__price',
    },
})
