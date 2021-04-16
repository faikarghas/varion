require('./bootstrap');

$(window).on('scroll', function() {
    var scrollPos = $(this).scrollTop();
    if (scrollPos > 1) {
        $('.menu__home').css('background-color','white')
    } else {
        $('.menu__home').css('background-color','transparent')
    }
});

$('.homeHeaderSlider').slick({
    arrows:false,
    dots:true
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
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
})

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
    $('.box_number p').text(`0${i}.`)
});

$('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows:false,
    focusOnSelect: true,
});