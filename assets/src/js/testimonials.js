fetch('../../../assets/testimonials/testimonials.json')
    .then((response) => response.json())
    .then((data) => {
        let testimonialsContainer = document.querySelector(
            '.testimonials-wrapper'
        )
        data.forEach((testimonial) => {
            let testimonialCard = `
        <div class="testimonials-card">
          <div class="testimonials-card__title">
            <img class="testimonials-img" src="${testimonial.image}" alt="фото клиента" />
            <h6>${testimonial.name}</h6>
          </div>
          <span>${testimonial.date}</span>
          <p>${testimonial.testimonial}</p>
        </div>
      `
            testimonialsContainer.innerHTML += testimonialCard
        })
    })
