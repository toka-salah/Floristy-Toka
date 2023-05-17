

@extends('layouts.checkout')

@section('content')
 <!-- Breadcrumb Section Begin -->


 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/flowers.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>My profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <div class="card">
        
        <div class="card-body">

            <dl class="user-info">
                <dt>
                    {{ trans('ProfileUsername') }}
                </dt>
                <dd>
                    {{ auth()->user()->username  }}
                </dd>
            </dl>
        </div>
    </div>

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container" id="cart">

        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection
