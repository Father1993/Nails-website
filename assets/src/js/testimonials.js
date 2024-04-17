fetch('/Nails-website/assets/testimonials/testimonials.json')
    .then((response) => response.json())
    .then((data) => {
        let swiperWrapper = document.querySelector('.swiper-wrapper')
        swiperWrapper.innerHTML = ''

        data.forEach((testimonial) => {
            let slide = `
        <div class="swiper-slide">
            <div class="testimonials-card">
                <div class="testimonials-card__title">
                    <img class="testimonials-img" src="${testimonial.image}" alt="фото клиента" />
                    <h6>${testimonial.name}</h6>
                </div>
                <span>${testimonial.date}</span>
                <p>${testimonial.testimonial}</p>
            </div>
        </div>
        `

            swiperWrapper.innerHTML += slide
        })

        let swiper = new Swiper('.swiper', {
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
        swiper.slideTo(0) // Переход к первому слайду
    })
