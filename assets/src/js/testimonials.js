fetch('../../../assets/testimonials/testimonials.json')
    .then((response) => response.json())
    .then((data) => {
        let swiperWrapper = document.querySelector('.swiper-wrapper')
        swiperWrapper.innerHTML = '' // Очистите текущие слайды

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

        // После того как все слайды добавлены, обновите Swiper
        var swiper = new Swiper('.swiper-container')
        swiper.update()
    })
