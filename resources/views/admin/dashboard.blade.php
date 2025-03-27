@extends('admin.clean')

@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/admin.css') }}">
@endsection

@section('content')
    
<div class="container-fluid admin-container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar d-none d-md-block p-0">
            <div class="p-4">
                <h2 class="fs-4 fw-bold">Admin Panel</h2>
            </div>
            
            <nav class="nav flex-column p-4">
                <a class="nav-link" href="#">
                    <i class="fas fa-home me-2"></i>Dashboard
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-users me-2"></i>Users
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-chart-bar me-2"></i>Analytics
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-cog me-2"></i>Settings
                </a>
                <form style="margin: 0px; padding: 0px;" class=" d-inline nav-link" action="{{route('logout')}}" method="post">
                    @csrf
                    <button class=" nav-link text-white"><i class="fa fa-sign-out me-2"></i> Logout</button>
                </form>
            </nav>

            <div class="p-4 border-top border-secondary mt-auto">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                    <span>Admin User</span>
                </div>
            </div>
        </div>
        <!-- end of sidebar -->

        <!-- Main Content -->
        <div class="col-md-10 main-content">
            <!-- Header -->
            <header class="bg-white border-bottom p-3">
                <div class="d-flex align-items-center">
                    <button class="btn d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <div class="flex-grow-1 mx-4">
                        <div class="position-relative">
                            <input type="search" placeholder="Search..." class="form-control">
                            <i class="fas fa-search position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <button class="btn position-relative me-3">
                            <i class="fas fa-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger">3</span>
                        </button>
                        <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="p-4 overflow-y-auto">
                <div class="container-fluid">
                    <div class="mb-4">
                        <h1 class="display-6 fw-bold">Welcome back, Admin</h1>
                        <p id="currentDate" class="text-muted"></p>
                    </div>

                    <!-- Metrics Grid -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-3">
                            <div class="card metric-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="card-title mb-0">Total Users</h6>
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="fs-4 fw-bold">10,432</div>
                                    <div class="text-success">+12.5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card metric-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="card-title mb-0">Active Users</h6>
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                    <div class="fs-4 fw-bold">8,221</div>
                                    <div class="text-success">+18.2%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card metric-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="card-title mb-0">Revenue</h6>
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="fs-4 fw-bold">$84,324</div>
                                    <div class="text-success">+25.8%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card metric-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="card-title mb-0">Growth</h6>
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="fs-4 fw-bold">23.8%</div>
                                    <div class="text-success">+2.1%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity and Quick Stats -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-white">
                                    <h5 class="card-title mb-0">Recent Activity</h5>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="mb-1">New user registered</p>
                                                <small class="text-muted">John Doe</small>
                                            </div>
                                            <small class="text-muted">2 minutes ago</small>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="mb-1">Purchase completed</p>
                                                <small class="text-muted">Sarah Smith</small>
                                            </div>
                                            <small class="text-muted">15 minutes ago</small>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="mb-1">Settings updated</p>
                                                <small class="text-muted">Mike Johnson</small>
                                            </div>
                                            <small class="text-muted">1 hour ago</small>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="mb-1">New post created</p>
                                                <small class="text-muted">Emily Brown</small>
                                            </div>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-white">
                                    <h5 class="card-title mb-0">Quick Stats</h5>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <p class="text-muted">Chart placeholder - Add your preferred charting library</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Admin Panel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="nav flex-column">
            <a class="nav-link" href="#">
                <i class="fas fa-home me-2"></i>Dashboard
            </a>
            <a class="nav-link" href="#">
                <i class="fas fa-users me-2"></i>Users
            </a>
            <a class="nav-link" href="#">
                <i class="fas fa-chart-bar me-2"></i>Analytics
            </a>
            <a class="nav-link" href="#">
                <i class="fas fa-cog me-2"></i>Settings
            </a>
            <form style="margin: 0px; padding: 0px;" class=" d-inline nav-link" action="{{route('logout')}}" method="post">
                @csrf
                <button class=" nav-link text-primary"><i class="fa fa-sign-out me-2"></i> Logout</button>
            </form>
        </nav>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Date functionality
    document.addEventListener('DOMContentLoaded', function() {
        const currentDate = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('currentDate').textContent = currentDate.toLocaleDateString('en-US', options);
    });
</script>
@endsection
