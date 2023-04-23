@extends('website.layouts.app')
@section('content')
    <!-- Page Header Start -->
    @include('website.layouts.pageHeader')
    <!-- Page Header End -->

    <!-- About Start -->
    <x-about />
    <!-- About End -->

    <!-- Fact Start -->
    <x-fact />
    <!-- Fact End -->

    <!-- FAQs Start -->
    <x-faqs />
    <!-- FAQs End -->
@endsection
@section('script')
@endsection
