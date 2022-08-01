<footer>
    <div class="footer-top">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="footer-widget-wrapper">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">About Drinkbook</h2>
                                <div class="excerpt">
                                    Represent a Drink recipes, and Ingridients for these recipes
                                </div>
                                <h2 class="footer-btn">
                                    <a href="https://github.com/Highworker/drinkbook" target="_blank">GitHub.com / Highworker / drinkbook <i class="fa fa-angle-double-right"></i></a>
                                </h2>
                            </div><!-- footer-widget -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="footer-widget-title">Drinkbook News</h2>
                                <div class="footer-post-item-wrapper">
                                    <ul>
                                        @isset($variable)
                                            @foreach($lastComments as $comment)
                                            <li class="post-item style-2">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="/images/footer-images/p-item1.jpg" alt=""></a>
                                                </div>
                                                <div class="post-content">
                                                    <a class="title" href="#">{{$comment['text']}}</a>
                                                    <div class="meta-post">
                                                        <ul>
                                                            <li class="post-author">
                                                                <a href="#">
                                                                    <i class="fa fa-user"></i>{{$comment['username']}}
                                                                </a>
                                                            </li>
                                                            <!-- <li class="post-comments">
                                                                <a href="#"><i class="fa fa-comments-o"></i>32</a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        @endisset
                                    </ul>
                                </div>
                            </div><!-- footer-widget -->
                        </div>
                        <div class="col-md-4 col-sm-6"  style="display: none">
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
                    </div><!-- footer-widget-wrapper -->
                </div>
            </div><!-- container -->
        </div><!-- section-overlay -->
    </div><!-- footer-top -->
    <!--Scroll top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <div class="footer-bottom" style="display: none">
        <p>&copy; <span>Tomato</span> 2022, All Right Reserves  |  Design by <a href="#">LabArtisan</a></p>
    </div><!-- footer-bottom -->
</footer><!-- Footer End-->
