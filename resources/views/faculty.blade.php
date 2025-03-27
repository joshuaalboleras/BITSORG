@extends('layouts.app')
@section('title','Faculty | Staff')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/faculty.css') }}">
@endsection

@section('content')
<div class="container py-5">
    <h1 class="text-primary fw-bold mb-4">Faculty and Staff</h1>

    <!-- Navigation Buttons -->
    <nav class="mb-4">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-custom active" data-section="permanent">
                Permanent Faculty & Staff
            </button>
            <button type="button" class="btn btn-custom" data-section="parttime">
                Part-Time Faculty
            </button>
            <button type="button" class="btn btn-custom" data-section="ojt">
                OJT Trainees
            </button>
        </div>
    </nav>

    <!-- Permanent Faculty Section -->
    <div id="permanent-section" class="section staff-section rounded-3 p-4">
        <h2 class="text-primary fw-bold mb-4">Permanent Faculty & Staff</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/cads.jpg') }}" alt="Dr. Sarah Mitchell" class="staff-image mb-3">
                        <h3 class="card-title text-primary">Caday</h3>
                        <p class="card-text text-muted">Department Head</p>
                        <p class="card-text text-muted">Computer Science</p>
                        <p class="card-text text-muted">Specializing in AI and Machine Learning with 15 years of academic experience</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/makilang.jpg') }}" alt="Prof. James Wilson" class="staff-image mb-3">
                        <h3 class="card-title text-primary">Christine Makilang</h3>
                        <p class="card-text text-muted">Instructor</p>
                        <p class="card-text text-muted">Web Development</p>
                        <p class="card-text text-muted">Research 10 years of experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Part-Time Faculty Section -->
    <div id="parttime-section" class="section staff-section rounded-3 p-4" style="display: none;">
        <h2 class="text-primary fw-bold mb-4">Part-Time Faculty</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/150" alt="Dr. Emily Chen" class="staff-image mb-3">
                        <h3 class="card-title text-primary">Dr. Emily Chen</h3>
                        <p class="card-text text-muted">Data Science, Python Programming</p>
                        <p class="card-text text-muted">Monday, Wednesday afternoons</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/150" alt="Prof. Michael Brown" class="staff-image mb-3">
                        <h3 class="card-title text-primary">Prof. Michael Brown</h3>
                        <p class="card-text text-muted">Web Development, UX Design</p>
                        <p class="card-text text-muted">Tuesday, Thursday mornings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- OJT Trainees Section -->
    <div id="ojt-section" class="section staff-section rounded-3 p-4" style="display: none;">
        <h2 class="text-primary fw-bold mb-4">OJT Trainees</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/jomaico.jpg') }}" alt="Alex Thompson" class="staff-image mb-3">
                        <h3 class="card-title text-primary">Jomaico Abusca</h3>
                        <p class="card-text text-muted">IT Support</p>
                        <p class="card-text text-muted">Training Period: Jan 2025 - Jun 2025</p>
                        <p class="card-text text-muted">Supervisor: Dr. Sarah Mitchell</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/rhemecel.jpg') }}" alt="Lisa Garcia" class="staff-image mb-3">
                        <h3 class="card-title text-primary"> Rhemcel Arellano  </h3>
                        <p class="card-text text-muted">Academic Affairs</p>
                        <p class="card-text text-muted">Training Period: Mar 2025 - Sep 2025</p>
                        <p class="card-text text-muted">Supervisor: Prof. James Wilson</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card staff-card h-100">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/kyla.jpg') }}" alt="Lisa Garcia" class="staff-image mb-3">
                        <h3 class="card-title text-primary"> Kylla Jane Octobre  </h3>
                        <p class="card-text text-muted">Academic Affairs</p>
                        <p class="card-text text-muted">Training Period: Mar 2025 - Sep 2025</p>
                        <p class="card-text text-muted">Supervisor: Prof. James Wilson</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Section navigation logic
    document.querySelectorAll('.btn-custom').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            document.querySelectorAll('.btn-custom').forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked button
            button.classList.add('active');

            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = 'none';
            });

            // Show selected section
            const sectionToShow = document.getElementById(`${button.dataset.section}-section`);
            if (sectionToShow) {
                sectionToShow.style.display = 'block';
            }
        });
    });
</script>
@endsection