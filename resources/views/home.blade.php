@extends('layouts.app')

@section('title','Home')

@section('styles')
  <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
  <style>
    /* Custom wave background */
    .wave-section {
      position: relative;
      overflow: hidden;
      padding: 4rem 0;
    }

    .wave-section::before,
    .wave-section::after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 100px;
      background-repeat: repeat-x;
      background-size: contain;
      z-index: -1;
    }

    .wave-section::before {
      top: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23f8f9fa' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,101.3C672,96,768,128,864,154.7C960,181,1056,203,1152,202.7C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .wave-section::after {
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23f8f9fa' fill-opacity='1' d='M0,224L48,240C96,256,192,288,288,293.3C384,299,480,277,576,266.7C672,256,768,256,864,229.3C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
    }

    /* Alternate background colors for sections */
    .news-section {
      background-color: #f4f6f9;
    }

    .events-section {
      background-color: #ffffff;
    }

    .past-events-section {
      background-color: #f0f3f7;
    }

    /* Card hover effect */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Custom button style */
    .btn-custom {
      background-color: #3498db;
      color: white;
      transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #2980b9;
      color: white;
    }

    /* Subtle gradient background */
    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }
  </style>
@endsection

@section('content')
<div class="container-fluid p-0">
  {{-- News Section --}}
  <section class="news-section wave-section">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Latest News</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-primary mb-2">Breaking</span>
              <p class="card-text text-muted mb-2">April 5, 2025</p>
              <h5 class="card-title mb-3">BITS Receives Research Grant</h5>
              <p class="card-text">
                BITS has been awarded a significant research grant to develop innovative AI solutions for sustainable development.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-success mb-2">Announcement</span>
              <p class="card-text text-muted mb-2">March 22, 2025</p>
              <h5 class="card-title mb-3">New Partnership Announced</h5>
              <p class="card-text">
                BITS partners with leading tech company to enhance student internship and research opportunities.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-info mb-2">Achievement</span>
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
      <h2 class="text-center mb-5 fw-bold">Upcoming Events</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop" class="card-img-top" alt="Annual Tech Symposium 2025">
            <div class="card-body d-flex flex-column">
              <span class="badge bg-warning mb-2">Upcoming</span>
              <p class="card-text text-muted mb-2">May 15, 2025</p>
              <h5 class="card-title mb-3">Annual Tech Symposium 2025</h5>
              <p class="card-text mb-4 flex-grow-1">
                Join us for BITS's biggest tech event of the year featuring keynote speakers from leading tech companies, workshops on AI and Machine Learning, and networking opportunities.
              </p>
              <a href="#" class="btn btn-custom mt-auto">Register Now</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&auto=format&fit=crop" class="card-img-top" alt="Cybersecurity Workshop">
            <div class="card-body d-flex flex-column">
              <span class="badge bg-danger mb-2">Limited Seats</span>
              <p class="card-text text-muted mb-2">April 20, 2025</p>
              <h5 class="card-title mb-3">Advanced Cybersecurity Workshop</h5>
              <p class="card-text mb-4 flex-grow-1">
                Intensive one-week workshop covering advanced cybersecurity techniques, threat detection, and defense strategies.
              </p>
              <a href="#" class="btn btn-custom mt-auto">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?w=800&auto=format&fit=crop" class="card-img-top" alt="AI Ethics Seminar">
            <div class="card-body d-flex flex-column">
              <span class="badge bg-success mb-2">New</span>
              <p class="card-text text-muted mb-2">May 5, 2025</p>
              <h5 class="card-title mb-3">AI Ethics and Responsibility Seminar</h5>
              <p class="card-text mb-4 flex-grow-1">
                A comprehensive seminar exploring the ethical implications of artificial intelligence in modern society.
              </p>
              <a href="#" class="btn btn-custom mt-auto">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Past Events Section --}}
  <section class="past-events-section wave-section">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Past Events</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Completed</span>
              <p class="card-text text-muted mb-2">March 5, 2025</p>
              <h5 class="card-title mb-3">Programming Society Hackathon</h5>
              <p class="card-text">
                Successful 48-hour hackathon focused on Sustainable Technology Solutions. Winner announced and prizes distributed.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-info mb-2">Concluded</span>
              <p class="card-text text-muted mb-2">February 28, 2025</p>
              <h5 class="card-title mb-3">Cloud Computing Workshop</h5>
              <p class="card-text">
                Completed four-week workshop series on AWS and Azure fundamentals. Participants received certification.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Finished</span>
              <p class="card-text text-muted mb-2">February 20, 2025</p>
              <h5 class="card-title mb-3">Data Science Industry Talk</h5>
              <p class="card-text">
                Successful virtual seminar with industry leaders discussing latest trends in data science and analytics.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('scripts')
  
@endsection