@extends('layouts.app')

@section('title','Home')

@section('styles')
  <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
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