@extends('auth.clean')
@section('title','Register')
@section('additional')
    <link rel="stylesheet" href="{{asset('styles/register.css')}}">
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-primary" >
    <div class="bg-white rounded shadow-lg p-4 p-md-5 w-100" style="max-width: 600px;">
        <!-- Floating Tech Shapes -->
        <div class="floating-tech-shapes">
          <div class="shape hexagon-1"></div>
          <div class="shape hexagon-2"></div>
          <div class="shape line-1"></div>
          <div class="shape line-2"></div>
          <div class="shape triangle-1"></div>
          <div class="shape triangle-2"></div>
        </div>
        <div class="text-center ">
            <img 
                src="https://ucarecdn.com/2ff788e9-cc5f-4653-b931-c59033911610/-/format/auto/" 
                alt="BITS Logo" 
                class="img-fluid" 
                style="max-height: 80px;"
            />
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-1">
                <label class="form-label">Full Name</label>
                <input 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    placeholder="Enter your full name" 
                    required
                    name="name"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-1">
                <label class="form-label">Email Address</label>
                <input 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    placeholder="Enter your email" 
                    required
                    name="email"
                    value="{{ old('email') }}"
                />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-1">
                <label class="form-label">Password</label>
                <input 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    placeholder="Create a password" 
                    required
                    name="password"
                />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-1">
                <label class="form-label">Confirm Password</label>
                <input 
                    type="password" 
                    class="form-control @error('password_confirmation') is-invalid @enderror" 
                    placeholder="Confirm your password" 
                    required
                    name="password_confirmation"
                />
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button 
                type="submit" 
                class="btn btn-primary w-100"
            >
                Create Account
            </button>

            <div class="text-center mt-3 text-primary">
                Already have an account? <a href="{{ route('login') }}" class="text-primary"> Sign in</a>
            </div>
        </form>
    </div>
</div>
@endsection