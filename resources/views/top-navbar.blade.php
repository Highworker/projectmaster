<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="true" style="">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <ul class="dropdown-menu sub-menu">
                <li class="@if($requestPath == '/') {{'active-child-menu'}} @endif">
                    <a href="/">
                        <i class="fa fa-angle-double-right"></i>Drinks recipes List
                    </a>
                </li>
                <li class="@if($requestPath == 'ingridients') {{'active-child-menu'}} @endif">
                    <a href="/ingridients">
                        <i class="fa fa-angle-double-right"></i>Ingridients List
                    </a>
                </li>
            </ul><!-- sub menu -->
        </li><!-- dropdown -->
    </ul><!-- navbar-nav -->
</div>
