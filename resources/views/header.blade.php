<header class="header">
    <div class="header-top">
    </div><!-- Header top -->
    <div class="logo-search-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="logo">
                        <a href="/"><img src="" alt=""></a>
                    </div><!-- logo -->
                </div>
                @guest
                    <div class="col-md-4 col-sm-4">
                        <p> need to fix login component</a></p>
                    </div>
                @endguest
                @auth
                    <div class="col-md-4 col-sm-4">
                        <p> Login as <strong>{{ $authUser->name }}</strong><a href="/logout"> Logout</a></p>
                    </div>
                @endauth
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
                        <img src="" alt="">
                    </a>
                    <div class="search-area">
                        <i class="fa fa-search icon-1"></i>
                        <i class="fa fa-times icon-2"></i>
                        <form class="search-form" style="display: none">
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
