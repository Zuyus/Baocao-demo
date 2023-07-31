@extends('email.layout')
@section('content')
    <section class="mail-seccess section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <h1><i class="fa fa-envelope"></i><span>{{ __('Shipment Process') }}</span></h1>
                    <p>{{ __('Order ID: ') . $order->Order_Number }}</p>
                    <p>{{ __('Total Amount: ') . $order->Grand_Total }}</p>
                </div>
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="success-inner">
                        @if ($data == ORDER_PENDING)
                            <p>{{ __('Your order is pending!') }}</p>
                        @elseif($data == ORDER_PROCESSING)
                            <p>{{ __('Your order is on process!') }}</p>
                        @elseif($data == ORDER_SHIPPED)
                            <p>{{ __('Your order is shipped!') }}</p>
                        @elseif($data == ORDER_DELIVERED)
                            <p>{{ __('Your order is delivered!') }}</p>
                        @elseif($data == ORDER_CANCELLED)
                            <p>{{ __('Your order is cancelled!') }}</p>
                        @elseif($data == ORDER_RETURN)
                            <p>{{ __('Cancel order returned to our hub!') }}</p>
                        @else
                            <p>{{ __('Order process failed!') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
