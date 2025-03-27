@extends('layouts.app')
@section('title', 'Dashboard')

@section('styles')
    
@endsection

@section('nav')
    <aside
        class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg z-50 transform transition-transform duration-300 ease-in-out"
        id="sidebar">
        <div class="flex flex-col h-full">
            <!-- Logo Section -->
            <div class="flex items-center justify-center p-4 border-b">
                <img src="https://ucarecdn.com/c630466c-0578-4d87-8f48-28e3f95cd5f4/-/format/auto/" alt="BITS Logo"
                    class="h-12 w-auto">
            </div>

            <!-- Navigation Links -->
            <nav class="flex-grow p-4">
                @auth
                    <div class="space-y-2">
                        <a href="{{ route('user.home') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition">
                            Home
                        </a>
                        <a href="{{ route('about.us') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition">
                            About Us
                        </a>

                        <form action="{{ route('logout') }}" method="post" class="w-full">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-blue-600 hover:bg-gray-100 rounded-md transition">
                                Logout | {{ auth()->user()->name }}
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-y-2">
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition">
                            Register
                        </a>
                        <a href="{{ route('about.us') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md transition">
                            About Us
                        </a>
                    </div>
                @endguest
            </nav>

            <!-- Optional: Close Sidebar Button -->
            <button id="closeSidebar" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </aside>

    <!-- Overlay to close sidebar when clicking outside -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black opacity-0 z-40 hidden transition-opacity duration-300"></div>

@endsection

@section('content')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime unde voluptatum corporis officia enim dignissimos neque ipsum laborum voluptas voluptatibus voluptates, aliquam nostrum cumque incidunt ducimus illum ratione pariatur at consequatur vero laboriosam repellat sed sint fugit? Libero accusamus at pariatur soluta amet odit distinctio nulla alias! Minima voluptatem animi dignissimos incidunt sit officia facilis veritatis commodi, harum nisi atque, numquam delectus sunt quae fuga obcaecati, maiores sequi distinctio. Totam enim quia at consequuntur labore! Ratione perspiciatis voluptate pariatur voluptatum optio suscipit, labore inventore aspernatur mollitia sapiente ipsa ut excepturi autem, sequi aperiam. Mollitia, officia suscipit quia ratione dolorem blanditiis.
@endsection

@section('scripts')
    
@endsection