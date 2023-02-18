<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IASBD</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="http://design.iasbd.co.uk/assets/css/fontawesome.css">
    <link rel="stylesheet" href="http://design.iasbd.co.uk/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="http://design.iasbd.co.uk/assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://design.iasbd.co.uk/assets/css/slick-theme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.1/lottie.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>



    <!-- Top Header container S-->
    <?php include 'top-header.php'; ?>
    <!-- Top Header container E-->

    <!-- Menu Container S-->
    <?php include 'menu.php'; ?>
    <!-- Menu Container E-->

    <!-- Content Header S-->
    <section class="course ias-header" style="background-image: url(assets/image/courses/ellips.svg);">
        <div class="coursePageBanner wow fadeInLeft" id="coursePageBanner"></div>
        <script>
            var animation = bodymovin.loadAnimation({
                container: document.getElementById('coursePageBanner'),
                path: 'assets/json/course-page-banner.json',
                render: 'svg',
                loop: true,
                autoplay: true,
            });
        </script>
        <div class="container">
            <div class="col-md-6">
                <div class="content-wrapper">
                    <div class="content-header-section">
                        <h3 class="title">Find the Courses That Match Your Dream</h3>
                    </div>
                    <div class="course-seach-form">
                        <form>
                            <input type="text" name="" value="" placeholder="Enter Course Name" />
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Header E-->

    <!-- Course Filter container S -->
    <section class="course-filter">
        <div class="container">
            <div class="col-md-12 course-filter-container">
                <div class="filter-left-asside">
                    <h3 class="title">Filters</h3>

                    <div>
                        <div class="course-filter-card">
                            <h3 class="title">Program Level</h3>
                            <div>
                                <label class="iasbd-radio right w-100">
                                    <input type="radio" name="" value="">
                                    <span class="checkmark"></span>
                                    <span class="text form-check-label ">Remember me</span>
                                </label>
                            </div>
                        </div>
                        <div class="course-filter-card">
                            <h3 class="title">Country</h3>
                            <div>
                                <div class="form-check p-0">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <img class="" src="assets/image/courses/map.svg" alt="" title=""> Australia
                                    </label>
                                    <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                                <div class="form-check p-0">
                                    <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <img class="" src="assets/image/courses/map.svg" alt="" title=""> Canada
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="course-filter-card">
                            <h3 class="title">Faculty</h3>
                            <div>
                                <div class="form-check p-0">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lorem Ipsum Dolor Sit Amet
                                    </label>
                                    <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                                <div class="form-check p-0">
                                    <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Lorem Ipsum
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-right-asside">
                    <h3 class="title">Popular Courses</h3>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                               <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <div class="course-filter-card">
                        <div class="title-container">
                            <h3>
                                <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                                <a href="university-details.php"> University of Sydney </a>
                            </h3>
                            <img class="banner-bg" src="assets/image/courses/flag.svg" alt="" title="">
                        </div>
                        <div class="tag">
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                            <span>BSC in Computer Science</span>
                        </div>
                        <p class="short-desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                        </p>

                        <a class="read-mmore" href="course-details.php">
                            Read more <i></i>
                        </a>
                    </div>
                    <section class="contact-reg-container w-100">
                        <div class="video-bottom-info-box ps-5" style="background-image: url(assets/image/video-gallery/video-details-vector.svg);">
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
                    </section>

                </div>
            </div>
        </div>
    </section>
    <!-- Course Filter container E -->


    <!-- Footer S-->
    <?php include 'footer.php'; ?>
    <!-- Footer E-->


    <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/bundle.js"></script>
    <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/menu.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/slick.js"></script>
    <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>