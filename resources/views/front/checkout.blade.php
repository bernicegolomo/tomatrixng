@extends('front.layouts.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('assets/img/bg/breadcrumb.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Shopping Cart</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="transparent-title">Tomatrix</div>-->
                <div class="breadcrumb-shape" data-parallax='{"y" : 300 }'></div>
            </section>
            <!-- breadcrumb-area-end -->


            
            <!-- faq-area -->
            <section class="faq-area fix pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="">
                            @include('partials.errors')
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                            @endif
                        </div>
                    </div>
                    <div class="header-action d-none d-sm-block" id="checkout-list">                                        
                        @include('front.checkout-loop', ['cartContent' => Cart::content()])                                                
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->
            





            
  







@endsection
@push('scripts')
 
@endpush
@stack('scripts')