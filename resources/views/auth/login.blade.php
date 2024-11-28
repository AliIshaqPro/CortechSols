<!doctype html>
<html lang="en">

<head>
    @include('partials.title-meta', ['title' => 'Login page'])
    @include('partials.head-css')
</head>

<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn">
                    <a href="/" class="text-white router-link-active"><i class="fas fa-home h2"></i></a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">

                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" height="22" alt="logo">
                                        </a>

                                        
                                    </div>

                                    
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-4 pt-2">
                                            @csrf

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
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                                    <label for="remember_me" class="form-label">{{ __('Remember me') }}</label>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('Log In') }}</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted">
                                                        <i class="mdi mdi-lock me-1"></i> Forgot your password?
                                                    </a>
                                                @endif
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

    @include("partials.vendor-scripts")
    <script src="assets/js/app.js"></script>

</body>

</html>
