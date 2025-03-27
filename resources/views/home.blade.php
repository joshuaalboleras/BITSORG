@extends('layouts.app')

@section('title','Home')

@section('styles')
  <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    .text-animate {
      animation: fadeInUp 1s ease-out;
    }
  
    .text-animate-delay {
      animation: fadeInUp 1s ease-out 0.5s;
      animation-fill-mode: backwards;
    }
  
    .pulse-animation {
      animation: pulse 2s infinite;
    }
  
    .card-hover-effect {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
  
    .card-hover-effect:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
  
    .animate-badge {
      transition: background-color 0.3s ease;
    }
  
    .card-hover-effect:hover .animate-badge {
      background-color: darken($color, 10%);
    }
  
    .event-image {
      transition: transform 0.5s ease;
    }
  
    .card-hover-effect:hover .event-image {
      transform: scale(1.1);
    }
  
    .img-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(transparent 60%, rgba(0,0,0,0.7));
      opacity: 0;
      transition: opacity 0.3s ease;
    }
  
    .card-hover-effect:hover .img-overlay {
      opacity: 1;
    }
  
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

 
  </style>
@endsection

@section('content')
<div class="container-fluid p-0 overflow-hidden">
  {{-- Animated Hero Section --}}
  <section class="hero-section position-relative bg-gradient text-white overflow-hidden">
    <div class="container position-relative">
      <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-lg-6 p-4">
          <h1 class="display-4 fw-bold mb-4 text-animate text-primary">Innovate. Transform. Lead.</h1>
          <p class="lead mb-4 text-animate-delay text-primary">Discover cutting-edge technology and research at BITS</p>
          <a href="#latest-news" class="btn btn-primary btn-lg pulse-animation">Explore More</a>
        </div>
        <div class="col-lg-6">
          <div class="hero-image-wrapper" data-aos="zoom-in" data-aos-duration="1500">
            <img src="{{asset('img/bits.png')}}" alt="BITS Innovation" class="img-fluid rounded-4  hero-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- News Section --}}
  <section id="latest-news" class="news-section wave-section bg-light">
    <div class="container">
      <h2 class="mb-5 fw-bold text-primary text-center" data-aos="fade-up">Latest News</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col" data-aos="flip-left" data-aos-duration="800">
          <div class="card h-100 shadow-sm card-hover-effect">
            <div class="card-body">
              <span class="badge bg-primary mb-2 animate-badge">Breaking</span>
              <p class="card-text text-muted mb-2">April 5, 2025</p>
              <h5 class="card-title mb-3">BITS Receives Research Grant</h5>
              <p class="card-text">
                BITS has been awarded a significant research grant to develop innovative AI solutions for sustainable development.
              </p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="flip-left" data-aos-duration="800">
          <div class="card h-100 shadow-sm card-hover-effect">
            <div class="card-body">
              <span class="badge bg-success mb-2 animate-badge">Announcement</span>
              <p class="card-text text-muted mb-2">March 22, 2025</p>
              <h5 class="card-title mb-3">New Partnership Announced</h5>
              <p class="card-text">
                BITS partners with leading tech company to enhance student internship and research opportunities.
              </p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="flip-left" data-aos-duration="800">
          <div class="card h-100 shadow-sm card-hover-effect">
            <div class="card-body">
              <span class="badge bg-info mb-2 animate-badge">Achievement</span>
              <p class="card-text text-muted mb-2">March 15, 2025</p>
              <h5 class="card-title mb-3">Student Research Publication</h5>
              <p class="card-text">
                BITS students publish groundbreaking research in top-tier international technology journal.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Upcoming Events Section --}}
  <section class="events-section wave-section">
    <div class="container">
      <h2 class="mb-5 fw-bold text-primary text-center" data-aos="fade-up">Upcoming Events</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="card h-100 shadow-sm card-hover-effect overflow-hidden">
            <div class="card-img-wrapper position-relative">
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop" class="card-img-top event-image" alt="Annual Tech Symposium 2025">
              <div class="img-overlay"></div>
            </div>
            <div class="card-body d-flex flex-column">
              <span class="badge bg-warning mb-2 animate-badge">Upcoming</span>
              <p class="card-text text-muted mb-2">May 15, 2025</p>
              <h5 class="card-title mb-3">Annual Tech Symposium 2025</h5>
              <p class="card-text mb-4 flex-grow-1">
                Join us for BITS's biggest tech event of the year featuring keynote speakers from leading tech companies, workshops on AI and Machine Learning, and networking opportunities.
              </p>
              <a href="#" class="btn btn-primary mt-auto register-btn">Register Now</a>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="card h-100 shadow-sm card-hover-effect overflow-hidden">
            <div class="card-img-wrapper position-relative">
              <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&auto=format&fit=crop" class="card-img-top event-image" alt="Cybersecurity Workshop">
              <div class="img-overlay"></div>
            </div>
            <div class="card-body d-flex flex-column">
              <span class="badge bg-danger mb-2 animate-badge">Limited Seats</span>
              <p class="card-text text-muted mb-2">April 20, 2025</p>
              <h5 class="card-title mb-3">Advanced Cybersecurity Workshop</h5>
              <p class="card-text mb-4 flex-grow-1">
                Intensive one-week workshop covering advanced cybersecurity techniques, threat detection, and defense strategies.
              </p>
              <a href="#" class="btn btn-primary mt-auto register-btn">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="card h-100 shadow-sm card-hover-effect overflow-hidden">
            <div class="card-img-wrapper position-relative">
              <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?w=800&auto=format&fit=crop" class="card-img-top event-image" alt="AI Ethics Seminar">
              <div class="img-overlay"></div>
            </div>
            <div class="card-body d-flex flex-column">
              <span class="badge bg-success mb-2 animate-badge">New</span>
              <p class="card-text text-muted mb-2">May 5, 2025</p>
              <h5 class="card-title mb-3">AI Ethics and Responsibility Seminar</h5>
              <p class="card-text mb-4 flex-grow-1">
                A comprehensive seminar exploring the ethical implications of artificial intelligence in modern society.
              </p>
              <a href="#" class="btn btn-primary mt-auto register-btn">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

{{-- ADD FULL CALENDAR HERE --}}
@endsection

@section('scripts')
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      mirror: false,
    });

    document.addEventListener('DOMContentLoaded', () => {
      const registerButtons = document.querySelectorAll('.register-btn');
      registerButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
          this.classList.add('btn-hover-effect');
        });
        btn.addEventListener('mouseleave', function() {
          this.classList.remove('btn-hover-effect');
        });
      });
    });
  </script>
@endsection

