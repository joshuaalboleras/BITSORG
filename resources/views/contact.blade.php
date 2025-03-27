@extends('auth.clean');
@section('additional')
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
@endsection
@section('content')
    <!-- Floating Tech Shapes -->
    <div class="floating-tech-shapes">
        <div class="shape hexagon-1 bg-primary"></div>
        <div class="shape hexagon-2 bg-primary"></div>
        <div class="shape line-1 bg-primary"></div>
        <div class="shape line-2 bg-primary"></div>
        <div class="shape triangle-1 bg-primary"></div>
        <div class="shape triangle-2 bg-primary"></div>
    </div>

    <!-- Decorative Circles -->
    <div class="decorative-circle top-left-circle"></div>
    <div class="decorative-circle top-right-circle"></div>
    <div class="decorative-circle bottom-left-circle"></div>
    <div class="decorative-circle bottom-right-circle"></div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <img src="{{ asset('img/bits.png') }}" alt="BITS Logo" class="mb-4" style="height: 5rem;">

                <div class=" text-white">
                    <h2 class=" text-primary mb-2">Contact Us</h2>
                    <p class=" text-primary opacity-75">We'd love to hear from you</p>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-6">
                <form id="contactForm" class="bg-white p-4 p-md-5 rounded-3 shadow-sm">
                    <div class="mb-3">
                        <label for="name" class="form-label text-muted">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            value="{{ auth()->user()->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-muted">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            value="{{ auth()->user()->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label text-muted">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>

                    <div id="errorMessage" class="text-danger mb-3 d-none"></div>
                    <div id="successMessage" class="text-success mb-3 d-none">Message sent successfully!</div>

                    <button type="submit" class="btn text-white w-100 bg-gradient-blue" id="submitButton">
                        Send Message
                    </button>

                    <a href="{{ route('user.home') }}" class="btn text-white w-100 bg-gradient-blue mt-2"> Back </a>
                </form>
            </div>
        </div>
    </div>
@endsection