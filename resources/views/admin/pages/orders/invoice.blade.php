<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <p><img src="{{ asset(IMG_LOGO_PATH . allsetting()['main_logo']) }}" alt="{{ __('Logo') }}" />
                </p>
                @php
                    $bill = json_decode($order->billing_address, true);
                @endphp
                <p>
                    <b>{{ __('Order Number:') }}</b> <a href="javascript:void(0)">{{ $order->Order_Number }}</a><br>
                    <b>{{ __('Name:') }}</b> {{ $bill['name'] }}<br>
                    <b>{{ __('Email:') }}</b> {{ $bill['email'] }}<br>
                    <b>{{ __('Payment Method: ') }}</b> {{ $order->Payment_Method }}<br>
                    <b>{{ __('TXN: ') }}</b> {{ $order->txn }}
                </p>
            </div>
        </div>
        <div class="row billing-address-wrap" style="margin-bottom: 20px">
            <div class="col-md-6 billing-address-item billing-address-box" style="float: left; width:50%">
                <p>
                    <b>{{ __('Billing Address:') }}</b><br>
                    <small>
                        {{ $bill['name'] }} <br>
                        {{ $bill['email'] }} <br>
                        {{ $bill['street'] }} <br>
                        {{ $bill['state'] }} <br>
                        {{ $bill['country'] . __(',') }} {{ $bill['zipcode'] }}
                    </small>
                </p>

            </div>
            <div class="col-md-6 billing-address-item shipping-address-box" style="float: right; width:50%; text-align:right">
                @php
                    $ship = json_decode($order->shipping_address, true);
                @endphp
                <p>
                    <b>{{ __('Shipping Address:') }}</b><br>
                    <small>
                        {{ $ship['name'] }} <br>
                        {{ $ship['email'] }} <br>
                        {{ $ship['street'] }} <br>
                        {{ $ship['state'] }} <br>
                        {{ $ship['country'] . __(',') }} {{ $ship['zipcode'] }}
                    </small>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('Products') }}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Quantity') }}</th>
                                    <th>{{ __('Size') }}</th>
                                    <th>{{ __('Color') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->order_details as $od)
                                    <tr>
                                        <td>{{ $od->product->en_Product_Name }}</td>
                                        <td><img src="{{ asset(IMG_PRODUCT_PATH . $od->product->Primary_Image) }}"
                                                height="50" class="img-rounded mr-1" /></td>
                                        <td>{{ $od->Quantity }}</td>
                                        <td>{{ is_null($od->Size) ? __('N/A') : $od->Size }}</td>
                                        <td>{{ is_null($od->Color) ? __('N/A') : $od->Color }}</td>
                                        <td>{{ $od->Price }}</td>
                                        <td>{{ $od->Total_Price }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ __('Subtotal') }}</td>
                                    <td>{{ $order->Sub_Total }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ __('Shipping Charge') }}</td>
                                    <td>{{ $order->Delivery_Charge }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ __('Tax') }}</td>
                                    <td>{{ $order->Tax }}</td>
                                </tr>
                                @if (!is_null($order->Coupon_Id))
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ __('Discount (-)') }}</td>
                                        <td>{{ $order->Coupon_Amount }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ __('Grand Total') }}</td>
                                    <td>{{ $order->Grand_Total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <small class="text-danger">{{ __('*All the amount is in USD currency.') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script>
        print()
    </script>

</body>

</html>
