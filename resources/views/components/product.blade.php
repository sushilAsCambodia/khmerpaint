<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Products</p>
            <h2>Visit Our Products</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($categories as $cateItem)
                        <li data-filter=".first-{{ $cateItem['id'] }}">{{ $cateItem['category_name'] }}</li>
                    @endforeach
                    {{-- <li data-filter=".first">Complete</li>
                    <li data-filter=".second">Running</li>
                    <li data-filter=".third">Upcoming</li> --}}
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            @foreach ($products as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first-{{ $item['category_id'] }} wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-warp">
                        <div class="portfolio-img">
                            <img src="{{ $item['product_image'] }}" alt="{{ $item['product_name'] }}">
                            <div class="portfolio-overlay">
                                <p>
                                    {{ $item['product_description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3>{{ $item['product_name'] }}</h3>
                            <a class="btn" href="{{ $item['product_image'] }}" data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-1.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-1.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-2.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-2.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-3.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-3.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.4s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-4.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-4.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-5.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-5.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ URL::to('assets/website/img/portfolio-6.jpg') }}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit
                                non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="{{ URL::to('assets/website/img/portfolio-6.jpg') }}"
                            data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-12 load-more">
                {{-- <a class="btn" href="#">Load More</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->
