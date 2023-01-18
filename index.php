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

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Top Header container S-->
    <?php include './pages/top-header.php'; ?>
    <!-- Top Header container E-->

    <!-- Menu Container S-->
    <?php include './pages/menu.php'; ?>
    <!-- Menu Container E-->

    <!-- Site Slider S-->
    <div>
        <?php include './pages/slider.php'; ?>
    </div>
    <!-- Site Slider E-->

    <section class="study-abroad-consultant">
        <div class="study-abroad-consultant-img">
            <div class="study-abroad-consultant-json wow fadeInLeft" id="studyAbroadConsultant"></div>
            <script>
                var animation = bodymovin.loadAnimation({
                    container: document.getElementById('studyAbroadConsultant'),
                    path: 'assets/json/secondimage.json',
                    render: 'svg',
                    loop: true,
                    autoplay: true,
                });
            </script>
        </div>

        <div class="content wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <div class="header-section">
                <h3 class="title">Study Abroad Consultant</h3>
                <span class="sub-title">Lorem Ipsum Dolor Sit Amet Adipiscing Elit</span>
            </div>
            <p>
                International Admission Service is one of the best & trusted education consultancy firms in Bangladesh. We are creating opportunities for an students who like to study abroad from Bangladesh, especially in the UK, USA, CANADA, AUSTRALIA, MALAYSIA & NZ, Etc. Wh We, International Admission Service confirms that students from.
            </p>
            <a class="ias-btn" href="#">Book An Appointment</a>
        </div>
    </section>


    <section class="best-consultancy-firm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="content-header-section white">
                            <h3 class="title">Services We Provide</h3>
                            <span class="sub-title">Apprise Education, Reprise Innovation</span>
                        </div>
                        <p>
                            International Admission Service is one of the best & trusted education consultancy firms in Bangladesh. We are creating opportunities for an students who like to study abroad from Bangladesh, especially in the UK, USA, CANADA, AUSTRALIA, MALAYSIA & NZ, Etc. Wh We, International Admission Service confirms that students from.
                        </p>
                        <a class="ias-btn white" href="#">Book An Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section S -->
    <?php include './pages/service.php'; ?>
    <!-- Services Section E -->

    <!-- Student Consultancy Firm in Bangladesh S-->
    <?php include './pages/students-consultancy.php'; ?>
    <!-- Student Consultancy Firm in Bangladesh E-->


    <!-- Top Study Destinations S-->
    <?php include './pages/study-destinations.php'; ?>
    <!-- Top Study Destinations E-->

    <!-- Trusted Partners S-->
    <?php include './pages/trusted-partners.php'; ?>
    <!-- Trusted Partners E-->


    <!-- Success Story S-->
    <?php include './pages/success-story.php'; ?>
    <!-- Success Story E-->


    <!-- Success Story S-->
    <?php include './pages/blog.php'; ?>
    <!-- Success Story E-->

    <!-- Consultations from S-->
    <?php include './pages/consultation.php'; ?>
    <!-- Consultations from E-->


    <!-- Map S-->
    <?php include './pages/map.php'; ?>
    <!-- Map E-->


    <!-- Footer S-->
    <?php include './pages/footer.php'; ?>
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