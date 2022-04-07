<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<!-- Preloder
<div id="preloder">
    <div id="preloder-center">
        <div id="preloder-center-absolute">
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
            <div class="object"></div>
        </div>
    </div>
</div>
-->
<!-- Header -->
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-left">
                    <ul>
                        <li><i class="fa fa-home"></i>Suite 02, Sahera Tropical</li>
                        <li><i class="fa fa-phone"></i>+8801 118 171 511</li>
                        <li><i class="fa fa-calendar"></i>Mon - Fri 9.00 am - 7.00 pm </li>
                    </ul>
                </div><!-- Header top left -->
                <div class="header-top-right">
                    <div class="social-profiles">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div><!-- Social profiles -->
                    <div class="book-table">
                        <a href="#">Book a table</a>
                    </div> <!-- Book a table -->
                </div><!-- Header top Right -->
            </div>
        </div><!-- Container -->
    </div><!-- Header top -->
    <div class="logo-search-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="search-box">
                        <form class="search-form">
                            <input type="search" placeholder="Search Your Queries">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form><!-- Search form -->
                    </div><!-- Search area -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="index.html"><img src="/images/logo.png" alt=""></a>
                    </div><!-- logo -->
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- cart -->
                </div>
            </div>
        </div><!-- container -->
    </div><!-- Logo and search area -->
    <!-- main menu -->
    <div class="main-menu main-nav style-1">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="#">
                        <img src="/images/logo2.png" alt="">
                    </a>
                    <div class="search-area">
                        <i class="fa fa-search icon-1"></i>
                        <i class="fa fa-times icon-2"></i>
                        <form class="search-form">
                            <input type="search" placeholder="Search Your Queries">
                        </form><!-- Search form -->
                    </div>
                </div><!-- navbar header -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                            <ul class="dropdown-menu sub-menu">
                                <li class="active-child-menu"><a href="index.html"><i class="fa fa-angle-double-right"></i>Homepage one</a></li>
                                <li><a href="index-2.html"><i class="fa fa-angle-double-right"></i>Homepage two</a></li>
                                <li><a href="index-3.html"><i class="fa fa-angle-double-right"></i>Homepage three</a>
                                </li>
                            </ul><!-- sub menu -->
                        </li><!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu sub-menu">
                                <li><a href="menu-page-1.html"><i class="fa fa-angle-double-right"></i>Menu page one</a></li>
                                <li><a href="menu-page-2.html"><i class="fa fa-angle-double-right"></i>Menu page two</a></li>
                                <li><a href="menu-page-3.html"><i class="fa fa-angle-double-right"></i>Menu page three</a></li>
                            </ul><!-- sub menu -->
                        </li><!-- dropdown -->
                        <li><a href="contact.html">Contacts</a></li>
                    </ul><!-- navbar-nav -->
                </div>
            </div>
        </div><!-- container -->
    </div><!-- main menu -->
</header><!-- Header End -->
<section class="food-menu section-padding">
    <div class="container">
        <div class="row">
            <div class="section-head">
                <i class="flaticon-cutlery"></i>
                <h2>Our Drink Menu</h2>
                <p>List of Drink recipes with Ingridients to make</p>
            </div><!-- section-head -->
            <div class="food-menu-item-wrapper">
                <div class="grid">
                    @foreach($drinks as $drink)
                        <div class="element-item transition breakfast lunch drinks col-md-4 col-sm-6">
                            <div class="food-item">
                                <div class="food-item-img">
                                </div>
                                <div class="food-item-details">
                                    <div class="dotted-title">
                                        <div class="dotted-name">
                                            <a href="#">{{ $drink->name}}</a>
                                        </div>

                                    </div><!-- dotted title -->
                                    <p><strong>Description: </strong>{{$drink->description}}</p>
                                    <p><strong>Making: </strong>{{$drink->making}}</p>
                                    <p><strong>Ingridients: </strong>
                                        @foreach($drink->ingridients as $ingridient)
                                            <p> {{$ingridient->name}} </p>
                                        @endforeach
                                    </p>

                                        <!-- <div class="rating-star">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </span>
                                            </div> rating star -->
                                </div><!-- food item details -->
                            </div><!-- food item -->
                        </div> <!-- element-item -->
                    @endforeach
                </div>
            </div><!-- food-menu-item-wrapper -->
            <!-- <div class="food-menu-btn">
                <a href="#" class="button">View Full menu</a>
            </div> -->
        </div>
        <div id="filters" class="button-group">
            <button class="button is-checked" data-filter=".drinks">Drinks</button>
        </div><!--button group-->
    </div><!-- container -->
</section><!-- food menu section end-->
<!-- Footer -->
<footer>
    <div class="footer-top">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="footer-widget-wrapper">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">About tomato</h2>
                                <div class="excerpt">
                                    Efficiently atrix unique ecommerce ently enhance pallel results serdom anerment
                                    Proactvey incubate Authatively leverage existing effetive methodologies through client awesome theme.
                                </div>
                                <h2 class="footer-btn">
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </h2>
                                <div class="payment-method">
                                    <h2>Payment Method</h2>
                                    <ul>
                                        <li><a href="#"><img src="/images/payment-img1.png" alt=""></a></li>
                                        <li><a href="#"><img src="/images/payment-img2.png" alt=""></a></li>
                                        <li><a href="#"><img src="/images/payment-img3.png" alt=""></a></li>
                                        <li><a href="#"><img src="/images/payment-img4.png" alt=""></a></li>
                                        <li><a href="#"><img src="/images/payment-img5.png" alt=""></a></li>
                                    </ul>
                                </div><!-- payment-method -->
                            </div><!-- footer-widget -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">Latest News</h2>
                                <div class="footer-post-item-wrapper">
                                    <ul>
                                        <li class="post-item style-2">
                                            <div class="post-thumb">
                                                <a href="#"><img src="/images/footer-images/p-item1.jpg" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
                                                <div class="meta-post">
                                                    <ul>
                                                        <li class="post-author">
                                                            <a href="#">
                                                                <i class="fa fa-user"></i>Somrat Islam
                                                            </a>
                                                        </li>
                                                        <li class="post-comments">
                                                            <a href="#"><i class="fa fa-comments-o"></i>32</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li><!-- post-item -->
                                        <li class="post-item style-2">
                                            <div class="post-thumb">
                                                <a href="#"><img src="/images/footer-images/p-item2.jpg" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
                                                <div class="meta-post">
                                                    <ul>
                                                        <li class="post-author">
                                                            <a href="#">
                                                                <i class="fa fa-user"></i>Somrat Islam
                                                            </a>
                                                        </li>
                                                        <li class="post-comments">
                                                            <a href="#"><i class="fa fa-comments-o"></i>32</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li><!-- post-item -->
                                        <li class="post-item style-2">
                                            <div class="post-thumb">
                                                <a href="#"><img src="/images/footer-images/p-item3.jpg" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
                                                <div class="meta-post">
                                                    <ul>
                                                        <li class="post-author">
                                                            <a href="#">
                                                                <i class="fa fa-user"></i>Somrat Islam
                                                            </a>
                                                        </li>
                                                        <li class="post-comments">
                                                            <a href="#"><i class="fa fa-comments-o"></i>32</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li><!-- post-item -->
                                    </ul>
                                </div>
                            </div><!-- footer-widget -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">Twitter Widget</h2>
                                <ul class="twitter-widget">
                                    <li class="twitter-widget-item">
                                        <div class="twitter-icon">
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </div>
                                        <div class="twitter-widget-content">
                                            <a href="#">
                                                Raritas etiam procssus dysequitur mutaonem http://codexcoder.com
                                                awesome theme market.
                                            </a>
                                            <span>23 Seconds ago</span>
                                        </div>
                                    </li><!-- twitter-widget-item -->
                                    <li class="twitter-widget-item">
                                        <div class="twitter-icon">
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </div>
                                        <div class="twitter-widget-content">
                                            <a href="#">
                                                Duis autem eum #webcode.com dolor hendrerit in vulputate velit
                                            </a>
                                            <span>3 Months ago</span>
                                        </div>
                                    </li><!-- twitter-widget-item -->
                                    <li class="twitter-widget-item">
                                        <div class="twitter-icon">
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                        </div>
                                        <div class="twitter-widget-content">
                                            <a href="#">
                                                @bonndu007 am liber tempor cum soluta nobis eleifend
                                            </a>
                                            <span>2 Years ago</span>
                                        </div>
                                    </li><!-- twitter-widget-item -->
                                </ul>
                            </div><!-- footer-widget -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">Get in Touch</h2>
                                <ul>
                                    <li class="contact-item">
                                        <div class="contact-item-left">
                                            <span>Office Address</span>
                                        </div>
                                        <div class="contact-item-right">
                                            <span>Suite 02, Level 12, Sahera Tropical Center 218 New Elephant Road, Dhaka -</span>
                                        </div>
                                    </li><!-- contact-item -->
                                    <li class="contact-item">
                                        <div class="contact-item-left">
                                            <span>Phone Number</span>
                                        </div>
                                        <div class="contact-item-right">
                                            <span>+8801111111111 - Mobile 02-1234567- Calephone</span>
                                        </div>
                                    </li><!-- contact-item -->
                                    <li class="contact-item">
                                        <div class="contact-item-left">
                                            <span>Email Address</span>
                                        </div>
                                        <div class="contact-item-right">
                                            <span>http://example.com support@example.com</span>
                                        </div>
                                    </li><!-- contact-item -->
                                    <li class="contact-item">
                                        <div class="contact-item-left">
                                            <span>Follow Us</span>
                                        </div>
                                        <div class="social-profiles">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                            </ul>
                                        </div><!-- Social profiles -->
                                    </li><!-- contact-item -->
                                </ul>
                            </div><!-- footer-widget -->
                        </div>
                    </div><!-- footer-widget-wrapper -->
                </div>
            </div><!-- container -->
        </div><!-- section-overlay -->
    </div><!-- footer-top -->
    <!--Scroll top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <div class="footer-bottom">
        <p>&copy; <span>Tomato</span> 2022, All Right Reserves  |  Design by <a href="#">LabArtisan</a></p>
    </div><!-- footer-bottom -->
</footer><!-- Footer End-->

<script src="/js/scripts.js"></script>
</body>
</html>
