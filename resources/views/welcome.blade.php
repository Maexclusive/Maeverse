<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }

            .logo-animae {
                background-image: url(img/logo.png);
                background-size: cover;
                width: 20px; height: 20px;

            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('css/corporate/vendor.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/corporate/app.min.css')}}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>

<body class="antialiased">



    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container">

        <!-- BEGIN header -->
        <div class="header header-default">
            <div class="container d-flex">
                <div class="header-logo">
                    <a href="index.html" class="logo-link">
                        <img src="img/logo.png" style="height: 1.5rem;" class="mx-1" alt=""><b>AniMae</b> <small>Community</small>
                    </a>
                </div>
                <div class="header-nav">
                    <div class="container">
                        <div class="header-nav-item">
                            <a href="about.html" class="header-nav-link">Who We Are</a>
                        </div>
                        <div class="header-nav-item">
                            <a href="products.html" class="header-nav-link">Talents</a>
                        </div>
                        <div class="header-nav-item">
                            <a href="newsroom.html" class="header-nav-link">Events</a>
                        </div>
                        <div class="header-nav-item">
                            <a href="careers.html" class="header-nav-link">Partner</a>
                        </div>
                        <div class="header-nav-item">
                            <a href="contact_us.html" class="header-nav-link">Contact Us</a>
                        </div>
                    </div>
                </div>

                @if (Route::has('login'))
                <div class="hidden header-btn gap-2">

                    @auth
                    <a href="{{ url('/home') }}" class="btn btn-primary fw-bold rounded-pill">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary fw-bold rounded-pill">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bold rounded-pill">Register</a>
                    @endif
                    @endauth

                    @endif



                </div>
                <button class="header-mobile-nav-toggler" type="button" data-toggle="header-mobile-nav">
                    <span class="header-mobile-nav-toggler-icon"></span>
                </button>
            </div>
        </div>
        <!-- END header -->


        <!-- style="height: 25rem;" -->
        <!-- BEGIN section -->
        <div class="section pt-4 pb-0 mb-5 d-md-none">
            <h1 class="text-warning text-center display-5 fw-bolder "
                style="padding-top: 16rem; padding-bottom: 16rem;">AniMae</h1>
        </div>
        <!-- END section -->

        <!-- BEGIN section -->
        <div class="section pt-4 pb-0 mb-5 ">

        </div>
        <!-- END section -->





        <!-- BEGIN section -->
        <div class="section pt-0 ">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row gx-0 align-items-center">
                    <!-- BEGIN col-6 -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <!-- <img class="mw-100" style="width: 343px; height: 247px;"></img> -->
                        <img class="mw-100" src="{{ asset('')}}img/mae_svg/1.svg" alt="" />
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-lg-6 px-lg-5">
                        <div class="display-5 fw-bolder mb-2">Hallo Maeverse</div>
                        <div class="fs-20px fw-bold text-gray-600 mb-3 mb-lg-5">
                            Hallo Semuanya Selamat Datang Di Maeverse,Aplikasi Berbasis Website Untuk AniMae
                            Community.Disini Kalian Bisa Mendapatkan Berbagai Informasi Seputar AniMae,Jelajahi Halaman
                            dan Nantikan Informasi Terbaru nya Hanya di Maeverse
                        </div>

                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END section -->

        <!-- BEGIN section -->
        <div class="section pt-0 p mt-lg-0 ">
            <!-- BEGIN container -->
            <div class=" py-5 px-5 bg-light">
                <div class="container">
                    <!-- BEGIN row -->
                    <div class="row justify-content-center">
                        <!-- BEGIN col-3 -->
                        <div class="col-6 col-lg-3">
                            <div class="fw-bolder display-4">2022</div>
                            <div class="fw-bolder h4 text-gray-500 mb-lg-0">Founded since</div>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->
                        <div class="col-6 col-lg-3">
                            <div class="fw-bolder display-4">100+</div>
                            <div class="fw-bolder h4 text-gray-500 mb-lg-0">Active user</div>
                        </div>
                        <!-- END col-3 -->
                        <!-- BEGIN col-3 -->

                        <!-- END col-3 -->
                    </div>
                    <!-- END row -->
                </div>

            </div>
            <!-- END container -->
        </div>
        <!-- END section -->

        <!-- BEGIN section -->
        <div class="section bg-light" style="margin-bottom: 6rem;">
            <!-- BEGIN container -->
            <div class="container position-relative">
                <!-- BEGIN row -->
                <div class="row gx-5 align-items-center">
                    <!-- BEGIN col-6 -->
                    <div class="col-lg-6">
                        <h4 class="opacity-5">Unlock Your</h4>
                        <div class="section-title">Inner Otaku with <a href="" class="text-warning">AniMae</a></div>
                        <div class="section-desc fw-bold fs-16px">
                            Gabung Animae dan buka sisi kreatif wibu yang kamu miliki! Cosplay, konten,
                            bersenang-senang, dan tumbuh bersama dalam komunitas yang memiliki tujuan yang sama
                        </div>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-lg-6">
                        <img class="mw-100" src="{{ asset('')}}img/inner_otakus.jpg" alt="" />
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END section -->



        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Red" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Pink" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Orange" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Yellow" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Lime" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Green" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Teal" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Aqua" data-original-title="" title="">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-blue" data-theme="" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Default" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Purple" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Indigo" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="theme-black" data-click="theme-selector"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                            data-bs-title="Black" data-original-title="" title="">&nbsp;</a></li>
                </ul>
                <hr class="mb-0" />
                <div class="row mt-10px pt-3px">
                    <div class="col-9 control-label text-dark fw-bold">
                        <div>Dark Mode <span class="badge bg-primary ms-1 position-relative py-4px px-6px"
                                style="top: -1px">NEW</span></div>
                        <div class="lh-14 fs-13px">
                            <small class="text-dark opacity-50">
                                Adjust the appearance to reduce glare and give your eyes a break.
                            </small>
                        </div>
                    </div>
                    <div class="col-3 d-flex">
                        <div class="form-check form-switch ms-auto mb-0 mt-2px">
                            <input type="checkbox" class="form-check-input" name="app-theme-dark-mode"
                                id="appThemeDarkMode" value="1" />
                            <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->

        <!-- BEGIN footer -->
        <div class="footer">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="footer-logo">
                            <span class="footer-logo-text">AniMae <small>Community</small></span>
                        </div>
                        <p class="footer-desc">
                            Wadah Bagi Para Cosplayer,Content Creator,Photographer,Otaku,Event.Dan Hal hal berbau
                            jejepangan lainnya
                        </p>
                        <h4 class="footer-title">Follow Us</h4>
                        <div class="footer-media-list">
                            <a href="https://www.facebook.com/profile.php?id=100091418687129" class="me-1"><i
                                    class="fab fa-lg fa-facebook fa-fw"></i></a>
                            <a href="https://www.instagram.com/animae.id/" class="me-2"><i
                                    class="fab fa-lg fa-instagram fa-fw"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-lg fa-twitter fa-fw"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-lg fa-youtube fa-fw"></i></a>
                            <a href="#" class="me-2"><i class="fab fa-lg fa-linkedin fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <h4 class="footer-title">Community</h4>
                        <ul class="footer-link-list">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Community Info</a></li>
                            <li><a href="#">Talents</a></li>
                            <!-- <li><a href="#">For Investors</a></li> -->
                            <!-- <li><a href="#">Brand Resources</a></li> -->
                        </ul>
                        <hr class="my-4 text-gray-600" />
                        <h4 class="footer-title">Policies</h4>
                        <!-- <ul class="footer-link-list">
							<li><a href="#">Community Standards</a></li>
							<li><a href="#">Data Policy</a></li>
							<li><a href="#">Cookie Policy</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul> -->
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <h4 class="footer-title">Our Store</h4>
                        <ul class="footer-link-list">
                            <li><a href="#">Shopee</a></li>
                            <!-- <li><a href="#">Store App</a></li> -->
                            <!-- <li><a href="#">Recycling Programme</a></li> -->
                            <!-- <li><a href="#">Order Status</a></li> -->
                            <!-- <li><a href="#">Shopping Help</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <h4 class="footer-title">Help Center</h4>
                        <ul class="footer-link-list">
                            <li><a href="#">Contact Form</a></li>
                            <!-- <li><a href="#">Live Chat Support</a></li> -->
                            <!-- <li><a href="#">Portal Help Center</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                            <div class="footer-copyright-text">&copy; 2022 - 2023 AniMae Community All Rights Reserved</div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <span class="dropdown me-4">
                                <a href="#" class="footer-copyright-link dropdown-toggle"
                                    data-bs-toggle="dropdown">United States (English)</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">United States (English)</a></li>
                                    <li><a href="#" class="dropdown-item">China (简体中文)</a></li>
                                    <li><a href="#" class="dropdown-item">Brazil (Português)</a></li>
                                    <li><a href="#" class="dropdown-item">Germany (Deutsch)</a></li>
                                    <li><a href="#" class="dropdown-item">France (Français)</a></li>
                                    <li><a href="#" class="dropdown-item">Japan (日本語)</a></li>
                                    <li><a href="#" class="dropdown-item">Korea (한국어)</a></li>
                                    <li><a href="#" class="dropdown-item">Latin America (Español)</a></li>
                                    <li><a href="#" class="dropdown-item">Spain (Español)</a></li>
                                </ul>
                            </span>
                            <a href="#" class="footer-copyright-link">Sitemap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END footer -->
    </div>
    <!-- end page container -->



    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('js/corporate/vendor.min.js')}}"></script>
    <script src="{{ asset('js/corporate/app.min.js')}}"></script>

    </div>
</body>

</html>
