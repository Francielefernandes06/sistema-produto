@extends('layouts.guest')

@section('content')

<section>

    <div class="container h-100 d-flex justify-content-center align-content-center align-items-center">
        <div class="row justify-content-center align-items-center">

            <div class="form-container">
                <h4 class="form-heading">Login</h4></h4>
                <p class="signIn-text">Don't have an account?
                  <a href="{{route('register')}}">Register</a></p>
          <form method="POST" action="{{ route('login') }}" class="login-form">
            
                @csrf
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Type your e-mail"/>

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Type your password"/>

              <button class="signup-btn">
                {{ __('Log in') }}
            </button>
          </form>
            </div>

            {{-- <div class="col-md-6 d-flex justify-content-center align-items-center " style="height: 100vh;">

                <div class="card d-flex justify-content-center align-items-center w-100" style="border-radius: 50px;width: 21rem;height: 70%;padding: 1rem; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <h1 class="h1">Login</h1>
                    <div class="card-body w-100" style="display: flex;width: 100%;justify-content: center;align-items: center;" >
                        <form method="POST" action="{{ route('login') }}" style="width: 90%;">
                            @csrf

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Type your e-mail"/>
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Type your password"/>
                            </div>

                            <div class="block mt-4 d-flex justify-content-between">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                                <a lcass="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('register')}}">Don't have an account? Register</a>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <button class="ml-4 btn btn-outline-primary">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            <div class="col-md-6 " style="height: 100vh;display: flex;">
                <img src="{{asset('/img/login.png')}}" alt="Image">
            </div>
        </div>
    </div>

</section>

@endsection
