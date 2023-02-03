<?php include('header.php'); ?>

<!-- Content Header S-->
<section class="ias-header m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-wrapper mb-30 mb-md-0">
                    <div class="content-header-section white">
                        <h3 class="title">Explore The Success Stories of Successful Students</h3>
                    </div>

                    <div class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                    </div>
                </div>
            </div>

            <div class="success-stories-banner banner-bg wow fadeInLeft" id="successStoriesBanner"></div>
            <script>
                var animation = bodymovin.loadAnimation({
                    container: document.getElementById('successStoriesBanner'),
                    path: 'assets/json/success-stories-banner.json',
                    render: 'svg',
                    loop: true,
                    autoplay: true,
                });
            </script>
        </div>
    </div>
</section>
<!-- Content Header E-->

<!-- photo-gallery S -->
<section class="success-story">
    <div class="container">


        <div class="row card-container">
            <div class="events-search mb-80">
                <form class="row ms-2 me-2 search-form">
                    <div class="col-md-8 p-0">
                        <input type="text" class="form-control" placeholder="Search anything...">
                    </div>
                    <div class="col-md-2 p-0">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">All countries</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-2 p-0">
                        <button type="submit" class="btn events-search-btn">
                            Search
                            <img class="ms-3" src="assets/image/events/search.svg">
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="card">
                    <div class="banner">
                        <div class="banner-bg wow fadeInLeft" id="bannerBgd"></div>
                        <script>
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('bannerBgd'),
                                path: 'assets/json/bg-with-like-share.json',
                                render: 'svg',
                                loop: true,
                                autoplay: true,
                            });
                        </script>

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170.jpg" alt="" title="" />
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="" />
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="" />
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="" />
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="card">
                    <div class="banner">
                        <div class="banner-bg wow fadeInLeft" id="bannerBgds"></div>
                        <script>
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('bannerBgds'),
                                path: 'assets/json/bg-with-like-share.json',
                                render: 'svg',
                                loop: true,
                                autoplay: true,
                            });
                        </script>
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="" />

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170.jpg" alt="" title="" />
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="" />
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="" />
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="" />
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
                                    <div class="share-container">
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

                            </div>
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
                                    <div class="share-container">
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

                            </div>
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-0.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
                                    <div class="share-container">
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

                            </div>
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-1.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-0.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-1.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-0.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;">
                <div class="card">
                    <div class="banner">
                        <img class="banner-bg" src="assets/image/success-story/banner-bg.svg" alt="" title="">

                        <div class="auth-wrapper">
                            <div class="auth-container">
                                <img class="" src="assets/image/success-story/170X170-1.jpg" alt="" title="">
                            </div>
                        </div>

                    </div>

                    <div class="description">
                        <div class="card-header">
                            <div class="left-asside">
                                <span>Duke</span>
                                <a href="success-story-details.php">Duke University</a>
                            </div>
                            <div class="right-asside">
                                <a href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/plane.svg" alt="" title="">
                                    </i>
                                </a>
                                <a class="glob" href="success-story-details.php">
                                    <i class="icon">
                                        <img src="assets/image/success-story/glob.svg" alt="" title="">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="uesr-info">
                            <div class="name">
                                <h3>Samia Rahman</h3>
                                <p>
                                    Masters of Business Administration in Management ( MBA - MIS )
                                </p>
                            </div>
                            <div class="share">
                                <h4>
                                    <i class="flag">
                                        <img class="auth" src="assets/image/success-story/flag.svg" alt="" title="">
                                    </i>
                                    <span>USA</span>
                                </h4>
                                <div class="share-container">
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
                        </div>
                        <p>
                            UK's unique and developed education system encourages the students to be creative, innovative, is a and think independently.
                        </p>
                    </div>
                    <div class="btn-container text-center">
                        <a class="w-100 ias-btn outline shadow-none" href="success-story-details.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInDown;">
            <div class="col-md-12">
                <div class="btn-container text-center">
                    <a class="ias-btn" href="success-story-details.php">View More Stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- photo-gallery E -->

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