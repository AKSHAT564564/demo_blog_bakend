<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="bBJjI7GpSqIkq7fyC99SnpukB8KCowjr6BOeYYG3" />
    <meta name="google-site-verification" content="" />
    <meta property="fb:pages" content="" />
    <title> CorporateMarriageBureau.com
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CorporateMarriageBureau.com">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CorporateMarriageBureau.com" />
    <meta property="og:url" content="http://cmb.goldcoastweb.in" />
    <meta property="og:image" content="public/filemanager/logo.png" />
    <meta name="twitter:image" content="public/filemanager/logo.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="CorporateMarriageBureau.com" />
    <meta name="twitter:site" content="@CorporateMarriageBureau" />
    <link rel="canonical" href="http://cmb.goldcoastweb.in" />
    <!-- Favicons -->
    <link href="public/cssimg/fav.png" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500&display=swap" rel="stylesheet">
    <!-- font-family: 'Spartan', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">
    <!-- font-family: 'Antic Didone', serif; -->
    <!-- CSS Files -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/lib/icofont/icofont.min.css" rel="stylesheet">
    <link href="public/lib/slick/slick.css" rel="stylesheet">
    <link href="public/lib/slick/slick-theme.css" rel="stylesheet">
    <link href="public/lib/aos/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="public/css/style.css" rel="stylesheet">
    <script>
        var SITE_URL = 'http://cmb.goldcoastweb.in';
    </script>
</head>

<body>
   
    <section class="founder-team" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 founder-block" data-aos="zoom-in-right">
                    <div class="d-flex justify-content-between ">
                        <div class="founder-detail">
                            <h2 class="mb-2 pb-2 border-bottom">John Duo <span>CEO</span></h2>
                        </div>
                        <img width="150" class="founder-img img-thumbnail" src="public/img/team/team-1.jpg" />
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                </div>
                <div class="col-xl-8">
                    <div class="our-team" data-aos="zoom-in-right">
                        <h2 class="section-title">Our Team</h2>

                        <div class="slider our-team-slider">
                            
                                <div class="card col-sm-12">
                                    <div class="card-body p-0">
                                        <img class="img-thumbnail img-fluid" src="public/img/team/team-2.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h3 class="mb-0">John Duo <span>Resignation</span></h3>
                                    </div>
                                </div>
                           
                            
                                <div class="card col-sm-12">
                                    <div class="card-body p-0">
                                        <img class="img-thumbnail img-fluid" src="public/img/team/team-3.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h3 class="mb-0">John Duo <span>Resignation</span></h3>
                                    </div>
                                </div>
                            
                          
                                <div class="card col-sm-12">
                                    <div class="card-body p-0">
                                        <img class="img-thumbnail img-fluid" src="public/img/team/team-1.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h3 class="mb-0">John Duo <span>Resignation</span></h3>
                                    </div>
                                </div>
                            
                            
                           
                           
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= footer ======= -->
    
       <script type="text/javascript" src="public/lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="public/lib/aos/aos.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" src="public/js/vendor.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
    <script type="text/javascript">
        // Testimonial
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: false,
            nextArrow: false,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        // Client
        $('.our-clients-slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 300,
            slidesToShow: 5,
            prevArrow: false,
            nextArrow: false,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        // Client
        $('.our-team-slider').slick({
            dots: false,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 300,
            slidesToShow: 3,
            prevArrow: false,
            nextArrow: false,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        // Init AOS
        function aos_init() {
            AOS.init({
                duration: 1000,
                once: true,
                disable: 'mobile'
            });
        }
        $(window).on('load', function() {
            aos_init();
        });
    </script>

</body>

</html>