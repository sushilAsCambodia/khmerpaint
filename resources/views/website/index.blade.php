@extends('website.layouts.app')
@section('content')
    <!-- Carousel Start -->
    <x-slider />
    <!-- Carousel End -->

    <!-- Feature Start-->
    <div class="feature wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Expert Worker</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Quality Work</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="feature-text">
                            <h3>24/7 Support</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- About Start -->
    <x-about />
    <!-- About End -->

    <!-- Fact Start -->
    <x-fact />
    <!-- Fact End -->

    <!-- Service Start -->
    <x-service />
    <!-- Service End -->

    <!-- Video Start -->
    <div class="video wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <button type="button" class="btn-play" data-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <!-- Product Start -->
    <x-product />
    <!-- Product End -->

    <!-- Team Start -->
    <x-team />
    <!-- Team End -->

    <!-- FAQs Start -->
    {{-- <x-faqs /> --}}
    <!-- FAQs End -->

    <!-- Testimonial Start -->
    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-1.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-2.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-3.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-4.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-1.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-2.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-3.jpg') }}" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ URL::to('assets/website/img/testimonial-4.jpg') }}" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <x-blog />
    <!-- Blog End -->
@endsection
@section('script')
@endsection
