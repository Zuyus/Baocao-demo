@extends('admin.master', ['menu' => 'dashboard'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Dashboard')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Dashboard')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Statistics -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Total Sale')}}</h2>
                    <div class="status__box__data">
                        <h2>{{$totalProductSale}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Today Order')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $todayProductOrder }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{\Carbon\Carbon::now()->format('F').__(' Sale')}}</h2>
                    <div class="status__box__data">
                        <h2>{{$totalCurrentMonthProductSale}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Yearly Sale') }}</h2>
                    <div class="status__box__data">
                        <h2>{{$totalLatYearProductSale}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistics -->

        <!-- Orders -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Orders')}}</h2>
                    <div class="status__box__data">
                        <h2>{{$totalOrders}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Pending Orders')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $pendingOrders }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__(' Delivered Orders')}}</h2>
                    <div class="status__box__data">
                        <h2>{{$deliveredOrders}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-shopping-cart fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Returned Orders') }}</h2>
                    <div class="status__box__data">
                        <h2>{{$returnedOrders}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Orders -->

        <!-- Earnings -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Total Earning')}}</h2>
                    <div class="status__box__data">
                        <h2>{{__('$').$totalEarning}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-money-bill-wave fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Today Earning')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$todayEarning }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-money-bill-wave fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{\Carbon\Carbon::now()->format('F').__(' Earning')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$monthEarning }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-money-bill-wave fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Yearly Earning') }}</h2>
                    <div class="status__box__data">
                        <h2>{{__('$').$yearEarning}}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings -->

        <!-- Products -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Products')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $totalProducts }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Customers')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $totalUsers }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-check-circle fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Categories')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $totalCategories }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-check-circle fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Brands') }}</h2>
                    <div class="status__box__data">
                        <h2>{{ $totalBrands }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-check-circle fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products -->

        <!-- Transactions -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Online Transactions')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$totalOnlineTransaction }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Paypal Transactions')}}</h2>
                    <div class="status__box__data">
                        <h2>{{  __('$').$totalPaypalTransaction }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Stripe Transactions')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$totalStripeTransaction }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Razorpay Transactions') }}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$totalRazorpayTransaction }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transactions -->

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Bank Transactions')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ __('$').$totalOnlineTransaction }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Reviews')}}</h2>
                    <div class="status__box__data">
                        <h2>{{  $getTotalReviews }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-comment-alt fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__('Blogs')}}</h2>
                    <div class="status__box__data">
                        <h2>{{ $getTotalBlogs }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-blog fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{ __('Subscribers') }}</h2>
                    <div class="status__box__data">
                        <h2>{{ $getTotalSubscribers }}</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-users fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card transactions-chart-card">
                <div class="item-top card-header mb-30">
                    <h2 class="card-title">{{ __('Transactions') }}</h2>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="earnSource"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card sales-ratio-chart-card">
                <div class="item-top card-header mb-30">
                    <h2 class="card-title">{{ __('Sales Ratio') }}</h2>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="salesRatio"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="item-top card-header mb-30">
                    <h2 class="card-title">{{\Carbon\Carbon::now()->format('F').__(' Sales')}}</h2>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="multipleLineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="item-top card-header mb-30">
                    <h2 class="card-title">{{\Carbon\Carbon::now()->format('F').__(' Earnings')}}</h2>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="multipleLineChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="transaction_pie" data-dt='{!! json_encode($transactionPie) !!}'></div>
    <div id="sales_ratio" data-dt='{!! json_encode($salesRatio) !!}'></div>

    @push('post_scripts')
        <script src="{{asset('backend/plugins/chart.min.js')}}"></script>
        <script src="{{asset('backend/js/admin/dashboard.js')}}"></script>
        <script>
            multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
                multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')

            var myMultipleLineChart = new Chart(multipleLineChart, {
                type: 'bar',
                data: {
                    labels: [{!! $order_days !!}],
                    datasets: [{
                        label: "Product Sales",
                        borderColor: "#6777ef",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#6777ef",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: '#6777ef',
                        fill: true,
                        borderWidth: 2,
                        data: [{!! $order_sales !!}]
                    }]
                },
                options : {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode:"nearest",
                        intersect: 0,
                        position:"nearest",
                        xPadding:10,
                        yPadding:10,
                        caretPadding:10
                    },
                    layout:{
                        padding:{left:15,right:15,top:15,bottom:15}
                    }
                }
            });

            var myMultipleLineChart2 = new Chart(multipleLineChart2, {
                type: 'bar',
                data: {
                    labels: [{!! $earning_days !!}],
                    datasets: [ {
                        label: "Earning $",
                        borderColor: "#66bb6a",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#66bb6a",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        backgroundColor: '#66bb6a',
                        fill: true,
                        borderWidth: 2,
                        data: [{!!$total_incomess!!}]
                    }]
                },
                options : {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode:"nearest",
                        intersect: 0,
                        position:"nearest",
                        xPadding:10,
                        yPadding:10,
                        caretPadding:10
                    },
                    layout:{
                        padding:{left:15,right:15,top:15,bottom:15}
                    }
                }
            });
        </script>
    @endpush
@endsection
