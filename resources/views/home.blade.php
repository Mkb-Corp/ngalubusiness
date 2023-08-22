<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ngalu Business, We Design your world!">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>Ngalu Business</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.min.cs') }}s">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href={{ route('home') }}">
                                <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}"
                                    alt="Ngalu Business Logo">
                                <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}"
                                    alt="Ngalu Business Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="#about">A propos de nous</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#portfolio">Réalisations</a></li>
                                </ul>
                            </nav>

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                            {{--
                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="assets/images/icons/sun-01.svg" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}"
                                alt="Ngalu Business Logo">
                            <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}"
                                alt="Ngalu Business Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="#about">A propos de nous</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Réalisations</a></li>
                </ul>
            </div>
        </div>

        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->



        <!-- Start Slider Area  -->
        <div class="slider-area slider-style-3 height-850">
            <div class="container">
                <div class="row row--30 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="inner text-left">
                            <h1 class="title theme-gradient">Ngalu <br>Business</h1>
                            <p class="description">We design your world.</p>
                        </div>
                    </div>
                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/about/about-2.png') }}" alt="Banner Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Tab Area  -->
        <div id="about" class="rainbow-tab-area rainbow-section-gap">
            <div class="container">
                <div class="row mb--40">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">A propos de nous.</span></h4>
                            <h2 class="title w-600 mb--20">Découvrez Ngalu Business.</h2>
                            <p class="description b1">Ngalu Business met à votre disposition une boutique
                                qui met en avant les valeurs africaines. Nous avons développé une marque de
                                vêtements made in DRC dénommée N'galudesign. Nous sommes également dans la
                                formation professionnelle et sommes également un centre de professionnalisation
                                et stage professionnel dans le domaine du stylisme, couture, esthétique.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Tab Area  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <div id="services" class="rainbow-service-area rainbow-section-gap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="100">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">Nos services</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Ce que nous vous offrons.</h2>
                            <p class="description b1">Découvrez les différents services qu'offre
                                <br>Ngalu Business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row row--15 service-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                        <div class="service gallery-style text-left">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">
                                        <a href="#">Boutique</a>
                                    </h4>
                                    <p class="description">Vêtements hommes & vêtements femmes. Nous avons également
                                        notre marque
                                        de vêtements dédiée aux personnes de grande taille, une marque de vêtements made
                                        in DRC dénommée N'galudesign.</p>
                                </div>
                                <div class="image">
                                    <img src="assets/images/services/galery-image-01.png" alt="card Images">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <div class="service gallery-style text-left">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">
                                        <a href="#">Formations</a>
                                    </h4>
                                    <p class="description">Nous sommes dans la formation professionnelle et
                                        sommes également un centre de professionnalisation
                                        et stage professionnel dans le domaine du stylisme, couture, esthétique...</p>
                                </div>
                                <div class="image">
                                    <img src="assets/images/services/galery-image-02.png" alt="card Images">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="200">
                        <div class="service gallery-style text-left">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">
                                        <a href="#">Conception textile</a>
                                    </h4>
                                    <p class="description">Nous vous aideons à choisir les matières premières les plus
                                        adaptées à vos besoins et à créer des motifs uniques.</p>
                                </div>
                                <div class="image">
                                    <img src="assets/images/services/galery-image-03.png" alt="card Images">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <div id="portfolio" class="rainbow-portfolio-area rainbow-section-gap masonary-wrapper-activation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--50" data-sal="slide-up" data-sal-duration="400"
                            data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Portfolio</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Découvrez nos réalisations</h2>
                            <p class="description b1"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="portfolio-items grid-metro2 mesonry-list">
                            <div class="resizer"></div>
                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--1 cat--4">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-01.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--2 cat--3">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-02.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--3 cat--4 cat--1">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-03.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--3 cat--2">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-04.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--2 cat--4">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-05.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->

                            <!-- Start Single Portfolio  -->
                            <div class="portfolio-2 cat--3 cat--2 cat--1">
                                <div class="rainbow-card portfolio">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <figure class="card-image">
                                                <a href="#">
                                                    <img src="assets/images/portfolio/portfolio-06.jpg"
                                                        alt="Portfolio-01">
                                                </a>
                                            </figure>
                                            <a class="rainbow-overlay" href="#"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title mb--10">
                                                <a href="#">Formation</a>
                                            </h5>
                                            <span class="subtitle b2">Tenue réalisée pendant l'encadrement chez Ngalu
                                                Business</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Portfolio  -->
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->



        <div class="footer-style-3">

            <div class="copyright-area copyright-style-one variation-two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-7 col-sm-12 col-12">
                            <div class="copyright-left">
                                {{-- <ul class="ft-menu link-hover">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="#">Terms And Condition</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 mt_sm--20">
                            <div class="copyright-center text-center">
                                <ul class="social-icon social-default color-lessdark justify-content-center">
                                    <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="500"><a
                                            href="https://www.linkedin.com/company/ngalu-business/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--20 mt_sm--20">
                            <div class="copyright-right text-center text-lg-end">
                                <p class="copyright-text">© Ngalu Business 2023
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>
