@extends('auth.clean')
@section('title','Login')
@section('additional')
  <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
@endsection

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-primary position-relative">
        <!-- Floating Tech Shapes -->
        <div class="floating-tech-shapes">
            <div class="shape hexagon-1"></div>
            <div class="shape hexagon-2"></div>
            <div class="shape line-1"></div>
            <div class="shape line-2"></div>
            <div class="shape triangle-1"></div>
            <div class="shape triangle-2"></div>
        </div>

        <div class="login-container">
            <div class="logo">
                <img src="https://ucarecdn.com/2ff788e9-cc5f-4653-b931-c59033911610/-/format/auto/" alt="BITS Logo">
            </div>
            <form id="loginForm" method="post" action="{{ route('login') }}">
                @csrf

                {{-- Email Field --}}
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email"
                        value="{{ old('email') }}" required>
                    
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password Field --}}
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input"
                        placeholder="Enter your password" required>
                    
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                {{-- General Authentication Error --}}
                @if(session('error'))
                    <div class="error-message">{{ session('error') }}</div>
                @endif

                <button type="submit" id="submitButton" class="submit-button">
                    Sign In
                </button>

                <a href="/account/forgot-password" class="forgot-password">Forgot Password?</a>
                <div class="signup-link">
                    Don't have an account?
                    <a href="{{ route('register') }}">Sign up</a>
                </div>
            </form>
        </div>
    </div>
@endsection
