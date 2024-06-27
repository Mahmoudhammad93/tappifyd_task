@extends('admin.layouts.app')
@section('content')
@if (is_permited('browse_dashboard') == 1)
    <div class="container-fluid">
        <div class="row">
        
            @if (is_permited('browse_salse_today') == 1)
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden static-top-widget-card">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="">{{ trans('admin.Sales Today') }}</h6>
                                <h5 class="mb-0 counter" style="style-weight:bold">{{ number_format($todaySales, 3) }}
                                    {{ trans('admin.KWD') }}</h5>
                            </div>
                            <i class="fas fa-chart-line" style="font-size: 50px ; color:#f73164"></i>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-secondary" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_salse_week') == 1)
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden static-top-widget-card">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="">{{ trans('admin.Sales Week') }}</h6>
                                <h5 class="mb-0 counter" style="style-weight:bold">{{ number_format($weekSales, 3) }}
                                    {{ trans('admin.KWD') }}</h5>
                            </div>
                            <i class="fas fa-chart-bar" style="font-size: 50px ; color:#ee3e36"></i>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-primary" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_salse_month') == 1)
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 class="">{{ trans('admin.Sales Month') }}</h6>
                                <h5 class="mb-0 counter" style="style-weight:bold">{{ number_format($monthSales, 3) }}
                                    {{ trans('admin.KWD') }}</h5>
                            </div>
                            <i class="fas fa-chart-area" style="font-size: 50px ; color:#f73164"></i>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-secondary" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_salse_all') == 1)
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden static-top-widget-card"
                    style="background-color: #590370 ;box-shadow: 0 0 15px #e274ff ">
                    <div class="card-body">
                        <div class="media static-top-widget">
                            <div class="media-body">
                                <h6 style="color:#fff ;">{{ trans('admin.Total Sales') }}</h6>
                                <h5 style="color:#fff ;" class="mb-0 counter" style="style-weight:bold">
                                    {{ number_format($allSales, 3) }} {{ trans('admin.KWD') }}</h5>
                            </div>
                            <i class="fas fa-chart-pie" style="font-size: 50px ; color:#ee3e36"></i>
                        </div>
                        <div class="progress-widget">
                            <div class="progress sm-progress-bar progress-animate">
                                <div class="progress-gradient-primary" role="progressbar" style="width: 90%"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span
                                        class="animate-circle"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_orders_today') == 1)
            <div class="col-xl-3 box-col-3 col-lg-3 col-md-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="">{{ trans('admin.Orders Today') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $todayOrders }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-boxes fa-lg" style="color:#ee3e36"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_orders_week') == 1)
            <div class="col-xl-3 box-col-3 col-lg-3 col-md-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.Orders Week') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $weekOrders }}</span>
                                </h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-trophy fa-lg"
                                    style="color:#00ff48" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_orders_month') == 1)
            <div class="col-xl-3 box-col-3 col-lg-3 col-md-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.Orders Month') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $monthOrders }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-star fa-lg"
                                    style="color:#e5ff00" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_orders_all') == 1)
            <div class="col-xl-3 box-col-3 col-lg-3 col-md-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.All Orders') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $allOrders }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-copyright fa-lg"
                                    style="color:#0099ff" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            @if (is_permited('browse_all_products') == 1)
            <div class="col-xl-4 box-col-4 col-lg-3 col-md-4">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.All Products') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $allProducts }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-box fa-lg"
                                    style="color:#ff0051" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_all_categories') == 1)
            <div class="col-xl-4 box-col-4 col-lg-3 col-md-4">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.All Categories') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $allCategories }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-list fa-lg"
                                    style="color:#f2ff00" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (is_permited('browse_all_users') == 1)
            <div class="col-xl-4 box-col-4 col-lg-3 col-md-4">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500">{{ trans('admin.All Users') }}</p>
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $allUsers }}</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fas fa-users fa-lg"
                                    style="color:#00ff59" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
    @push('script')
        <!-- chartjs js -->
        <script src="{{ asset('dashboard') }}/assets/js/plugins/Chart.min.js"></script>
        <!-- highchart chart -->
        <script src="{{ asset('dashboard') }}/assets/js/plugins/highcharts.js"></script>
        <script src="{{ asset('dashboard') }}/assets/js/plugins/highcharts-3d.js"></script>
    @endpush
@else
<div class="alert alert-danger">
    No Have Permission
</div>
@endif
@endsection
