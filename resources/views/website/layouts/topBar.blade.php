<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="/">
                        <h1>Khmerpaint</h1>
                        {{-- <img src="{{ URL::to('assets/website/img/logo-1.jpg') }}" alt="Logo"> --}}
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Opening Hour</h3>
                                <p>Mon - Fri, 8:00 - 9:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="/" class="nav-item nav-link {{ (request()->is('/') ? 'active' :'') }}">Home</a>
                    <a href="about" class="nav-item nav-link {{ (request()->is('about') ? 'active' :'') }}">About</a>
                    <a href="service" class="nav-item nav-link {{ (request()->is('service') ? 'active' :'') }}">Service</a>
                    <a href="team" class="nav-item nav-link {{ (request()->is('team') ? 'active' :'') }}">Team</a>
                    <a href="products" class="nav-item nav-link {{ (request()->is('products') ? 'active' :'') }}">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('blogs') ? 'active' :'') }}  {{ (request()->is('single') ? 'active' :'') }}" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="blogs" class="dropdown-item">Blog Page</a>
                            <a href="single" class="dropdown-item">Single Page</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link {{ (request()->is('contact') ? 'active' :'') }}">Contact</a>
                </div>
                <div class="ml-auto">
                    <a class="btn" href="#">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
