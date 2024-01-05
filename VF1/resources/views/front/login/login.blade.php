<!DOCTYPE html>
<html lang="en">
    
    <!-- head Section -->
    @include('front.partials.head')

<body>
    <!-- Loading Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>

    <!-- Navbar Section -->
    <div class="container-fluid position-relative p-0">
        @include('front.partials.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Login</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/login" class="h5 text-white">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Full Screen Search Section -->
    @include('front.partials.screen_search')

    <!-- Login Section -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="position-relative h-100">
                        <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/IMG_0800.JPG') }}" style="object-fit: contain; max-height: 90%;">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h1 class="mb-0">Login</h1>
                    </div> 
                    <!-- Login Form -->
                    <form action="{{ url('/admin.login') }}" method="post">
                        @csrf
                        <!-- Existing form fields -->
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <input class="input" type="text" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="input-div two">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <input class="input" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <input type="submit" class="btns" value="Login">
                    </form>
                </div>
            </div><br>
        </div>
    </div>

    <!-- Footer Section -->
    @include('front.partials.footer')

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Include Scripts -->
    @include('front.partials.scripts')
</body>

</html>
