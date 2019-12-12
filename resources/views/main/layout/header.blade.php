
    <nav class="navbar navbar-expand-lg navbar-light bg-light header">
        <div class="container">
            <div class="logo-column">
                <a href="{{route('home')}}" class="navbar-brand">
                    <span class="logo-entry logo-main current-logo loaded" style="width:200px; height: 47px;">
                        <img src="{{asset('img/logo-2.png')}}" alt="Bookstore" width="200" height="47" itemprop="logo">
                    </span>
                </a>
            </div>
            <div class="menu-column">
                        <div class="menu-items-blocks standard-menu-container menu-skin-dark reveal-from-top dropdown-caret">
                            <nav>
                                <ul id="menu-main-menu-1" class="menu">
                                    <li class="menu-item text-menu">
                                        <a href="{{route('home')}}" ><span>Home</span></a>
                                    </li>
                                    <li class="menu-item text-menu">
                                        <a href="{{route('book')}}" ><span>Books</span></a>
                                    </li>
                                    <li class="menu-item text-menu">
                                        <a href="{{route('contact')}}" ><span>Contact</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('cart')}}" >
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                        <span class="number-shopping">3</span>
                                    </li>
                                    <li class="menu-item">
                                        <a href="">
                                            <i class="fa fa-user"></i>
                                            <span class="username">doanmai</span>
                                        </a>
                                    </li>
                                    <!-- <li class="menu-item">
                                        <a class="btn btn-outline-primary" href="{{route('login')}}">Login</a>
                                    </li> -->
                                </ul>
                            </nav>
                            <div class="header-search-input menu-skin-dark">
                                <form method="GET" action="">
                                    <div class="search-field" style="visibility: hidden; opacity: 0;;">
                                        
                                    </div>
                                    <div class="search-icon">
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart-icon-container menu-skin-dark"></div>
                        </div>
                    </div>
        </div>

    </nav>

