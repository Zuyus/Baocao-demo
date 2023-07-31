/*---------------------------
testimonial page
---------------------------*/
//testimonial slider one
$('.testimonial__slider__one').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><img src='images/icons/slider/arrow-left-1.svg' alt='prev'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><img src='images/icons/slider/arrow-right-1.svg' alt='next'></button>",
});

//testimonial slider two
$('.testimonial__slider__two').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:"<button type='button' class='slick-prev pull-left'><img src='images/icons/slider/arrow-left-2.svg' alt='prev'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right'><img src='images/icons/slider/arrow-right-2.svg' alt='next'></button>",
});


//testimonial slider three
var galleryThumbs = new Swiper('.swiper.testimonial__slider__three__nav', {
    spaceBetween: 10,
    loop: true,
    freeMode: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 3,
    watchOverflow: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    direction: 'vertical',
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction: false,
});
var galleryTop = new Swiper('.swiper.testimonial__slider__three', {
    loop: true,
    watchOverflow: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    preventInteractionOnTransition: true, 
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction: false,
    thumbs: {
        swiper: galleryThumbs,
    },
});


//testimonial slider four
var swiper = new Swiper('.swiper.testimonial__slider__four', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: '2',
    loop: true,
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction: false,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    breakpoints: {  
        '0': {
            slidesPerView: '1',
        },
        '768': {
            slidesPerView: '2', 
        },
    },
});