<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <link rel="stylesheet" href="assets/css/iconplugins.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">

    <title>Faculty API</title>

    <link rel="icon" type="image/png" href="images/panimalarlogo.png" />
</head>

<body>

<style>
.text-bold{
    font-weight: bold; 
}
.text-white{
    font-weight: bold; 
}

.slider-hero .content-block .read-story {
  font-family: "Montserrat-Bold";
  padding: 16px 40px;
  font-size: 17px;
  text-transform: uppercase;
  display: inline-block;
  border-width: 1px;
  color: #fff;
  border-radius: 20px;
  background-color: #000099;
  margin-top: 20px;
  -moz-transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
.slider-hero .content-block .read-story:hover, .slider-hero .content-block .read-story:focus, .slider-hero .content-block .read-story:active {
  -moz-transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
  opacity: 0.9;
  background-color: #0E49B5;

}

        .slider-hero .owl-caption {
  bottom: 0;
  display: block;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.slider-hero .content-block {
  position: absolute;
  margin: auto;
  top: 100px;
  bottom: 0;
  display: inline-block;
  width: 100%;
  text-align: center;
  opacity: 1;
  left: 0;
  right: 0;
}
.slider-hero .content-block h2 {
  font-weight: 400;
  position: relative;
  margin: 0;
  letter-spacing: 5px;
  color: #fff;
  text-transform: uppercase;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .slider-hero .content-block h2 {
    padding-bottom: 30px;
    padding-top: 20px;
    font-size: 53px;
  }
  .slider-hero .content-block {
    max-height: 280px;
  }
  .slider-hero .shop-now-link {
    margin-top: 50px !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .slider-hero .content-block h2 {
    font-size: 40px;
    padding-bottom: 20px;
    padding-top: 20px;
  }
  .slider-hero .content-block p {
    padding-top: 20px;
  }
  .slider-hero .content-block {
    top: 0 !important;
    max-height: 210px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .slider-hero .content-block h2 {
    font-size: 36px;
    padding-bottom: 15px;
    padding-top: 15px;
  }
  .slider-hero .content-block h5 {
    font-size: 18px;
  }
  .slider-hero .content-block {
    max-height: 190px;
    top: 0 !important;
  }
}
@media (max-width: 767px) {

    .slider-hero .item img {
        height: 300px; /* Adjust the height as per your requirement */
        width: auto; /* Maintain aspect ratio */
    }

  .slider-hero .content-block h2 {
    padding-bottom: 0;
    padding-top: 15px;
    font-size: 20px;
    margin-bottom: 0;
  }
  .slider-hero .content-block h2::before {
    display: none;
  }
  .slider-hero .content-block h5 {
    font-size: 16px;
  }
  .slider-hero .read-story {
    display: none !important;
  }
  .slider-hero .content-block {
    max-height: 95px;
    top: 0 !important;
  }

  .slider-hero .owl-dots {
    bottom: 10px !important;
  }
}
    </style>

    <div id="preloader">
        <div id="preloader-area">
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
            <div class="spinner"></div>
        </div>
        <div class="preloader-section preloader-left"></div>
        <div class="preloader-section preloader-right"></div>
    </div>


    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            
<!-- Mobile view -->
<img src="images/panimalarlogo.png" class="logo-one" alt="logo" style="width: 80px; height: 80px;">
<img src="images/panimalarlogo.png" class="logo-two" alt="logo" style="width: 80px; height: 80px;">
</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav nav-area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="index.php">
<img src="images/panimalarlogo.png" class="logo-one" alt="logo" style="width: 80px; height: 80px;">
<img src="images/panimalarlogo.png" class="logo-two" alt="logo" style="width: 80px; height: 80px;">
</a>
                    <div class="nav-widget-form">               
                    </div>
                    <div class="navbar-category">
                        <div class="dropdown category-list-dropdown">

PANIMALAR ENGINEERING COLLEGE
</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
                                <a href="courses-details.html" class="nav-link-item">

                                <a href="courses-details.html">

</a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link  ">
Home
</a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="ERP/index.php" class="nav-link  ">
ERP
</a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="./admin/index.php" class="nav-link ">
Admin
</a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="./dean/index.php" class="nav-link ">
Dean
</a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="./hod/index.php" class="nav-link ">
Hod </a>
                                         </li>
                            <li class="nav-item">
                                <a href="./faculty/index.php" class="nav-link">
Faculty login
</a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="optional-item">
                                <a href="signup.php" class="default-btn two border-radius-5">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="side-nav-responsive">
            <div class="container">
              
                <div class="container">
                    <div class="side-nav-inner">
                        <div class="side-nav justify-content-center align-items-center">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="banner-area banner-area-ptb">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                        <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Faculty Appraisal Performance Index</h1>
                        <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">In the world of compliments and recognition, take a step by signing up. Join us where appreciation speaks and stories unfold!</p>
                        <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                       
                        <button class="default-btn two border-radius-5" type="button" onclick="redirectToSignup()">
    Signup now
</button>

<script>
    function redirectToSignup() {
        window.location.href = 'signup.php';
    }
</script>

                         
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-4 col-sm-3">
                                <div class="banner-counter" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <h3>3,500+</h3>
                                    <p>Faculty</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4 col-sm-3">
                                <div class="banner-counter" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <h3>3.5L</h3>
                                    <p>Contributions</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4 col-sm-3">
                                <div class="banner-counter" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                    <h3>7,000+</h3>
                                    <p>Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img-two" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <img src="assets/images/home-two/pec1.png" alt="Man" />
                        <div class="bg-shape">
                            <img src="assets/images/home-two/home-shape.png" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="featured-area featured-area-mt pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-6">
                    <div class="featured-item">
                        <i class="flaticon-studying"></i>
                        <h3>Teaching Effectiveness</h3>
                        <p>Inspiring minds, fostering understanding, and nurturing lifelong learners with passion and care .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="featured-item">
                        <i class="flaticon-platform"></i>
                        <h3>Research and Innovation</h3>
                        <p>Pioneering discoveries, pushing boundaries, and shaping the future of academia and beyond .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="featured-item">
                        <i class="flaticon-effective"></i>
                        <h3>Student Interaction </h3>
                        <p> Guiding, inspiring, fostering growth through mentorship, shaping confident, successful individuals for tomorrow .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="categories-area pb-70">
        <div class="container">
            <div class="section-title mb-45">
                <h2>Explore the faculty contribution</h2>
            </div>
            <div class="categories-slider owl-carousel owl-theme">
                <div class="categories-item">
                    <a href="#">
<img src="assets/images/categories/academic.png" alt="Categories">
</a>
                    <div class="content">
                        <a href="#">
                        <i class="ri-git-repository-line"></i>
<h3>Academic Contribution</h3>
</a>
                    </div>
                </div>
                
                <div class="categories-item">
                    <a href="#">
<img src="assets/images/categories/conference.png" alt="Categories">
</a>
                    <div class="content">
                        <a href="#">
                        <i class="ri-building-4-fill"></i>
<h3>Conference Publication</h3>
</a>
                    </div>
                </div>
                <div class="categories-item">
                    <a href="#">
<img src="assets/images/categories/journal.png" alt="Categories">
</a>
                    <div class="content">
                        <a href="#">
                        <i class="ri-bar-chart-2-line"></i>
<h3>Journal</h3>
</a>
                    </div>
                </div>
                <div class="categories-item">
                    <a href="#">
<img src="assets/images/categories/awards.png" alt="Categories">
</a>
                    <div class="content">
                        <a href="#">
                        <i class="ri-award-fill"></i>
<h3>Awards</h3>
</a>
                    </div>
                </div>
                <div class="categories-item">
                    <a href="#">
<img src="assets/images/categories/activity.png" alt="Categories">
</a>
                    <div class="content">
                        <a href="#">
                        <i class="ri-camera-line"></i>
<h3>Activity</h3>
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="enrolled-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="enrolled-img-two mb-30" data-speed="0.05" data-revert="true">
                        <img src="assets/images/home-two/enrolled-img.png" alt="Enrolled">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="enrolled-content mb-30">
                        <div class="section-title">
                            <h2>
                        Our institution boasts the most qualified and exceptional faculty .</h2>
                            <p>
                            Appraisal acknowledges scholarly endeavors, fueling a culture of impactful research and academic contributions. It inspires excellence, motivates faculty, and ensures continual advancement in educational quality and innovation.                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Teaching Effectiveness</li>
                                    <li><i class="flaticon-check"></i> Research and Publications</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Service to the Institution</li>
                                    <li><i class="flaticon-check"></i> Professional Development</li>
                                </ul>
                            </div>
                        </div>
                        <a href="signup.php" class="default-btn">Signup today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




   
    <div class="categories-area" style="padding-bottom: 30px;">


    <!--begin slider-->
            <div class="slider-hero">
            <div class="sliders-wrap columns1 owl-carousel" >
                <div class="item">
                    <img src="images/homepage/Slide 0.png" alt="123"> <!--SLIDE 0-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2 class="text-center">
                                    <span class="text-bold">Panimalar Staffs Appraisal..!</span> <br />
                                    <span class="text-white">Heartily Welcomes you </span>
                                </h2>
                                <a href="https://panimalar.ac.in/" class="bnt bnt-theme read-story" target="_blank">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 3.png" alt=""><!--SLIDE 3-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">Excellence is not an act,</span> <br />
                                    <span class="text-white"> But a habit</span>
                                </h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 2.png" alt=""><!--SLIDE 2-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">The only way to do great work is,</span> <br />
                                    <span class="text-white">To love what you do</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/silde 1.png" alt=""><!--SLIDE 1-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">Success is not the key to happiness. </span> <br />
                                    <span class="text-white">Happiness is the key to success.</span>

                                    
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 4.png" alt=""><!--SLIDE 4-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold"> Quality is not an act, it is a habit</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 6.png" alt=""><!--SLIDE 6-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold">The only limit to our realization of tomorrow </span>
                                    <span class="text-white">will be our doubts of today.</span>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide5.png" alt=""><!--SLIDE 5-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2>
                                    <span class="text-bold"> “Nostalgia & Forever bonds renewed” </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 8.png" alt=""><!--SLIDE 8-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <H2>
                                    <span class="text-bold">The difference between ordinary and </span>
                                    <span class="text-white">extraordinary is that little extra.</span>

                                </H2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/slide 13.png" alt=""><!--SLIDE 13-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <H2>
                                    <span class="text-bold">"Biriyani is an emotion"</span>
                                </H2>   
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/homepage/slide 15.png" alt=""><!--SLIDE 15-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <H2>
                                        <span class="text-bold">"When I think of happiness I think of college"</span>
                                    </H2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/homepage/Slide 11.png" alt=""><!--SLIDE 11-->
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2><span class="text-bold">"Things end, but memories last forever"</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</div>
        <!--end slider-->




    <footer class="footer-area">
        <div class="container pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <d class="footer-logo">
                            <a href="index.php">
                            <img src="images/panimalarlogo.png" alt="Images" style="width: 80px; height: 80px;">
</a>
                        </d iv>
                        <p>
                        In the quiet cadence of daily tasks, staff members compose a symphony of dedication. Each effort, a stanza in the poetry of collective achievement. Appraisal, a spotlight on their verses, revealing stars in the academic sky. Gratitude blooms, acknowledging the profound impact of their roles in shaping the institution's narrative.                        </p>
                        <ul class="social-link">
                            <li class="social-title">Follow Us:</li>
                            <li>
                                <a href="https://www.facebook.com/panimalarengineeringcollegeofficial" target="_blank">
<i class="ri-facebook-fill"></i>
</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/school/panimalar-engineering-college/" target="_blank">
<i class="ri-linkedin-fill"></i>
</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/panimalarengineeringcollege/" target="_blank">
<i class="ri-instagram-line"></i>
</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>About us</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="https://panimalar.ac.in/about-us.php">
About Us
</a>
                            </li>
      
                            <li>
                                <a href="https://panimalar.ac.in/rules-regulations.php">
Instructions
</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>Resources</h3>
                        <ul class="footer-list">
                           
                        
               
                            <li>
                                <a href="faculty/index.php">
Facutly Login
</a>
                            </li>
                            <li>
                                <a href="hod/index.php">
HOD Login
</a>
                            </li>
                            <li>
                                <a href="dean/index.php">
Dean Login
</a>
                            </li>
                            <li>
                                <a href="admin/index.php">
Admin Login
</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>Official Info</h3>
                        <ul class="footer-contact">
                            <li>
                                <i class="ri-map-pin-2-fill" style="color:white;"></i>
                                <div class="content">
                                    <h4>Location:</h4>
                                    <span>Bangalore Trunk Road, Varadharajapuram, Poonamallee, Chennai – 600 123.</span>
                                </div>
                            </li>
                            <li>
                                <i class="ri-mail-fill" style="color:white;"></i>
                                <div class="content">
                                    <h4>Email:</h4>
                                    <span><a >info@panimalar.ac.in</></a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <i class="ri-phone-fill" style="color:white;"></i>
                                <div class="content">
                                    <h4>Phone:</h4>
                                    <span><a href="#">+044 -26490404 / 0505 / 0717</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copy-right-text text-center">
                    <p>
                        Copyright @
                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <b style="color:white;text-decoration: underline;">FACULTY API</b> All Rights Reserved
                        <a href="https://panimalar.ac.in/btech-artificial-intelligence-data-science.php" target="_blank" style="color:white;">ARTIFICIAL INTELLIGENCE AND DATA SCIENCE</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- slider script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
    // Initialize Owl Carousel for the first carousel
    $('.sliders-wrap.owl-carousel').owlCarousel({
        items: 1, // Number of items to show at once
        loop: true, // Infinite loop
        autoplay: true, // Auto-play the slider
        autoplayTimeout: 3000, // Auto-play interval in milliseconds (3 seconds in this case)
        dots: false,
    });
</script>

<!-- slider script -->


<script src="js/libs/owl.carousel.min.js"></script>


    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>