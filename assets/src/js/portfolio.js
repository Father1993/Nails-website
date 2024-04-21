window.onload = function () {
    let swiper = new Swiper('.swiper-p', {
        touchEventsTarget: 'wrapper',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    })

    swiper.update() // Обновление слайдера
}
