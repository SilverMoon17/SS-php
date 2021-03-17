<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>SS</title>
</head>
<body>
    <?php require 'template/header.php' ?>
    <main class="main">
        <div class="slider swiper-container">
            <div class="swiper-wrapper">
                <section class="slide slide-1 swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-6 offset-xl-1">
                                <span class="label">Актуальное</span>
                                <h2 class="slide-title">Consectetur magna id at mauris. Arcu quis ut luctus sem.</h2>
                                <p class="slide-description">Placerat aliquet volutpat aliquam sit lacinia. Id et gravida et ultricies blandit sit egestas feugiat. 
                                    Sed at id molestie amet ipsum. Aenean varius diam elementum pellentesque</p>
                                <a href="news/articles/article-1.html" class="continue-button">Читать далее</a>
                            </div>
                            <!-- /.col-4 offset-lg-1 -->
                            <div class="slide-image slide-image-1 col-xl-5 col-6 d-flex justify-content-end">
                                <img src="img/slide-4.jpg" alt="">
                            </div>
                            <!-- /.col-5 -->
                        </div>
                    </div>
                </section>
                <section class="slide slide-2 swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-6 offset-xl-1">
                                <span class="label">Актуальное</span>
                                <h2 class="slide-title">Таким образом, курс на социально-ориентированный...</h2>
                                <p class="slide-description">Соображения высшего порядка, а также выбранный нами 
                                    инновационный путь обеспечивает широкому кругу 
                                    специалистов участие в формировании модели развития.</p>
                                <a href="#" class="continue-button">Читать далее</a>
                            </div>
                            <!-- /.col-4 offset-lg-1 -->
                            <div class="slide-image slide-image-2 col-xl-5 col-6 d-flex justify-content-end">
                                <img src="img/slide-1.jpg" alt="">
                            </div>
                            <!-- /.col-5 -->
                        </div>
                    </div>
                </section>
                <section class="slide slide-3 swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-6 offset-xl-1">
                                <span class="label">Новое</span>
                                <h2 class="slide-title">Повседневная практика показывает, что ...</h2>
                                <p class="slide-description">Значимость этих проблем настолько очевидна, что 
                                    новая модель организационной деятельности способствует 
                                    повышению актуальности экономической целесообразности принимаемых...</p>
                                <a href="#" class="continue-button">Читать далее</a>
                            </div>
                            <!-- /.col-4 offset-lg-1 -->
                            <div class="slide-image slide-image-3 col-xl-5 col-6 d-flex justify-content-end">
                                <img src="img/slide-2.jpg" alt="">
                            </div>
                            <!-- /.col-5 -->
                        </div>
                    </div>
                </section>
                <section class="slide slide-4 swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-6 offset-xl-1">
                                <span class="label">Инновации</span>
                                <h2 class="slide-title">Соображения высшего порядка, а также новая модель...</h2>
                                <p class="slide-description">Таким образом, рамки и место обучения кадров 
                                    влечет за собой процесс внедрения и модернизации направлений прогрессивного развития? 
                                    Практический опыт показывает, что...</p>
                                <a href="#" class="continue-button">Читать далее</a>
                            </div>
                            <!-- /.col-4 offset-lg-1 -->
                            <div class="slide-image slide-image-4 col-xl-5 col-6 d-flex justify-content-end">
                                <img src="img/slide-3.jpg" alt="">
                            </div>
                            <!-- /.col-5 -->
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-pagination"></div>
            <div class="slider-nav">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-1">
                            <button class="slider-button slider-button-prev">
                                <img src="img/arrow-prev.svg" alt="">
                            </button>
                        </div>
                        <!-- /.col-1 -->
                        <div class="col-1">
                            <button class="slider-button slider-button-next">
                                <img src="img/arrow-next.svg" alt="">
                            </button>
                        </div>
                        <!-- /.col-1 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.slider -->
        <div class="top-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 info-title-block d-flex justify-content-center">
                        <h1 class="info-title">Новинки</h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="container">
                <div class="row">
                    <div class=" col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                        <img src="img/apple-logo.svg" alt="" class="apple-logo">
                        <!-- <a data-fancybox="gallery-iPhone12PROMAX" class="info-image-link" href="img/iphone-12-proMax-big.jpg"><img src="img/iphone-12-proMax-small-1.png" alt="iPhone" class="info-image"></a>-->
                        <div class="col-lg-6 col-12">
                            <div class="swiper-container gallery-top-1">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-iPhone12PROMAX" class="info-image-link" href="img/info-slides-img/iphone-12-proMax-big.jpg"><img src="img/info-slides-img/iphone-12-proMax-small-1.png" alt="iPhone" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-iPhone12PROMAX" class="info-image-link" href="img/info-slides-img/iphone-12-proMax-big-2.png"><img src="img/info-slides-img/iphone-12-proMax-small-2.png" alt="iPhone" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-iPhone12PROMAX" class="info-image-link" href="img/info-slides-img/iphone-12-proMax-big-3.png"><img src="img/info-slides-img/iphone-12-proMax-small-3.png" alt="iPhone" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-iPhone12PROMAX" class="info-image-link" href="img/info-slides-img/iphone-12-proMax-big-4.png"><img src="img/info-slides-img/iphone-12-proMax-small-4.png" alt="iPhone" class="info-image"></a></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-black"></div>
                                <div class="swiper-button-prev swiper-button-black mr-2"></div>
                              </div>
                              <div class="swiper-container gallery-thumbs-1" style="text-align: center;">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide"><img src="img/info-slides-img/iphone-12-proMax-thumb-nav.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/iphone-12-proMax-thumb-2.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/iphone-12-proMax-thumb-3.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/iphone-12-proMax-thumb-4.png" alt="iPhone" class="info-image"></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="phone-name">iPhone 12 Pro MAX</h3>
                        <ul class="phone-description d-flex flex-column align-items-center">
                            <li class="phone-description-item">Дата выхода: 2020, Октябрь 13</li>
                            <li class="phone-description-item">Дисплей: Super Retina XDR OLED</li>
                            <li class="phone-description-item">Диагональ экарана: 6.7”</li>
                            <li class="phone-description-item">Операционная система: iOS 14.1</li>
                            <li class="phone-description-item">Процессор: Apple A14 Bionic (5 nm)</li>
                            <li class="phone-description-item">Внутренняя память: 256GB 6GB RAM, 512GB 6GB RAM</li>
                        </ul>
                        <h3 class="phone-price">Стоимость: 1260 €</h3>
                    </div>
                    <!-- /.col-6 -->
                    <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center pt-md-0 pt-4">
                        <img src="img/android-logo.svg" alt="" class="apple-logo">
                        <div class="col-lg-6 col-12">
                            <div class="swiper-container gallery-top-2">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-huaweiP40PRO" class="info-image-link" href="img/info-slides-img/huawei_p40_pro-big-1.png"><img src="img/info-slides-img/huawei_p40_pro-small-1.png" alt="Huawei P40 PRO" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-huaweiP40PRO" class="info-image-link" href="img/info-slides-img/huawei_p40_pro-big-3.png"><img src="img/info-slides-img/huawei_p40_pro-small-3.png" alt="Huawei P40 PRO" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-huaweiP40PRO" class="info-image-link" href="img/info-slides-img/huawei_p40_pro-big-2.png"><img src="img/info-slides-img/huawei_p40_pro-small-2.png" alt="Huawei P40 PRO" class="info-image"></a></div>
                                  <div class="swiper-slide phone-slide"><a data-fancybox="gallery-huaweiP40PRO" class="info-image-link" href="img/info-slides-img/huawei_p40_pro-big-4.png"><img src="img/info-slides-img/huawei_p40_pro-small-4.png" alt="Huawei P40 PRO" class="info-image"></a></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-black"></div>
                                <div class="swiper-button-prev swiper-button-black"></div>
                              </div>
                              <div class="swiper-container gallery-thumbs-2" style="text-align: center;">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide"><img src="img/info-slides-img/huawei_p40_pro-thumb-1.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/huawei_p40_pro-thumb-3.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/huawei_p40_pro-thumb-2.png" alt="iPhone" class="info-image"></div>
                                  <div class="swiper-slide"><img src="img/info-slides-img/huawei_p40_pro-thumb-4.png" alt="iPhone" class="info-image"></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="phone-name">Huawei P40 PRO</h3>
                        <ul class="phone-description d-flex flex-column align-items-center">
                            <li class="phone-description-item">Дата выхода: 2020, Март 26</li>
                            <li class="phone-description-item">Дисплей: OLED</li>
                            <li class="phone-description-item">Диагональ экарана: 6.58” 90 Hz</li>
                            <li class="phone-description-item">Операционная система: Android 10</li>
                            <li class="phone-description-item">Процессор: Kirin 990 5G (7 nm)</li>
                            <li class="phone-description-item">Внутренняя память: 256GB 8GB RAM</li>
                        </ul>
                        <h3 class="phone-price">Стоимость: 999-1399 €</h3>
                    </div>
                    <!-- /.col-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.info -->
    </main>
    <?php require 'template/footer.php' ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/swiper.js"></script>
</body>
</html>