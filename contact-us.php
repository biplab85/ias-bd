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

  <section class="ias-header m-0">
    <div class="contactUs wow fadeInLeft" id="contactUs"></div>
    <script>
      var animation = bodymovin.loadAnimation({
        container: document.getElementById('contactUs'),
        path: 'assets/json/contact-us.json',
        render: 'svg',
        loop: true,
        autoplay: true,
      });
    </script>
    <div class="container">
      <div class="col-md-5">
        <div class="content-wrapper">
          <div class="content-header-section white">
            <h3 class="title">Hello! We’re Here to Help You</h3>
          </div>

          <div class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-block-wrap">
            <div class="contact-block">
              <div class="contact-block-inner">
                <div class="contact-icon">
                  <img class="" src="assets/image/contact-us/icon/location.png" alt="" title="">
                </div>
                <!-- End Icon -->
                <div class="contact-info">
                  <h4>Visit Us</h4>
                  <p>House No: 313, Road No: 21 Mohakhali DOHS, Dhaka: 1212</p>
                </div>
              </div>
              <!-- End inner -->
            </div>
            <!-- End Contact Block -->

            <div class="contact-block me-0">
              <div class="contact-block-inner">
                <div class="contact-icon">
                  <img class="" src="assets/image/contact-us/icon/hotline.png" alt="" title="">
                </div>
                <!-- End Icon -->
                <div class="contact-info">
                  <h4>Hotline</h4>
                  <p>+8801877772060</p>
                </div>
              </div>
              <!-- End inner -->
            </div>
            <!-- End Contact Block -->

            <div class="contact-block">
              <div class="contact-block-inner">
                <div class="contact-icon">
                  <img class="" src="assets/image/contact-us/icon/whats.png" alt="" title="">
                </div>
                <!-- End Icon -->
                <div class="contact-info">
                  <h4>WhatsApp</h4>
                  <p>+8801711875240</p>
                </div>
              </div>
              <!-- End inner -->
            </div>
            <!-- End Contact Block -->

            <div class="contact-block me-0">
              <div class="contact-block-inner">
                <div class="contact-icon">
                  <img class="" src="assets/image/contact-us/icon/mail.png" alt="" title="">
                </div>
                <!-- End Icon -->
                <div class="contact-info">
                  <h4>Email Us</h4>
                  <p>info@iasbd.co.uk</p>
                </div>
              </div>
              <!-- End inner -->
            </div>
            <!-- End Contact Block -->
          </div>
          <!-- End Contact Block Wrap -->
        </div>
        <!-- End Col -->

        <div class="col-md-6">
          <div class="contact-map">
            <div class="map-block position-relative overflow-hidden mb-40">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58420.41605547438!2d90.4003584!3d23.773183999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1666032642073!5m2!1sen!2sbd" width="100%" height="280px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- End Map Block -->

            <div class="map-block position-relative overflow-hidden mb-0">
              <div class="map-overlay">
                <a href="#" class="map-play">
                  <img src="assets/image/play-btn.gif" style="width: 66px; height: 66px;" alt="play" class="img-fluid">n
                </a>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58420.41605547438!2d90.4003584!3d23.773183999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1666032642073!5m2!1sen!2sbd" width="100%" height="280px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- End Map Block -->
          </div>
        </div>
        <!-- End Col -->
      </div>
  </section>

  <section class="contact-team">
    <div class="row justify-content-center text-center">
      <div class="single-teams-title mb-40">
        <h3>Meet Our Team</h3>
        <p>Lorem Ipsum is simply dummy text of the printing.</p>
      </div>
      <!-- End Title -->
      <div class="d-flex justify-content-center flex-wrap">
        <div class="single-teams ms-3 me-3">
          <div class="skewed-bg black">
            <div class="single-teams-top">
              <h3 class="teams-name">H M Mashiur Rahman</h3>
              <div class="teams-top-info">
                <div class="teams-designation">
                  <p>Chief Executive <br> Officer - CEO
                    <strong>BBA</strong>
                  </p>
                  <div class="social-block">
                    <div class="share-container">
                      <div class="dropdown share-btn-with-drpdown">
                        <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="" src="assets/image/share-white.svg">
                        </button>
                        <div class="dropdown-menu share-btn-dropdown-menu left-align">
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

                <div class="teams-images">
                  <img class="" src="assets/image/teams/team-detail/01.jpg">
                </div>
              </div>
              <!-- End Info -->
            </div>
            <!-- End -->
          </div>
          <!-- End Bg -->

          <div class="single-teams-des">
            <p>Lorem Ipsum is simply dummy is an text of the printing and is a uncut of typesetting industry.</p>
          </div>
          <!-- End Info -->
          <div class="single-teams-footer">
            <ul class="text-start">
              <li>
                <img class="" src="assets/image/teams/call.svg">
                <a href="01234 567890">01234 567890</a>
              </li>
              <li>
                <img class="" src="assets/image/teams/mail.svg">
                <a href="name@iasbd.co.uk">name@iasbd.co.uk</a>
              </li>
            </ul>

            <div class="btn-container">
              <a class="w-100 ias-btn outline shadow-none" href="team-detail.php">More About Mashiur</a>
            </div>
          </div>
          <!-- End Footer-->
        </div>
        <!-- End Single Teams -->

        <div class="single-teams ms-3 me-3">
          <div class="skewed-bg black">
            <div class="single-teams-top">
              <h3 class="teams-name">H M Mashiur Rahman</h3>
              <div class="teams-top-info">
                <div class="teams-designation">
                  <p>Chief Executive <br> Officer - CEO
                    <strong>BBA</strong>
                  </p>
                  <div class="social-block">
                    <div class="share-container">
                      <div class="dropdown share-btn-with-drpdown">
                        <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="" src="assets/image/share-white.svg">
                        </button>
                        <div class="dropdown-menu share-btn-dropdown-menu left-align">
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

                <div class="teams-images">
                  <img class="" src="assets/image/teams/team-detail/01.jpg">
                </div>
              </div>
              <!-- End Info -->
            </div>
            <!-- End -->
          </div>
          <!-- End Bg -->

          <div class="single-teams-des">
            <p>Lorem Ipsum is simply dummy is an text of the printing and is a uncut of typesetting industry.</p>
          </div>
          <!-- End Info -->
          <div class="single-teams-footer">
            <ul class="text-start">
              <li>
                <img class="" src="assets/image/teams/call.svg">
                <a href="01234 567890">01234 567890</a>
              </li>
              <li>
                <img class="" src="assets/image/teams/mail.svg">
                <a href="name@iasbd.co.uk">name@iasbd.co.uk</a>
              </li>
            </ul>

            <div class="btn-container">
              <a class="w-100 ias-btn outline shadow-none" href="team-detail.php">More About Mashiur</a>
            </div>
          </div>
          <!-- End Footer-->
        </div>
        <!-- End Single Teams -->

        <div class="single-teams ms-3 me-3">
          <div class="skewed-bg black">
            <div class="single-teams-top">
              <h3 class="teams-name">H M Mashiur Rahman</h3>
              <div class="teams-top-info">
                <div class="teams-designation">
                  <p>Chief Executive <br> Officer - CEO
                    <strong>BBA</strong>
                  </p>
                  <div class="social-block">
                    <div class="share-container">
                      <div class="dropdown share-btn-with-drpdown">
                        <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="" src="assets/image/share-white.svg">
                        </button>
                        <div class="dropdown-menu share-btn-dropdown-menu left-align">
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

                <div class="teams-images">
                  <img class="" src="assets/image/teams/team-detail/01.jpg">
                </div>
              </div>
              <!-- End Info -->
            </div>
            <!-- End -->
          </div>
          <!-- End Bg -->

          <div class="single-teams-des">
            <p>Lorem Ipsum is simply dummy is an text of the printing and is a uncut of typesetting industry.</p>
          </div>
          <!-- End Info -->
          <div class="single-teams-footer">
            <ul class="text-start">
              <li>
                <img class="" src="assets/image/teams/call.svg">
                <a href="01234 567890">01234 567890</a>
              </li>
              <li>
                <img class="" src="assets/image/teams/mail.svg">
                <a href="name@iasbd.co.uk">name@iasbd.co.uk</a>
              </li>
            </ul>

            <div class="btn-container">
              <a class="w-100 ias-btn outline shadow-none" href="team-detail.php">More About Mashiur</a>
            </div>
          </div>
          <!-- End Footer-->
        </div>
        <!-- End Single Teams -->

        <div class="single-teams ms-3 me-3">
          <div class="skewed-bg black">
            <div class="single-teams-top">
              <h3 class="teams-name">H M Mashiur Rahman</h3>
              <div class="teams-top-info">
                <div class="teams-designation">
                  <p>Chief Executive <br> Officer - CEO
                    <strong>BBA</strong>
                  </p>
                  <div class="social-block">
                    <div class="share-container">
                      <div class="dropdown share-btn-with-drpdown">
                        <button class="share-btn-icon p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="" src="assets/image/share-white.svg">
                        </button>
                        <div class="dropdown-menu share-btn-dropdown-menu left-align">
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

                <div class="teams-images">
                  <img class="" src="assets/image/teams/team-detail/01.jpg">
                </div>
              </div>
              <!-- End Info -->
            </div>
            <!-- End -->
          </div>
          <!-- End Bg -->

          <div class="single-teams-des">
            <p>Lorem Ipsum is simply dummy is an text of the printing and is a uncut of typesetting industry.</p>
          </div>
          <!-- End Info -->
          <div class="single-teams-footer">
            <ul class="text-start">
              <li>
                <img class="" src="assets/image/teams/call.svg">
                <a href="01234 567890">01234 567890</a>
              </li>
              <li>
                <img class="" src="assets/image/teams/mail.svg">
                <a href="name@iasbd.co.uk">name@iasbd.co.uk</a>
              </li>
            </ul>

            <div class="btn-container">
              <a class="w-100 ias-btn outline shadow-none" href="team-detail.php">More About Mashiur</a>
            </div>
          </div>
          <!-- End Footer-->
        </div>
        <!-- End Single Teams -->


      </div>
      <!-- End  -->
    </div>
  </section>

  <section class="access-services pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content-header-section text-center">
            <h3 class="title">Access the Right Services</h3>
            <span class="sub-title">Lorem Ipsum Dolor Sit Amet</span>
          </div>
        </div>
      </div>

      <div class="contact-service-wrapper">
        <div class="contact-service">
          <div class="access-services-block">
            <div class="services-call-box">
              <div class="icon">
                <img class="" src="assets/image/contact-us/service/call.png" alt="" title="">
              </div>
              <div class="services-call-number">01711-875240</div>
            </div>
            <!-- Call End -->
            <div class="services-images-box">
              <img class="" src="assets/image/call-center.svg" alt="" title="">
            </div>
            <!-- End Images -->
          </div>
          <div class="access-services-block">
            <div class="services-call-box">
              <div class="icon" style="background-color: #3A5EC2;">
                <img class="" src="assets/image/contact-us/service/24-7.png" alt="" title="">
              </div>
              <div class="services-call-number" style="background-color: #476CD2;">Service</div>
            </div>
            <!-- Call End -->
            <div class="services-images-box">
              <img class="" src="assets/image/contact-us/service/service-02.png" alt="" title="">
            </div>
            <!-- End Images -->
          </div>
          <!-- End  -->
        </div>
        <!-- End Coll -->

        <!-- End Coll -->
      </div>
    </div>
  </section>

  <section class="partner-with-us">
    <div class="partner-list-wrapper">
      <div class="partner-list">
        <div class="details">
          <div class="short-details">
            <h4>Referral &amp; Sub-Agents</h4>
            <p>
              Please speak to us about our referral partner and sub-agent programs.
            </p>
            <div class="contact">
              <span>
                <img src="assets/image/partner/call.svg" alt="" title=""> +8801711875240
              </span>
              <span>
                <img src="assets/image/partner/mail.svg" alt="" title=""> info@iasbd.co.uk
              </span>
            </div>
            <div class="partner-img">
              <img src="assets/image/partner/partner-1.svg" alt="" title="">
            </div>
          </div>
        </div>
      </div>
      <div class="partner-list second">
        <div class="details">
          <div class="short-details">
            <h4>Referral &amp; Sub-Agents sss</h4>
            <p>
              Please speak to us about our referral partner and sub-agent programs.
            </p>
            <div class="contact">
              <span>
                <img src="assets/image/partner/call.svg" alt="" title=""> +8801711875240
              </span>
              <span>
                <img src="assets/image/partner/mail.svg" alt="" title=""> info@iasbd.co.uk
              </span>
            </div>
            <div class="partner-img">
              <img src="assets/image/partner/partner-2.svg" alt="" title="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-reg-container">
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