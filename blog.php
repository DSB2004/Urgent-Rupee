<?php $id = $_GET['id'];
$content = file_get_contents('./assets/static/blogs.json');
$blogs = json_decode($content, true);
$blog = null;
foreach ($blogs as $blog_) {
    if ($blog_['id'] === $id) {
        $blog = $blog_;
        break;
    }
} ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Quick loans available in key Indian cities: Delhi, Mumbai, Hyderabad, Bangalore, and Kolkata. Contact us for quick financial solutions.">

    <meta name="keywords"
        content="quick loan, cash loan in 1 hour in india, short term loan, mini cash loan, immediate cash loans in india, instant loan without documents, Instant Cash Loan In 1 Hour, Payday Loans, Instant Loans, Online Loan Apply, Instant Loan, Online Loan, Online Loan, Easy Loan, Instant Cash Loan In 1 Hour India, India, delhi, Mumbai, Bangalore, Hyderabad, Kolkata, pune, Chennai, ahmedabad, jaipur, Delhi NCR ">
    <link rel="canonical" href="https://www.urgentrupee.com/contact.php" />
    <title>Apply for Cash Personal Loan in Ahmedabad | Instant Disbursal in 14 Min </title>

    <meta name="description"
        content="Instant cash loan in Ahmedabad online with Urgentrupee. Apply for a loan of Rs. 5 lakh at best low interest rate at minimum processing fee. 100% online process." />

    <link rel="canonical" href="https://www.urgentrupee.com/instant-loan-ahmedabad.php" />

    <!-- <h1>/Instant Loan Ahmedabad</h1> -->

    <meta property="og:type" content="website">
    <meta property="og:title" content=" Apply for Cash Personal Loan in Ahmedabad | Instant Disbursal in 14 Min">
    <meta property="og:description"
        content=" Instant cash loan in Ahmedabad online with Urgentrupee. Apply for loan of  Rs. 5 lakh at Best low interest rate at minimum processing fee.  100% online process.">
    <meta property="og:url" content="https://www.urgentrupee.com/instant-loan-ahmedabad.php">
    <meta property="og:image" content="https://www.urgentrupee.com/assets/images/logo-dark.png">
    <meta content="index, follow" name="robots" />
    <meta content="all, follow" name="googlebot" />
    <meta content="all, follow" name="yahoobot" />
    <meta content="all, follow" name="msnbot" />
    <meta content="all, follow" name="bingbot" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Urgentrupee ">
    <meta name="twitter:title" content="Apply for Cash Personal Loan in Ahmedabad | Instant Disbursal in 14 Min">
    <meta name="twitter:description"
        content=" Instant cash loan in Ahmedabad online with Urgentrupee. Apply for loan of  Rs. 5 lakh at Best low interest rate at minimum processing fee.  100% online process.">
    <meta name="twitter:image" content="https://www.urgentrupee.com/assets/images/logo-dark.png">
    <meta name="twitter:image:alt" content="urgentrupee.com">

    <meta property="og:type" content="website">
    <meta property="og:title" content=" Salary Advance Loan | instant loan in 14 Minutes | Contact Us Now ">
    <meta property="og:description"
        content=" Quick loans available in key Indian cities: Delhi, Mumbai, Hyderabad, Bangalore, and Kolkata. Contact us for quick financial solutions.">
    <meta property="og:url" content="https://www.urgentrupee.com/contact.php">
    <meta property="og:image" content="https://www.urgentrupee.com/assets/images/logo-dark.png">
    <meta content="index, follow" name="robots" />
    <meta content="all, follow" name="googlebot" />
    <meta content="all, follow" name="yahoobot" />
    <meta content="all, follow" name="msnbot" />
    <meta content="all, follow" name="bingbot" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Urgentrupee ">
    <meta name="twitter:title" content="Salary Advance Loan | instant loan in 14 Minutes | Contact Us Now">
    <meta name="twitter:description"
        content=" Quick loans available in key Indian cities: Delhi, Mumbai, Hyderabad, Bangalore, and Kolkata. Contact us for quick financial solutions.">
    <meta name="twitter:image" content="https://www.urgentrupee.com/assets/images/logo-dark.png">
    <meta name="twitter:image:alt" content="urgentrupee.com">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.html" />

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/finlon-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/finlon.css" />
    <link rel="stylesheet" href="assets/css/city-content.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <section class="page-wrapper">
        <?php include "includes/header.php" ?>
        <nav class="main-menu">
            <div class="container-fluid">
                <div class="main-menu__logo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-1" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="main-menu__logo__shape-2" viewBox="0 0 317 120">
                        <path d="M259.856,120H0V0H274l43,37.481Z" />
                    </svg>
                    <a href="/">
                        <img src="assets/images/logo-dark.png" width="140" height="51" alt="Urgentrupee">
                    </a>
                </div>
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>

                        <li>
                            <a href="how-it-works.php">How it Works</a>
                        </li>
                        <li>
                            <a href="loan-repay.php">Loan Repayment</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ's</a>
                        </li>

                        <li class="current">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu__right">
                    <a href="#" class="main-menu__toggler mobile-nav__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="apply.php" class="thm-btn main-menu__btn">Loan Apply</a>
                    <a href="tel:9643003906" class="main-menu__contact">
                        <span class="main-menu__contact__icon">
                            <i class="icon-phone"></i>
                        </span>
                        <span class="main-menu__contact__text">
                            <strong>+91-9643-003-906</strong>
                            Mon to Sat: 10:00 am to 7:00 pm
                        </span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.webp
                );"></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Blogs</a></li>
                    <li>
                        <?php
                        echo '<span>' .
                            $blog['heading'];
                        '</span>'
                            ?>
                    </li>
                </ul>
                <!-- <h1>Contact us</h1> -->
            </div>
        </section>

        <!-- city section -->

        <section class="blog-section">
            <h1 class="blog-section-header">
                <?php
                echo '<span>' .
                    $blog['heading'];
                '</span>'
                    ?>
            </h1>
            <div class="blog-section-info-div">
                <?php
                echo '<p class="blog-section-by">By: ' . $blog['by'] . '</p>';
                echo '<p class="blog-section-date">' . $blog['date'] . '</p>';
                ?>
            </div>

            <div class="tag-div">
                <?php
                foreach ($blog['tags'] as $tag) {
                    echo '<div class="tag">' . $tag . '</div>';
                }
                ?>
            </div>
            <p class="blog-section-intro">
                <?php
                echo $blog['intro'];
                ?>
            </p>

            <?php
            foreach ($blog['body'] as $para) {
                echo '<p class="blog-section-body" >' . $para . '</p>';
            }
            ?>


        </section>


        <section class="call-to-action-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="000ms" data-wow-duration="1500ms">
                        <div class="call-to-action-two__image">
                            <img loading="lazy" src="assets/images/backgrounds/cta-2-1-bg.webp" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-to-action-two__content">
                            <ul class="list-unstyled call-to-action-two__list">
                                <li>Simple</li>
                                <li>Transparent</li>
                                <li>Secure</li>
                            </ul>
                            <h3 class="call-to-action-two__title">Get quick business loans</h3>
                            <a href="apply.php" class="thm-btn">Apply For Loan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- city section -->



        <?php include "includes/footer.php" ?>
        </div>

        <?php include "includes/mobilenav.php" ?>

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


        <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendors/jarallax/jarallax.min.js"></script>
        <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
        <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
        <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
        <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
        <script src="assets/vendors/nouislider/nouislider.min.js"></script>
        <script src="assets/vendors/odometer/odometer.min.js"></script>
        <script src="assets/vendors/swiper/swiper.min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/vendors/wnumb/wNumb.min.js"></script>
        <script src="assets/vendors/wow/wow.js"></script>
        <script src="assets/vendors/isotope/isotope.js"></script>
        <script src="assets/vendors/countdown/countdown.min.js"></script>
        <script src="assets/js/finlon.js"></script>
</body>

</html>