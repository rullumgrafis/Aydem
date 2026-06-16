/**
* Swiper Slider
* Enables carousels and sliders
* Requires swiper-bundle.min.js
*/



import Swiper from "swiper/bundle";

export default (() => {
    const workSwiper = new Swiper(".work-swiper", {
        loop: true,
        speed: 800,
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
        allowTouchMove: false,

        navigation: {
            nextEl: ".work-next",
            prevEl: ".work-prev",
        },
    });
})();
