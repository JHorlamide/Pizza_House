@extends('layout.layout')

@section('welcome_page')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img src="/img/pizza_logo.jpeg" alt="pizza house logo" id="pizza_house">
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                {{-- Title --}}
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    <h1 class='title'>The North's Best Pizza House</h1>
                    {{-- Message After form submition --}}
                    <p class="mssg">{{ session('msg') }}</p>
                </div>

                {{-- Place Order --}}
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="/pizzas/create" class="ml-1 underline">
                            Order a Pizza
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
