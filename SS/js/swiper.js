const swiper = new Swiper('.slider', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        hideOnClick: false,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  var galleryThumbs = new Swiper('.gallery-thumbs-1', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top-1', {
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    spaceBetween: 40,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });
  var galleryThumbs = new Swiper('.gallery-thumbs-2', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top-2', {
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    spaceBetween: 40,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });
  var galleryThumbs = new Swiper('.gallery-thumbs-3', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top-3', {
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    spaceBetween: 40,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });
  var galleryThumbs = new Swiper('.gallery-thumbs-4', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top-4', {
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    spaceBetween: 40,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });