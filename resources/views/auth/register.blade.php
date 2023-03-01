@extends('layouts.guest')

@section('content')
    <section>

        <div class="container h-100 d-flex justify-content-center align-content-center align-items-center">
            <div class="row justify-content-center" id='content-register'>
                <div class="col-md-6 " style="height: 100vh ;display: flex; ">
                    <img class="img-register" src="{{ asset('/img/login.png') }}" alt="Image">
                </div>

                <div class="col-md-6 d-flex justify-content-center align-items-center">
            
                    <div class="card d-flex justify-content-center align-items-center w-100"
                        style="border-radius: 50px;width: 21rem;padding: 1rem; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" id="card-register">
                        <h1 class="h1">Register</h1>
                        <div class="card-body w-100"
                            style="display: flex;width: 100%;justify-content: center;align-items: center;">
                            <form method="POST" action="{{ route('register') }}" style="width: 90%;">
                                @csrf

                                <div>
                                    <x-label class="fs-5" for="name" value="{{ __('Name') }}" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name"
                                        placeholder="Enter your full name " />
                                </div>

                                <div class="mt-4">
                                    <x-label class="fs-5" for="email" value="{{ __('Email') }}" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" placeholder="Type your e-mail" />
                                </div>

                                <div class="mt-4">
                                    <x-label class="fs-5" for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="new-password" placeholder="Type your password" />
                                </div>

                                <div class="mt-4">
                                    <x-label class="fs-5" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm your password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' =>
                                                            '<a target="_blank" href="' .
                                                            route('terms.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Terms of Service') .
                                                            '</a>',
                                                        'privacy_policy' =>
                                                            '<a target="_blank" href="' .
                                                            route('policy.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Privacy Policy') .
                                                            '</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">

                                    <a lcass="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">Already registered?</a>

                                    <button class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-cyan-700"">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
