<!doctype html>
<html lang="en">

<head>
   
    @include("partials.title-meta", ["title" => "Register page"])
    @include("partials.head-css")
</head>

<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="home-btn">
                    <a href="/" class="text-white router-link-active">
                        <i class="fas fa-home h2"></i>
                    </a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">
                                    <div class="text-center">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('assets/images/logo-dark.png') }}" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Free Register</h5>
                                        <p class="text-muted">Get your free Morvin account now.</p>
                                    </div>

                                    <!-- Laravel Register Form -->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{ __('Name') }}</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                                            @error('name')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{ __('Email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            @error('password')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                            @error('password_confirmation')
                                                <div class="mt-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Register Button -->
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __('Register') }}</button>
                                        </div>

                                    </form>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Morvin <a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-bold text-white"> Login </a></p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Morvin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Include vendor scripts --}}
    @include("partials.vendor-scripts")
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
