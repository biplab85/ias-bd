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
                path: 'assets/json/course-page-banner-new.json',
                render: 'svg',
                loop: true,
                autoplay: true,
            });
        </script>
        <div class="container">
            <div class="col-md-6">
                <div class="content-wrapper">
                    <div class="content-header-section">
                        <h3 class="title">Quick Search</h3>
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
                    <div class="filter-wrapper">
                        <div class="accordion">
                            <div class="accordion-item">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Filterss
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-container">
                                            <div class="form-group">
                                                <label>Country of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Program Level of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Preferred Location</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>University</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Interested in Learning by</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Country of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Learning Interests</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0 mt-5">
                                                <button class="ias-btn">Apply Filters</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="advance-filter accordion">
                            <div class="accordion-item">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Advance Filters
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-container">
                                            <div class="form-group">
                                                <label>Country of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Program Level of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group language-rate d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Listening</label>
                                                    <input type="text" name="" value="" />
                                                </div>
                                                <div>
                                                    <label>Listening</label>
                                                    <input type="text" name="" value="" />
                                                </div>
                                                <div>
                                                    <label>Listening</label>
                                                    <input type="text" name="" value="" />
                                                </div>
                                                <div>
                                                    <label>Listening</label>
                                                    <input type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Duration of Course</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Available Intakes</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Country of Interest</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Learning Interests</label>
                                                <select>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0 mt-5">
                                                <button class="ias-btn">Apply Filters</button>
                                            </div>
                                        </div>
                                    </div>
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