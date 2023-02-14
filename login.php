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


  <section class="admin-registration-section">
    <div class="container">
      <div class="admin-registration-box">
        <div class="row">
          <div class="col-md-4">
            <div class="admin-registration-slider">
              <h3>Log in to account and get started</h3>
              <div class="registration-slider">
                <div>
                  <div class="item-content">
                    <div class="login-animation wow fadeInLeft" id="loginAnimation"></div>
                    <script>
                      var animation = bodymovin.loadAnimation({
                        container: document.getElementById('loginAnimation'),
                        path: 'assets/json/login-animation.json',
                        render: 'svg',
                        loop: true,
                        autoplay: true,
                      });
                    </script>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting sit a</p>
                  </div>
                </div>

                <div>
                  <div class="item-content">
                    <img src="assets/image/admin-registration/slider-item.png">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting sit a</p>
                  </div>
                </div>

                <div>
                  <div class="item-content">
                    <img src="assets/image/admin-registration/slider-item.png">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting sit a</p>
                  </div>
                </div>
              </div>
              <!-- End Slider -->
            </div>
            <!-- End Registration Slider -->
          </div>

          <div class="col-md-6 offset-md-1">
            <div class="admin-registration-forms login-wrap">
              <div class="log-in-top">
                <div class="log-in-icon">
                  <img src="assets/image/login/logo-icon.svg">
                </div>
                <div class="log-in-info">
                  <h2>Welcome Back!</h2>
                  <p>We process the student visa of the <br> following countries:</p>
                </div>
                <!-- End info -->
                <div class="log-in-flags">
                  <img src="assets/image/login/flags.png">
                </div>
                <!-- End Flags -->

              </div>
              <!-- End -->
            </div>


            <div class="wizard clearfix">
              <div class="content clearfix" style="min-height:auto !important">
                <section class="step-box body current position-relative">
                  <div class="general-information">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-40 position-relative">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control form-control-lg" placeholder="Johnsm07@gm|">
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-md-12">
                        <div class="mb-20 position-relative">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control form-control-lg" placeholder="Your password">
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-md-12">
                        <div class="mb-50 position-relative">
                          <div class="login-remember">
                            <label class="iasbd-checkbox">
                              <input type="checkbox" name="" value="">
                              <span class="checkmark"></span>
                              <span class="text">Remember me</span>
                            </label>
                            <div class="forgot-password">
                              Forgot Password? <a href="#">Click here</a> to reset.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-md-12">
                        <div class="mb-30 position-relative">
                          <div class="btn-container text-center">
                            <button class="ias-btn" href="#">Log In</button>
                          </div>
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="col-md-12">
                        <div class="dont-account text-center">
                          <p>Don’t have an account? <a href="#">Click here </a> to Register</p>
                        </div>
                      </div>
                      <!-- End Col -->

                    </div>
                    <!-- End row -->

                  </div>
                </section>
                <!-- End row -->
              </div>
            </div>
            <!-- End General Information -->
          </div>
        </div>
      </div>

      <div class="referal login-referal">
        <div class="content">
          <h3 class="title">Start Earning with Our Referal Program</h3>
          <p class="desc">
            Share your referral code and start earning today.
          </p>
          <div class="copy-code">
            <h3>Your referral code:</h3>
            <div class="copy-input">
              <input type="text" name="" value="Iasbd.co.uk/referral/qck34i80">
              <button></button>
            </div>
          </div>
          <div class="share">
            <h3>Or Share on: </h3>
            <div>
              <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="referal-img">
          <img src="assets/image/login/affiliate.gif" />
        </div>
      </div>
    </div>


  </section>

  <!-- Footer S sss-->
  <?php include 'footer.php'; ?>
  <!-- Footer E-->




  <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/bundle.js"></script>
  <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/menu.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/slick.js"></script>
  <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/wow.min.js"></script>
  <script type="text/javascript" src="http://design.iasbd.co.uk/assets/js/custom.js"></script>
</body>

</html>