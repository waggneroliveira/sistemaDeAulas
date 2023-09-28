@extends('Admin.core.auth')
@section('content')
    <div class="login auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <div class="auth-logo">
                            <a href="index.html" class="logo logo-dark text-center">
                                <span class="authl logo-lg">
                                    <img src="{{asset('Admin/assets/images/whi.png')}}" alt="" height="22">
                                    <h2>WHI <span>Web de alta inspiração</span></h2>
                                </span>
                            </a>
        
                            <a href="index.html" class="logo logo-light text-center">
                                <span class="authl logo-lg">
                                    <img src="{{asset('Admin/assets/images/whit.png')}}" alt="" height="22">
                                    <h2>WHI - Web de alta inspiração</h2>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="text-center w-75 m-auto">
                        <img src="../assets/images/users/user-1.jpg" height="88" alt="user-image" class="rounded-circle shadow">
                        <h4 class="text-dark-50 text-center mt-3">Hi ! Geneva </h4>
                        <p class="text-muted mb-4">Enter your password to access the admin.</p>
                    </div>

                    <!-- form -->
                    <form action="{{route('password.update')}}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                        </div>

                        <div class="text-center d-grid">
                            <button class="btn btn-primary" type="submit"> Log In </button>
                        </div>
                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Not you? return <a href="auth-login-2.html" class="text-muted ms-1"><b>Sign In</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center" style="background-image: url({{asset('Admin/assets/images/bg-login.jpeg')}})">
            <div class="auth-user-testimonial">
                {{-- <h2 class="mb-3 text-white">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> I've been using your theme from the previous developer for our web app, once I knew new version is out, I immediately bought with no hesitation. Great themes, good documentation with lots of customization available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>
                </p>
                <h5 class="text-white">
                    - Fadlisaad (Ubold Admin User)
                </h5> --}}
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
@endsection