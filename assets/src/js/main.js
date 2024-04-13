let mask = document.getElementById('mask')

window.addEventListener('load', () => {
    mask.classList.add('hide_window')
    setTimeout(() => {
        mask.remove()
    }, 600)
})

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})

const popupBtn = document.getElementById('popupMenuBtn')
const popupWindow = document.getElementById('popup')

popupWindow.style.display = 'none'

popupBtn.addEventListener('click', (event) => {
    event.stopPropagation()
    if (popupWindow.style.display === 'none') {
        popupWindow.style.display = 'flex'
    } else {
        popupWindow.style.display = 'none'
    }
})

document.addEventListener('click', () => {
    popupWindow.style.display = 'none'
})

window.onscroll = function () {
    scrollFunction()
}

function scrollFunction() {
    let button = document.getElementById('popupMenuBtn')
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        button.style.display = 'block'
    } else {
        button.style.display = 'none'
    }
}

const dropDownMenu = document.getElementById('dropDown')
const menuMask = document.getElementById('menuMask')
const menuCloseBtn = document.getElementById('menuCloseBtn')
const menuItems = document.querySelectorAll('.menu-item')

dropDownMenu.addEventListener('click', () => {
    menuMask.classList.add('visible')
})

menuCloseBtn.addEventListener('click', () => {
    menuMask.classList.remove('visible')
})

menuItems.forEach((item) => {
    item.addEventListener('click', () => {
        menuMask.classList.remove('visible')
    })
})

let messageBtn = document.getElementById('buttonMessage')
let messageWindow = document.getElementById('newMessage')
let popupFormMessage = document.getElementById('popupFormMessage')
let closeNewMessage = document.getElementById('closeNewMessage')
let buttonMessageMobile = document.getElementById('buttonMessageMobile')

messageBtn.addEventListener('click', () => {
    newMessage.style.display = 'flex'
})

popupFormMessage.addEventListener('click', (e) => {
    e.preventDefault()
    newMessage.style.display = 'flex'
})

closeNewMessage.addEventListener('click', () => {
    newMessage.style.display = 'none'
})

buttonMessageMobile.addEventListener('click', (e) => {
    e.preventDefault()
    newMessage.style.display = 'flex'
})
