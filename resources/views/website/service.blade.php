@extends('website.layouts.app')
@section('content')
    <!-- Page Header Start -->
    @include('website.layouts.pageHeader')
    <!-- Page Header End -->

    <!-- Service Start -->
    <x-service />
    <!-- Service End -->

    <!-- FAQs Start -->
    <x-faqs />
    <!-- FAQs End -->
@endsection
@section('script')
@endsection
