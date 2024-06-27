<!-- Page Body Start-->
<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
        <div>
            <div class="logo-wrapper">
                <a href="{{ aurl('/') }}">
                    @if (settings()->logo !== null)
                    <img class="img-fluid" style="max-width: 70% ; max-height: 50px" src="{{ settings()->logo }}"
                        alt="">
                    @else
                    <h3>{{ settings()->name }}</h3>
                    @endif
                </a>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                </div>
            </div>
            <div class="logo-icon-wrapper">
                <a href="{{ aurl('/') }}">
                    <h3>{{ settings()->name }}</h3>
                </a>
            </div>
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="{{ aurl('/') }}"><img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/favicon.png" alt=""></a>
                            <div class="mobile-back text-end"><span>{{ trans('admin.Back') }}</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        @if (is_permited('browse_dashboard') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ aurl('/') }}">
                                <i data-feather="home"> </i><span>{{ trans('admin.Dashboard') }}</span>
                            </a>
                        </li>
                        @endif

                        <li class="sidebar-main-title">
                            <div>
                                <p>{{ trans('admin.Reports') }}</p>
                            </div>
                        </li>
                        @if (is_permited('browse_orders') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="shopping-cart"></i><span>{{ trans('admin.Orders') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('orders/today') }}">{{ trans('admin.Orders Today') }}</a></li>
                                <li><a href="{{ aurl('orders') }}">{{ trans('admin.All Orders') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_sales') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="pie-chart"></i><span>{{ trans('admin.Sales') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('sales') }}">{{ trans('admin.All Sales') }}</a></li>
                                <li><a href="{{ aurl('sales/daily') }}">{{ trans('admin.Daily Sales') }}</a></li>
                                <li><a href="{{ aurl('sales/weekly') }}">{{ trans('admin.Weekly Sales') }}</a></li>
                                <li><a href="{{ aurl('sales/monthly') }}">{{ trans('admin.Monthly Sales') }}</a></li>
                                <li><a href="{{ aurl('sales/yearly') }}">{{ trans('admin.Yearly Sales') }}</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-main-title">
                            <div>
                                <p>{{ trans('admin.Navigation') }}</p>
                            </div>
                        </li>
                        @endif
                        @if (is_permited('browse_admins') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="user"></i><span>{{ trans('admin.Users') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('admins') }}">{{ trans('admin.All Users') }}</a></li>
                                <li><a href="{{ aurl('admins/create') }}">{{ trans('admin.Add New User') }}</a>
                                </li>
                                <li><a href="{{ aurl('admins/logs') }}">{{ trans('admin.User Log') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_roles') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="unlock"></i>
                                <span>{{ trans('admin.Roles') }} <i class="fa fa-angle-right pull-right"
                                        style="margin-top: 5px"></i></span>

                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('roles') }}">{{ trans('admin.All Roles') }}</a></li>
                                <li><a href="{{ aurl('roles/create') }}">{{ trans('admin.Add New Role') }}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_cities') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="map-pin"></i><span>{{ trans('admin.Cities') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('cities') }}">{{ trans('admin.All Cities') }}</a></li>
                                <li><a href="{{ aurl('cities/create') }}">{{ trans('admin.Add New City') }}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_coupons') == 1)
                        <li class="sidebar-list">
                            {{-- <span style="color: red">{{is_permited('browse_coupons')}}</span> --}}
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="tag"></i><span>{{ trans('admin.Coupons') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ url('admin/coupons') }}">{{ trans('admin.Coupons') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_payments') == 1)
                        <li class="sidebar-list">
                            {{-- <span style="color: red">{{is_permited('browse_coupons')}}</span> --}}
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="tag"></i><span>{{ trans('admin.Payments') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ url('admin/payments') }}">{{ trans('admin.Payment') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_branches') == 1)
                        <li class="sidebar-list">
                            {{-- <span style="color: red">{{is_permited('browse_coupons')}}</span> --}}
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="tag"></i><span>{{ trans('admin.Branches') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ url('admin/branches') }}">{{ trans('admin.Branches') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_options') == 1)
                        <li class="sidebar-list">
                            {{-- <span style="color: red">{{is_permited('browse_coupons')}}</span> --}}
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="tag"></i><span>{{ trans('admin.Options') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ url('admin/options') }}">{{ trans('admin.Options') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_addresses') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="map-pin"></i><span>{{ trans('admin.Addresses') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('addresses') }}">{{ trans('admin.All Addresses') }}</a></li>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_categories') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="list"></i><span>{{ trans('admin.Categories') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('categories') }}">{{ trans('admin.All Categories') }}</a></li>
                                <li><a
                                        href="{{ aurl('categories/create') }}">{{ trans('admin.Add New Category') }}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_products') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="box"></i><span>{{ trans('admin.Products') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('products') }}">{{ trans('admin.All Products') }}</a></li>
                                <li><a href="{{ aurl('products/create') }}">{{ trans('admin.Add New Product') }}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_banners') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="image"></i><span>{{ trans('admin.Banners') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('sliders') }}">{{ trans('admin.All Banners') }}</a></li>
                                <li><a href="{{ aurl('sliders/create') }}">{{ trans('admin.Add New Banner') }}</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_customers') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="user"></i><span>{{ trans('admin.Customers') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('users') }}">{{ trans('admin.All Customers') }}</a></li>
                                <li><a href="{{ aurl('users/create') }}">{{ trans('admin.Add New Customer') }}</a></li>
                            </ul>
                        </li>
                        @endif
                        @if (is_permited('browse_settings') == 1)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title">
                                <i data-feather="settings"></i><span>{{ trans('admin.Settings') }} <i
                                        class="fa fa-angle-right pull-right" style="margin-top: 5px"></i></span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ aurl('settings') }}">{{ trans('admin.Site Data') }}</a></li>
                                <li><a href="{{ aurl('settings/terms') }}">{{ trans('admin.Terms') }}</a></li>
                            </ul>
                        </li>
                        @endif

                        {{-- <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ aurl('contact_us') }}">
                                <i data-feather="phone"> </i><span>{{ trans('admin.Contact Us') }}</span>
                            </a>
                        </li> --}}

                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        </div>
    </div>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <br>
        <!-- Container-fluid starts-->
