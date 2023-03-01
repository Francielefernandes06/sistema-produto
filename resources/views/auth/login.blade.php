@extends('layouts.guest')

@section('content')
    <section>

        <div class="container h-100 d-flex justify-content-center align-content-center align-items-center">
            <div class="row justify-content-center align-items-center">


                <div class="col-md-6 d-flex justify-content-center align-items-center " style="height: 100vh;">

                    <div class="card d-flex justify-content-center align-items-center w-100"
                        style="border-radius: 50px;width: 21rem;height: 70%;padding: 1rem; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <h1 class="h1">Login</h1>
                        <div class="card-body w-100"
                            style="display: flex;width: 100%;justify-content: center;align-items: center;">
                            <form method="POST" action="{{ route('login') }}" style="width: 90%;">
                                @csrf

                                <div>
                                    <x-label class="fs-5" for="email" value="{{ __('Email') }}" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username"
                                        placeholder="Type your e-mail" />
                                    @error('email')
                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <x-label class="fs-5" for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="current-password" placeholder="Type your password" />
                                    @error('password')
                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="block mt-4 d-flex justify-content-between">

                                    <a lcass="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('register') }}">Don't have an account? Register</a>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}

                                    <button
                                        class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-cyan-700">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="height: 100vh;display: flex;">
                    <img class="img-login" src="{{ asset('/img/login.png') }}" alt="Image">
                </div>
            </div>
        </div>

    </section>
@endsection
