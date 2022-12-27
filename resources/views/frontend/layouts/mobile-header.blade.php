        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div id="hamnav" class="header-mobile-inner">
                        <a class="logo" href="{{url('/')}}">
                            <img src="https://cdn.mypanel.link/m8x6dz/ayprqo756mmg8dj2.png" alt="verified-campaign.net">
                        </a>
                        <button class="hamburger hamburger--slider" type="button" data-toggle="collapse" data-target=".navbar-mobile">
                            <span class="hamburger-box">
                                <span class="hamburger-inner" id="hambar" onclick="onHamClick()">
                                    <div id="bar1" class="bar"></div>
                                    <div id="bar2" class="bar"></div>
                                    <div id="bar3" class="bar"></div>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav id="mob_nav" class="navbar-mobile collapse">
                <div class="container-fluid">
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Trading Signal</a></li>
                        <li><a href="#">Campaigns</a></li>
                        <li><a href="#">Faqs</a></li>
                        <li><a href="{{url('/')}}/signup">Join us</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->