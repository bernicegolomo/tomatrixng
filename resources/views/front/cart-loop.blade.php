<ul>
    <li class="header-shop-cart">
        <a href="#">
            <i class="flaticon-shopping-cart"></i>
            <span>
                @if(isset($cartContent))
                    {{count($cartContent)}}
                @endif
            </span>
        </a>
        <ul class="minicart" >
            @if(isset($cartContent) && count($cartContent) > 0)
                @php $total = 0; @endphp
                @foreach($cartContent as $cart) 
                    <li class="d-flex align-items-start">
                        <div class="cart-img">
                            @php 
                                $product = App\Http\Controllers\WebsiteController::productdetails($cart->id); 
                                $total = $total + ($cart->price * $cart->qty)
                            @endphp
                            <a>
                                <img src="{{asset('assets/img/product/'.$product->file)}}" alt="">
                            </a>
                        </div>
                        <div class="cart-content">
                            <h4>
                                <a>{{$cart->name}}</a>
                            </h4>
                            <div class="cart-price">
                                <span class="new">&#8358; {{number_format($cart->price)}}</span>
                                <span class="text-danger">
                                    ({{$cart->qty}} qty)
                                </span>
                            </div>
                        </div>
                        <div class="del-icon">
                            <a href="#" class="remove-item" data-rowid="{{ $cart->rowId }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </li>
                @endforeach

                <li>
                    <div class="total-price">
                        <span class="f-left">Total:</span>
                        <span class="f-right">&#8358; {{number_format($total)}}</span>
                    </div>
                </li>
                <li>
                    <div class="checkout-link">
                        <a href="{{url('/checkout')}}">Shopping Cart</a>
                        <!--<a class="black-bg" href="#">Checkout</a>-->
                    </div>
                </li>
            @else
                <li class="d-flex align-items-start">
                    <div class="cart-content">
                        <span>
                            Empty Cart
                        </span>
                    </div>
                </li>
            @endif
        </ul>
    </li>
    <li class="offcanvas-btn d-none d-lg-block">
        <a href="#" class="navSidebar-button">
            <i class="flaticon-menu"></i>
        </a>
    </li>
</ul>