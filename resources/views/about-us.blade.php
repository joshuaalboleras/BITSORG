@extends('layouts.app')
@section('title', "About Us")
@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/about.css') }}">
@endsection
@section('content')
    <header class="bg-gradient-custom text-center py-5" style="position: relative; overflow: hidden;">
        <!-- Floating techie shapes -->
        <div class="floating-tech-shapes">
            <div class="shape hexagon-1"></div>
            <div class="shape hexagon-2"></div>
            <div class="shape line-1"></div>
            <div class="shape line-2"></div>
            <div class="shape triangle-1"></div>
        </div>

        <div class="container">
            <img src="{{asset('img/bits.png') }}" alt="BITS Logo" class="img-fluid mb-4" style="max-height: 150px;">
            <h1 class="display-4 fw-bold text-white" data-aos="fade-up">Empowering Bontoc Through Technology</h1>
        </div>
    </header>

    <!-- Vision Section -->
    <section class="py-5 bg-light" id="vision" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center order-md-1" data-aos="fade-right">
                    <i class="fas fa-eye vision-icon"></i>
                </div>
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <h2 class="mb-4 display-6">Our Vision</h2>
                    <p class="lead">
                        By 2040, Southern Leyte State University is a leading higher education institution that advances
                        knowledge and will be known for innovation and compassion for humanity, creating an inclusive
                        society and a sustainable world.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Digital Literacy for All</span>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Innovative Learning Ecosystem</span>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Community-Driven Technology</span>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Sustainable Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5" id="mission" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="mb-4 display-6">Our Mission</h2>
                    <p class="lead">
                        We commit to be a smart and green University that advances education, technological and professional
                        instruction, research and innovation, community engagement services and progressive leadership in
                        arts, sciences and technology that are relevant to the needs of the glocal communities. We produce
                        graduates and life-long learners equipped with knowledge that enhances lives and invigorates
                        economic development.
                    </p>
                </div>
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <i class="fas fa-rocket text-primary" style="font-size: 7rem;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-dark-blue text-white text-center py-5">
        <div class="container">
            <h2 class="mb-4 display-6">Get In Touch</h2>
            <div class="mb-4">
                <a href="#" class="text-white mx-2 hover-scale"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-white mx-2 hover-scale"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-white mx-2 hover-scale"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <button class="btn btn-light text-primary px-5 py-3">Contact Us</button>
        </div>
    </section>

    @section('scripts')
        <!-- Bootstrap JS (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
@endsection
