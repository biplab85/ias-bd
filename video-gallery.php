<?php include('header.php'); ?>

<!-- Content Header S-->
<section class="ias-header m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-wrapper mb-30 mb-md-0">
                    <div class="content-header-section white">
                        <h3 class="title">Video Gallery</h3>
                    </div>

                    <div class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived no
                    </div>
                </div>
            </div>

            <div class="video-gallery-banner banner-bg wow fadeInLeft" id="photoGalleryBanner"></div>
            <script>
                var animation = bodymovin.loadAnimation({
                    container: document.getElementById('photoGalleryBanner'),
                    path: 'assets/json/video-galery.json',
                    render: 'svg',
                    loop: true,
                    autoplay: true,
                });
            </script>
        </div>
    </div>
</section>
<!-- Content Header E-->

<!-- video-gallery S -->
<section class="video-gallery-area py-80">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="video-card">
                    <div class="feature-video-box">
                        <img src="assets/image/video-gallery/video-thumb.jpg" alt="video" class="img-fluid w-100">
                        <a href="video-gallery-details.php" class="with-play-btn hyperlink d-flex justify-content-center align-items-center">
                            <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <div class="video-card-wrap pt-20 px-30 pb-30">
                        <div class="video-card-st-wrap d-flex justify-content-between mb-15">
                            <div class="video-card-title-wrap d-flex">
                                <div class="flag-icon me-10">
                                    <img class="img-fluid" src="assets/image/video-gallery/country-flag.png" alt="flag">
                                </div>
                                <h2 class="mb-0 video-card-title">Lorem Ipsum Dolor Sit</h2>
                            </div>

                            <div class="share-wrap">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="auth" src="assets/image/success-story/share.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="banner-bg" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video-card-info">
                            <ul class="list-inline list-unstyled mb-0 d-inline-flex justify-content-between w-100">
                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon eye-icon me-10"></span>
                                    <span class="text">15 Photo</span>
                                </li>

                                <li class="mb-10 text-white d-flex align-items-center">
                                    <span class="icon duration-icon me-10"></span>
                                    <span class="text">22-07-2022</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp mt-30" data-wow-duration="1s" data-wow-delay="1s">
            <div class="col-md-12">
                <div class="btn-container text-center">
                    <a class="ias-btn" href="#">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-gallery E -->

<div class="container mb-50">
    <div class="video-bottom-info-box" style="background-image: url(assets/image/video-gallery/video-details-vector.svg);">
        <div class="video-bottom-info-wrap">
            <h3 class="video-info-title mb-10">Talk to an Expert in your City. You Could Be the Next.</h3>

            <ul class="entry-meta-list list-inline d-block mb-10">
                <li class="entry-meta-item mb-15">
                    <span class="entry-meta-icon"><img src="assets/image/video-gallery/call-icon.svg" alt="call"></span>
                    <span class="entry-meta-title text-white">+8801711875240</span>
                </li>
                <li class="entry-meta-item mb-15">
                    <span class="entry-meta-icon"><img src="assets/image/video-gallery/mail-icon.svg" alt="mail-icon"></span>
                    <span class="entry-meta-title text-white">+8801711875240</span>
                </li>
                <li class="entry-meta-item mb-15 align-items-start">
                    <span class="entry-meta-icon"><img src="assets/image/video-gallery/location-icon.svg" alt="date"></span>
                    <span class="entry-meta-title text-white">House No: 313, Road No: 21<br>Mohakhali DOHS, Dhaka: 1212</span>
                </li>
            </ul>

            <a href="team-detail.php" class="appointment-btn m-0">Book Appointment Now</a>
        </div>
    </div>
            </div>

<!-- Footer S-->
<?php include 'footer.php'; ?>
<!-- Footer E-->

<script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/bundle.js"></script>
<script type="text/javascript" src="assets/js/isotope.pkgd.js"></script>
<script type="text/javascript" src="assets/js/jquery.steps.js"></script>
<script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/menu.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/slick.js"></script>
<script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/wow.min.js"></script>
<script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/custom.js"></script>
</body>

</html>