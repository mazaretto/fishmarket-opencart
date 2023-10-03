$(document).ready(function () {
    // Фиксация верхнего меню при скролле
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop()

        if (scrollTop >= 50) {
            $(".top-line").addClass("active")
        }
        else {
            $(".top-line").removeClass("active")
        }
    })

    $('.top-line__mmenu').on('click', openMmenu)
    $('.mmenu__close').on('click', closeMmenu)

    $('.overlay').on('click', overlayClick)

    $('.product-item__title').equalHeights()

    // Инициализация превью слайдера
    const sliderThumbs = new Swiper('.product-slider__thumbs .swiper-container', { // ищем слайдер превью по селектору
        // задаем параметры
        direction: 'vertical', // вертикальная прокрутка
        slidesPerView: 3, // показывать по 3 превью
        spaceBetween: 15, // расстояние между слайдами
        navigation: { // задаем кнопки навигации
            nextEl: '.product-product__gallery_bottom', // кнопка Next
            prevEl: '.product-product__gallery_top' // кнопка Prev
        },
        freeMode: true, // при перетаскивании превью ведет себя как при скролле
    });
    // Инициализация слайдера изображений
    const sliderImages = new Swiper('.product-slider__images .swiper-container', { // ищем слайдер превью по селектору
        // задаем параметры
        direction: 'vertical', // вертикальная прокрутка
        slidesPerView: 1, // показывать по 1 изображению
        spaceBetween: 30, // расстояние между слайдами
        mousewheel: true, // можно прокручивать изображения колёсиком мыши
        navigation: { // задаем кнопки навигации
            nextEl: '.product-product__gallery_bottom', // кнопка Next
            prevEl: '.product-product__gallery_top' // кнопка Prev
        },
        grabCursor: true, // менять иконку курсора
        thumbs: { // указываем на превью слайдер
            swiper: sliderThumbs // указываем имя превью слайдера
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    $('.quantity-block .quantity-arrow-minus').on('click', function(){
        let currentval = $(this).siblings('.quantity-block__input').val()
        if(currentval >= 2){
            $(this).siblings('.quantity-block__input').val(currentval - 1)
        }
    })
    $('.quantity-block .quantity-arrow-plus').on('click', function(){
        let currentval = $(this).siblings('.quantity-block__input').val()
        $(this).siblings('.quantity-block__input').val(Number(currentval)+ 1)
    })

    $(document).on('click', '.pp-product-add__close', function () {
        $('.pp-product-add').fadeOut()
        $('.overlay').fadeOut()
    })

})

function openMmenu(e){
    e.preventDefault()
    $('.overlay').fadeIn()
    $('.mmenu').show().animate({right:'0'},350)
    $('body').css('overflow-y', 'hidden')
}
function closeMmenu(){
    $('.mmenu').animate({right:'-250px'},350, function () {
        $(this).hide()
    })
    $('.overlay').fadeOut()
    $('body').css('overflow-y', 'auto')
}
function overlayClick(){
    closeMmenu()
    $('.pp-product-add').fadeOut()
}