<header class="header_01" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <a href="/home"><img src="{{asset('imagens_paginas/'.$logo->imagem)}}" alt="{{$logo->descricao}}" title="{{$logo->descricao}}"/></a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-7 col-md-7">
                <nav class="mainmenu text-center">
                    <ul>
                        <li><a href="/home">home</a></li>
                        <li><a href="/sobre">sobre</a></li>
                    
 
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="services.html">Service</a></li>
                                <li><a href="service_detail.html">Service Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio.html">Portfolio v1</a></li>
                                <li><a href="portfolio2.html">Portfolio v2</a></li>
                                <li><a href="portfolio_detail.html">Portfolio Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog v1</a></li>
                                <li><a href="blog2.html">Blog v2</a></li>
                                <li><a href="blog3.html">Blog v3</a></li>
                                <li><a href="blog_single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <div class="navigator text-right">
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a>
                    <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- PopUP Menu -->
        <div class="popup popup__menu">
            <a href="" id="close-popup" class="close-popup"></a>
            <div class="container mobileContainer">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="logo2">
                            <a href="/home"><img src="{{asset('imagens_paginas/'.$logo->imagem)}}" alt="{{$logo->descricao}}" title="{{$logo->descricao}}"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                    <li><a href="/home">home</a></li>
                                    <li><a href="/sobre">sobre</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);">services</a>
                                        <ul class="dl-submenu">
                                            <li><a href="services.html">Service</a></li>
                                            <li><a href="service_detail.html">Service Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="dl-submenu">
                                            <li><a href="portfolio.html">Portfolio v1</a></li>
                                            <li><a href="portfolio2.html">Portfolio v2</a></li>
                                            <li><a href="portfolio_detail.html">Portfolio Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog.html">Blog v1</a></li>
                                            <li><a href="blog2.html">Blog v2</a></li>
                                            <li><a href="blog3.html">Blog v3</a></li>
                                            <li><a href="blog_single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts text-left">
                            <li>Phone: 666 888 000</li>
                            <li>Email: needhelp@meipaly.com</li>
                            <li>Address: 66 Broklyn Street, New York United States of America</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="popUp_social text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PopUP Menu -->