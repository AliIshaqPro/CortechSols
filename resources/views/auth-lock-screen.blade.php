<!doctype html>
<html lang="en">

<head>
    <!-- Include the title-meta partial -->
    @include('partials.title-meta', ['title' => 'Lock Screen page'])

    <!-- Include the head-css partial (for stylesheets) -->
    @include('partials.head-css')

    <!-- Add any custom CSS using Laravel's asset() helper -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Add any custom JavaScript using Laravel's asset() helper -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="home-btn">
                    <a href="{{ url('/') }}" class="text-white router-link-active">
                        <i class="fas fa-home h2"></i>
                    </a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">
                                    <div class="text-center">
                                        <a href="{{ url('index') }}">
                                            <img src="{{ asset('assets/images/logo-dark.png') }}" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Lock Screen</h5>
                                        <p class="text-muted">Enter your password to unlock the screen!</p>
                                    </div>

                                    <!-- Laravel Form -->
                                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                                        @csrf

                                        <!-- User Thumbnail -->
                                        <div class="user-thumb text-center mb-4 mt-4">
                                        <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="rounded-circle img-thumbnail avatar-md" alt="thumbnail">

                                            <h5 class="font-size-15 mt-3">James Raphael</h5>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{ __('Email') }}</label>
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="mb-3 form-check">
                                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                            <label for="remember_me" class="form-check-label text-muted">{{ __('Remember me') }}</label>
                                        </div>

                                        <!-- Forgot Password -->
                                        <div class="mb-3 text-end">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot your password?') }}</a>
                                            @endif
                                        </div>

                                        <!-- Login Button -->
                                        <div class="row mb-0">
                                            <div class="col-12 text-end">
                                                <x-primary-button class="btn btn-primary w-md waves-effect waves-light">
                                                    {{ __('Log in') }}
                                                </x-primary-button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Not you? Return <a href="{{ route('login') }}" class="fw-bold text-white">Sign In</a></p>
                            <p>© <script>
                                    document.write(new Date().getFullYear())
                                </script> Morvin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Scripts -->
    @include('partials.vendor-scripts')

    <!-- App JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>