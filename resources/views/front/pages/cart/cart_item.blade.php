<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">{{__('Product Name')}}</th>
        <th scope="col">{{__('Price')}}</th>
        <th scope="col">{{__('Quantity')}}</th>
        <th scope="col">{{__('Total')}}</th>
        <th scope="col">{{__('Remove')}}</th>
    </tr>
    </thead>
    <tbody>
    <div id="cart_ajax_load">
        @php
            $total=0;
        @endphp
        @foreach($content as $item)
            <tr class="cart-page-item">
                <td>
                    <div class="single-grid-product m-0">
                        <div class="product-top">
                            <a href="javascript:void(0)"><img class="product-thumbnal" src="{{asset(ProductImage().$item->options->image)}}" alt="cart"></a>
                            <div class="product-flags">
                                <span class="product-flag sale">{{$item->options->item_tag}}</span>
                                <span class="product-flag discount">-{{$item->options->discount_parcent}}%</span>
                            </div>
                        </div>
                        <div class="product-info text-center">
                            <h3 class="product-name"><a class="product-link" href="javascript:void(0)">{{$item->name}}</a></h3>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color"
                                               class="color-select" type="radio">
                                        <span style="background:{{$item->options->color}};"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size active">{{$item->options->size}}</li>
                            </ul>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="product-price text-center">
                        <h4 class="regular-price">{{__('$')}}{{$item->weight}}</h4>
                        <h3 class="price ">{{__('$')}} <span class="mainPrice">{{$item->price}}</span> </h3>
                    </div>
                </td>
                <td>
                    <div class="cart-quantity input-group">
                        <div class="increase-btn dec qtybutton btn qty_decrease" data-id="{{$item->rowId}}">-</div>
                        <input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="{{$item->qty}}" readonly />
                        <div class="increase-btn inc qtybutton btn qty_increase" data-id="{{$item->rowId}}">+</div>
                    </div>
                </td>
                <td>
                    <h1 class="cart-table-item-total">${{$item->subtotal}}</h1>
                </td>
                <td><button class="delet-btn deleteItem" title="Delete Item" data-id="{{$item->rowId}}"><img src="{{asset('frontend/assets/images/close.svg')}}" alt="close" /></button></td>
            </tr>
            @php
                $total += $item->subtotal;
            @endphp
        @endforeach
    </div>
    </tbody>
</table>
