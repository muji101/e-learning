{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Sinau</title>
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app.css') }}">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <ul class="nav nav-tabs flex justify-content-center fw-bold fs-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Teacher</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-dark" id="contact-tab" data-bs-toggle="tab" href="#contact"
                                    role="tab" aria-controls="contact" aria-selected="false">User</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">

                            <div class="col-md-7 col-sm-12 mx-auto">
                                <div class="card pt-4">
                                    <div class="card-body">
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('/images/undraw_working_late_pukg.svg') }}" height="48" class='mb-4'>
                                            <h3>Sign Up Teacher</h3>
                                            <p>Please fill the form to register.</p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" class="form-control"
                                                            name="name" value="{{ old('name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" id="email" class="form-control"
                                                            name="email" value="{{ old('email') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" id="password" class="form-control"
                                                            name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="password_confirmation">Retry Password</label>
                                                        <input type="password" id="password_confirmation" class="form-control"
                                                            name="password_confirmation">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="role" value="TEACHER">
                                                {{-- <div class="col-12">
                                                    <div class="form-group">
                                                        <label >Anda Adalah Sebagai ?</label>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text"
                                                                for="inputGroupSelect01">Options</label>
                                                            <select class="form-select" id="inputGroupSelect01" name="role">
                                                                <option selected disabled>Choose...</option>
                                                                <option value="TEACHER">Teacher</option>
                                                                <option value="USER">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
            
            
                                            <a href="{{ route('login') }}">Have an account? Login</a>
                                            <div class="clearfix">
                                                <button class="btn btn-primary float-end">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">

                            <div class="col-md-7 col-sm-12 mx-auto">
                                <div class="card pt-4">
                                    <div class="card-body">
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('/images/undraw_working_late_pukg.svg') }}" height="48" class='mb-4'>
                                            <h3>Sign Up User</h3>
                                            <p>Please fill the form to register.</p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" class="form-control"
                                                            name="name" value="{{ old('name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" id="email" class="form-control"
                                                            name="email" value="{{ old('email') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" id="password" class="form-control"
                                                            name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="password_confirmation">Retry Password</label>
                                                        <input type="password" id="password_confirmation" class="form-control"
                                                            name="password_confirmation">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="role" value="USER">

                                                {{-- <div class="col-12">
                                                    <div class="form-group">
                                                        <label >Anda Adalah Sebagai ?</label>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text"
                                                                for="inputGroupSelect01">Options</label>
                                                            <select class="form-select" id="inputGroupSelect01" name="role">
                                                                <option selected disabled>Choose...</option>
                                                                <option value="TEACHER">Teacher</option>
                                                                <option value="USER">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
            
            
                                            <a href="{{ route('login') }}">Have an account? Login</a>
                                            <div class="clearfix">
                                                <button class="btn btn-primary float-end">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>

    </div>
    <script src="{{ asset('dist/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>

    <script src="{{ asset('dist/assets/js/main.js') }}"></script>
</body>

</html>