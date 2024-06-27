<body class="{{ theme() == 'dark' ? 'dark-only' : '' }} {{ lang() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="{{ aurl('search') }}" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="{{ trans('admin.Search hear') }} .." name="search" title=""
                                    autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"></div><i
                                    class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="{{ aurl('/') }}"><img class="img-fluid"
                                src="{{ asset('dashboard') }}/assets/images/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        <li>
                            <a href="{{ url()->previous() }}" style="padding: 5px 15px;font-size: 15px;;"
                                class="btn btn-pill btn-outline-dark btn-air-dark btn-sm">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang"><i
                                            class="flag-icon flag-icon-{{ lang() == 'ar' ? 'kw' : 'us' }}"></i><span
                                            class="lang-txt">{{ lang() }} </span></div>
                                </div>
                                <div class="more_lang">
                                    <a href="{{ aurl('settings/language/en') }}">
                                        <div class="lang">
                                            <i class="flag-icon flag-icon-us"></i><span class="lang-txt">English</span>
                                        </div>
                                    </a>
                                    <a href="{{ aurl('settings/language/ar') }}">
                                        <div class="lang">
                                            <i class="flag-icon flag-icon-kw"></i><span class="lang-txt">لعربية</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li>
                            <div class="mode">
                                @if (theme() == 'dark')
                                    <i class="fa fa-moon-o" onclick="changeTheme('light');"></i>
                                @else
                                    <i class="fa fa-lightbulb-o" onclick="changeTheme('dark');"></i>
                                @endif
                            </div>
                        </li>

                        <li class="maximize"><a class="text-dark" href="#!"
                                onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="{{ asset('dashboard') }}/assets/images/avatar.png" style="height: 35px"
                                    alt="">
                                <div class="media-body"><span>{{ adminLogin()->name }}</span>
                                    <p class="mb-0 font-roboto">
                                        <i class="middle fa fa-angle-down"></i>
                                    </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>{{ trans('admin.Account') }}
                                        </span></a></li>
                                <li><a href="#"><i
                                            data-feather="settings"></i><span>{{ trans('admin.Settings') }}</span></a>
                                </li>
                                <li><a href="{{ aurl('logout') }}"><i data-feather="log-in">
                                        </i><span>{{ trans('admin.Log Out') }}</a></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
