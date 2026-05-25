@extends('auth.frontend.layout.master')


@section('content')
        <div class="sale-offer ">
            <div class="container container-full ">
                <div class="sale-offer__content flx-between position-relative">
                    <div class="sale-offer__countdown">
                        
                        <div class="countdown" data-date="14-10-2026" data-time="12:00">
                            <div class="day"><span class="num"></span><span class="word"></span></div>
                            <div class="hour"><span class="num"></span><span class="word"></span></div>
                            <div class="min"><span class="num"></span><span class="word"></span></div>
                            <div class="sec"><span class="num"></span><span class="word"></span></div>
                        </div>

                    </div>
                    <div class="sale-offer__discount flx-align gap-2">
                        <span class="sale-offer__text text-heading text-capitalize">New Year Flash Sale Offer</span>
                        <strong class="sale-offer__qty text-heading font-heading">45% OFF</strong>
                        <a href="#" class="btn btn-sm btn-white fw-500">Shop Now</a>
                    </div>
                    <div class="sale-offer__button">
                        <button type="submit" class="sale-offer__close text-heading"><i
                                class="las la-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Sale Offer End =========================== -->

        <!-- ==================== Header Start Here ==================== -->
        <!-- ==================== Header End Here ==================== -->

        <!-- ==================== Category Menu Start ==================== -->
        @include('auth.frontend.home.section.category')
        <!-- ==================== Category Menu End ==================== -->

        <!--========================== Banner Section Start ==========================-->
       @include('auth.frontend.home.section.banner')
        <!--========================== Banner Section End ==========================-->

        <!-- ======================== popular Section Start =========================== -->
       @include('auth.frontend.home.section.popular')
        <!-- ======================== popular Section End =========================== -->

        <!-- =========================== Arrival Product Section Start ========================== -->
        @include('auth.frontend.home.section.arrival')
        <!-- =========================== Arrival Product Section End ========================== -->

        <!-- ======================= Featured Products Start =============================== -->
      @include('auth.frontend.home.section.featureproduct')
        <!-- ======================= Featured Products End =============================== -->

        <!-- ======================= Selling Products Start ========================= -->
       @include('auth.frontend.home.section.sellingproduct')
        <!-- ======================= Selling Products End ========================= -->

        <!-- ======================= To Featured Author Start =============================== -->
       @include('auth.frontend.home.section.featuredAuthor')
        <!-- ======================= To Featured Author End =============================== -->

        <!-- ======================= Top performance Author Start =============================== -->
        @include('auth.frontend.home.section.topperformance')
        <!-- ======================= Top performance Author End =============================== -->

        <!-- ======================= Become seller section start ==================== -->
      @include('auth.frontend.home.section.selleraction')
        <!-- ======================= Become seller section End ==================== -->


@endsection
