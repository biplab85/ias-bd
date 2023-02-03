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

  <section class="ceo-messaage-header events-header">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="content-header-section">
            <h3 class="title">Events</h3>
          </div>
          <div class="ceo-messges-content">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled.
          </div>
        </div>
        <!-- End Col -->
        <div class="col-md-6">
          <div class="our-teams-header-images position-relative">

            <div class="eventPageBanner wow fadeInLeft" id="eventPageBanner"></div>
            <script>
              var animation = bodymovin.loadAnimation({
                container: document.getElementById('eventPageBanner'),
                path: 'assets/json/event-page-banner.json',
                render: 'svg',
                loop: true,
                autoplay: true,
              });
            </script>
          </div>
        </div>
        <!-- End Col -->
      </div>
    </div>
  </section>

  <section class="events-section">
    <div class="container">
      <div class="row">
        <div class="events-search mb-80">
          <form class="row ms-2 me-2 search-form">
            <div class="col-md-8 p-0">
              <input type="text" class="form-control" placeholder="Search anything...">
            </div>
            <div class="col-md-2 p-0">
              <select class="form-select" aria-label="Default select example">
                <option selected>All countries</option>
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
        <!-- End Search-->
      </div>


      <div class="row">
        <div class="col-md-4">
          <div class="single-events">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>

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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>
        <!-- End Col -->

        <div class="col-md-4">
          <div class="single-events ongoing-event">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>

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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>

        <!-- End Col -->
        <div class="col-md-4">
          <div class="single-events past-event">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>

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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>

        <!-- End Col -->
        <div class="col-md-4">
          <div class="single-events">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>
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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>

        <!-- End Col -->
        <div class="col-md-4">
          <div class="single-events ongoing-event">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>

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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>
        <!-- End Col -->

        <div class="col-md-4">
          <div class="single-events past-event">
            <div class="single-events-img">
              <a href="events-details.php">
                <img class="" src="assets/image/events/01.jpg">
              </a>
            </div>
            <div class="single-events-info">
              <a href="events-details.php" class="single-events-btn">Upcoming Event</a>
              <h4><a href="events-details.php">Study Abroad-Workshop</a></h4>
              <div class="date-social">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/flag.jpg">
                  </li>
                  <li>
                    <div class="date">
                      <img class="" src="assets/image/events/calendar.svg">
                      <span>Aug 18, 2022</span>
                    </div>
                  </li>
                  <li>
                    <div class="time">
                      <img class="" src="assets/image/events/time.svg">
                      <span>15:30</span>
                    </div>
                  </li>
                </ul>

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
              <!-- End Date Social -->

              <div class="desc">
                <p>Join our countries’ unique “Study Abroad-Workshop” for the first time
                  introduced by International Admission Service, the best & trusted education...</p>
              </div>

              <div class="venue-time">
                <ul>
                  <li>
                    <img class="flag" src="assets/image/events/timer.svg">
                    <b>4 days, 3 hours left</b>
                  </li>
                  <li>
                    <img class="flag" src="assets/image/events/location.svg">
                    <b>Venue: <small> Lorem ipsum, dolor, Dhaka 1212.</small></b>
                  </li>
                </ul>
              </div>
              <!-- End venue -->

            </div>
            <!-- End Info -->
          </div>
          <!-- End -->
        </div>
        <!-- End Col -->

      </div>

      <div class="row justify-content-center">
        <div class="col-md-3 mt-5">
          <div class="btn-container text-center">
            <a class="w-100 ias-btn outline shadow-none" href="events-details.php">Explore More Events</a>
          </div>
        </div>
      </div>

  </section>




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