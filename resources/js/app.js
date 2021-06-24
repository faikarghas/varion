const { default: axios } = require('axios');

require('./bootstrap');

// ============================================== //
// Header
// ============================================== //

let url = window.location.pathname

$(window).on('scroll', function() {
    var scrollPos = $(this).scrollTop();
    if (scrollPos > 1) {
        $('.menu__home').css('background-color','white')
    } else if(scrollPos === 0 && url === '/contact'){
        $('.menu__home').css('background-color','#F4F4F5')
    } else {
        $('.menu__home').css('background-color','transparent')
    }
});

// ============================================== //
//
// ============================================== //


// ============================================== //
// Slider
// ============================================== //

$('.homeHeaderSlider').slick({
    arrows:false,
    dots:true,
});

$('.aboutHeaderSlider').slick({
    arrows:false,
    dots:true
});

$('.homeSectionSlider').slick({
    arrows:true,
    dots:false,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
          breakpoint: 600,
          settings: {
            centerMode: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
})


if ($(window).width() <= 992) {
    $('.subSlider').slick({
        arrows:false,
        dots:false,
        centerMode: true,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })
}

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});


var $status = $('.paging__info');
var $slickElement = $('.slider-nav');

$slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    let i = (currentSlide ? currentSlide : 0) + 1;
    // $status.text(`0${i} / 0${slick.slideCount}`);
    $('.paging__info-curr').text(`0${i}`)
    $('.paging__info-total').text(`0${slick.slideCount}`)
    // $('.box_number p').text(`0${i}.`)
});

$('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows:false,
    focusOnSelect: true,
});

$('.fume_cb2').slick({
    prevArrow: $('.fume_prev1'),
    nextArrow: $('.fume_next1')
});

$('.fume_cb3').slick({
    prevArrow: $('.fume_prev2'),
    nextArrow: $('.fume_next2'),
    slidesToShow: 1,
    slidesToScroll: 1
});


// ============================================== //
//
// ============================================== //

// ============================================== //
// Career Image
// ============================================== //

let valLeft = 0
let valLeft2 = 40
let valTop = 0
for (let i = 1; i <= 5; i++) {
    valLeft += 300
    valLeft2 += 10
    valTop += 45
    if (i === 1) {
        $(`.section__career-second ul .item-${i}`).css('left',`-50px`)
        $(`.section__career-second ul .item-${i}`).css('top',`0`)
    } else {
        $(`.section__career-second ul .item-${i}`).css('left',`${(valLeft-300)-valLeft2}px`)
        $(`.section__career-second ul .item-${i}`).css('top',`-${valTop-45}px`)
    }
}

// ============================================== //
//
// ============================================== //

// ============================================== //
// Hamburger Menu
// ============================================== //

$('.open_menu').on('click',function (params) {
    $('#menu-hamburger').toggleClass('open')
    $('#menu-hamburger span').toggleClass('bg-white')
    $('.menu__mobileOverlay').toggleClass('open')
    $('.menu__mobile').toggleClass('open')
})

// ============================================== //
//
// ============================================== //
