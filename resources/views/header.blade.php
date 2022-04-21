<header class="header">
    <div class="header-top">
        <div style="display: none" class="container">
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
                @include('search')
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt=""></a>
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
                @include('top-navbar')
            </div>
        </div><!-- container -->
    </div><!-- main menu -->
</header>
