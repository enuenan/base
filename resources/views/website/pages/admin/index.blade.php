@extends('website.layouts.default', [
'pageName1' => 'Admin',
'pageName2' => '',
'pageDesc' => ' Admin Dashboard',
])

@section('content')
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fas fa-cart-plus"></i></div>
                <div class="stats-info">
                    <h4>Total Order</h4>
                    <p>{{ $order }}</p>
                </div>
                <div class="stats-link">
                    {{-- <a href="{{ route('orders.index') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a> --}}
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fas fa-list-alt"></i></div>
                <div class="stats-info">
                    <h4>Total Food</h4>
                    <p>{{ $food }}</p>
                </div>
                <div class="stats-link">
                    {{-- <a href="{{ route('food-category.index') }}">View Detail <i
                            class="fa fa-arrow-alt-circle-right"></i></a> --}}
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-grey-darker">
                <div class="stats-icon"><i class="fas fa-list-alt"></i></div>
                <div class="stats-info">
                    <h4>Total Merchandise</h4>
                    <p>{{ $merchandise }}</p>
                </div>
                <div class="stats-link">
                    {{-- <a href="{{ route('merchandise-product.index') }}">View Detail <i
                            class="fa fa-arrow-alt-circle-right"></i></a> --}}
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-black-lighter">
                <div class="stats-icon"><i class="fas fa-comment-alt"></i></div>
                <div class="stats-info">
                    <h4>Total Feedback</h4>
                    <p>{{ $feedback }}</p>
                </div>
                <div class="stats-link">
                    {{-- <a href="{{ route('feedback') }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a> --}}
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
@endsection
