@extends('back.layouts.app')

@section('content')


            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <!--<h4 class="mb-sm-0">Crypto</h4>-->

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <!--<li class="breadcrumb-item active">Crypto</li>-->
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="col-xxl-9 order-xxl-0 order-first">
                        <div class="d-flex flex-column h-100">
                            <div class="row h-100">
                                @if(isset($userCount))
                    
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-light text-danger rounded-circle fs-3">
                                                            <i class="ri-user-follow-line align-middle"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Active Administrator</p>
                                                        <h4 class=" mb-0"><span class="counter-value" data-target="{{ $userCount }}">0</span></h4>
                                                    </div>
                                                    <!--<div class="flex-shrink-0 align-self-end">
                                                        <span class="badge badge-soft-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>6.24 %<span> </span></span>
                                                    </div>-->
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                @endif

                                @if(isset($orderCount))
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-light text-danger rounded-circle fs-3">
                                                            <i class=" ri-shopping-bag-3-fill align-middle"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Orders</p>
                                                        <h4 class=" mb-0"><span class="counter-value" data-target="{{ $orderCount }}">0</span></h4>
                                                    </div>
                                                    <!--<div class="flex-shrink-0 align-self-end">
                                                        <span class="badge badge-soft-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>3.67 %<span> </span></span>
                                                    </div>-->
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                @endif

                                @if(isset($blogCount))
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-light text-danger rounded-circle fs-3">
                                                            <i class="ri-newspaper-line align-middle"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Active Blog</p>
                                                        <h4 class=" mb-0"><span class="counter-value" data-target="{{ $blogCount }}">0</span></h4>
                                                    </div>
                                                    <!--<div class="flex-shrink-0 align-self-end">
                                                        <span class="badge badge-soft-danger"><i class="ri-arrow-down-s-fill align-middle me-1"></i>4.80 %<span> </span></span>
                                                    </div>-->
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                @endif
                            </div><!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



@endsection