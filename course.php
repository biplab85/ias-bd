<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IASBD</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="http://design.iasbd.co.uk/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="http://design.iasbd.co.uk/assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://design.iasbd.co.uk/assets/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/asRange.css" />
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
        <div class="course-filter-wrapper">
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
                        <div class="accordion-item advance-filter">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Advance Filters
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Available Intakes</label>
                                            <select>
                                                <option>Januaery</option>
                                                <option>Februaey</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tuition Fees Range</label>
                                            <input class="range-example-input" id="fee-range" type="text" min="0" max="25000" value="5" name="points" step="1000" />
                                            <div class="fees-range-tk">
                                                <span>10k to 15k</span>
                                                <span>15k to 20k</span>
                                                <span>20k to 25k</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Application Fees Range</label>
                                            <input class="range-example-input" id="fee-range" type="text" min="0" max="25000" value="5" name="points" step="1000" />
                                            <div class="fees-range-tk">
                                                <span>50 to 100</span>
                                                <span>110 to 150</span>
                                                <span>160 to 500</span>
                                            </div>
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
                <div class="filter-header">
                    <h3 class="title">Best Courses Matches <span>Total 31 Course Found</span></h3>
                    <div class="short">
                        <span>Sort By</span>
                        <select class="iasbd-select">
                            <option>Tuition ( High to Low )</option>
                            <option>Tuition ( High to Low )</option>
                            <option>Tuition ( High to Low )</option>
                            <option>Tuition ( High to Low )</option>
                        </select>
                    </div>
                </div>

                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


                </div>
                <div class="course-filter-card">
                    <div class="title-container">
                        <div class="title">
                            <h3>Masters Degree</h3>
                            <span>
                                Masters of Business, Entrepreneurship and Technology (MBET)
                            </span>
                        </div>
                        <div class="share-wrapper">
                            <a class="favorite" href="#"></a>
                            <div class="share-container">
                                <div class="dropdown share-btn-with-drpdown">
                                    <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="auth" src="assets/image/courses/share-orrange.svg" alt="" title="">
                                    </button>
                                    <div class="dropdown-menu share-btn-dropdown-menu" data-popper-placement="bottom-start">
                                        <div class="share-btn-dropdown-menu-container">
                                            <div class="copy">
                                                <input type="" name="" value="" placeholder="http://www.ias...">
                                                <button>Copy link</button>
                                            </div>
                                            <div class="social-link">
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/facebook.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/twiter.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/linkdin.svg" alt="" title="">
                                                </a>
                                                <a href="#">
                                                    <img class="" src="assets/image/icon/social-icon/color/pinteret.svg" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="compare" href="#"></a>
                        </div>
                    </div>

                    <div class="university-name-location">
                        <h3>
                            <img class="banner-bg" src="assets/image/courses/university-logo.svg" alt="" title="">
                            <a href="university-details.php"> University of Sydney </a>
                        </h3>
                        <div class="location">
                            <img class="banner-bg" src="assets/image/courses/location.svg" alt="" title="">
                            <h3>Camperdown NSW 2006, Australia</h3>
                        </div>
                    </div>

                    <div class="course-details-title">
                        <div class="tuition-fees">
                            <span class="university">
                                <img src="assets/image/courses/tution-fee.svg" alt="" title="">
                            </span>
                            <h3>Tuition Fees <span>$210,189</span></h3>
                        </div>
                        <div class="minimum-deposit">
                            <span class="country">
                                <img src="assets/image/courses/minimum-deposit.svg" alt="" title="">
                            </span>
                            <h3>Minimum Deposit <span>$50,000</span></h3>
                        </div>
                        <div class="scholarship">
                            <span class="faculty">
                                <img src="assets/image/courses/Scholarship.svg" alt="" title="">
                            </span>
                            <h3>Scholarship<span>$25,000</span></h3>
                        </div>
                        <div class="application-fees">
                            <span>
                                <img src="assets/image/courses/application-fees.svg" alt="" title="">
                            </span>
                            <h3> Application Fees<span>$1,000</span></h3>
                        </div>
                        <div class="duration">
                            <span>
                                <img src="assets/image/courses/time-black.svg" alt="" title="">
                            </span>
                            <h3>Durations<span>4 Years</span></h3>
                        </div>
                    </div>


                    <div class="details-strip">
                        <div class="intakes">
                            <div class="title">
                                <img class="banner-bg" src="assets/image/courses/intakes.svg" alt="" title="">
                                <span>Intakes:</span>
                            </div>
                            <div class="month">
                                <span>Jan</span>
                                <span>May</span>
                                <span>Sep</span>
                            </div>
                        </div>
                        <a class="read-mmore" href="course-details.php">
                            Program Details<i></i>
                        </a>
                    </div>


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
    <script type="text/javascript" src="assets/js/jquery-asRange.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>