<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ URL::to('assets/website/img/about.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Welcome to Khmerpaint</p>
                    <h2>25 Years Experience</h2>
                </div>
                <div class="about-text">
                    <p>
                        <b>OUR VISION</b> - KHMER PAINT aspires to become one of the key players in painting business
                        in the country with high quality products and outstanding workmanship at reasonable
                        cost.
                    </p>
                    <p>
                        <b> OUR MISSION </b> - to become a major paint company in Cambodia by providing value
                        added services to our clients and creating a successful partnership with them
                        throughout the painting process. We aim to establish lasting relationships by exceeding
                        our customer expectation through exceptional performance of our team.
                    </p>
                    @if(request()->is('about'))
                        <a class="btn" href="/contact">Learn More</a>
                     @else
                        <a class="btn" href="/about">Learn More</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
