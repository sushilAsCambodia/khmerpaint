    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($sliders as $kay => $item)
                <div class="carousel-item @if($kay == 0)active @endif">
                    <img src="{{ $item['image'] }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">{{ $item['tittle'] }}</p>
                        <h1 class="animated fadeInLeft">{{ $item['description'] }}</h1>
                        <a class="btn animated fadeInUp" href="{{ $item['redirect_url'] }}">Click Here</a>
                    </div>
                </div>
            @endforeach
            {{-- <div class="carousel-item active">
                <img src="{{ URL::to('assets/website/img/carousel-1.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Professional</p>
                    <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                    <a class="btn animated fadeInUp" href="#">Get
                        A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ URL::to('assets/website/img/carousel-2.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Professional Builder</p>
                    <h1 class="animated fadeInLeft">We Build Your Home</h1>
                    <a class="btn animated fadeInUp" href="#">Get
                        A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ URL::to('assets/website/img/carousel-3.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Trusted</p>
                    <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                    <a class="btn animated fadeInUp" href="#">Get
                        A Quote</a>
                </div>
            </div> --}}
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->
