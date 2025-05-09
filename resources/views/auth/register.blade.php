<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Login | Porsche Kanban</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/assets') }}/images/ico.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('template/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('template/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('template/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <style>
            body {
                background: url("{{ asset('template/assets/images/login.jpg') }}") no-repeat center center fixed;
                background-size: cover;
                margin: 0;
                padding: 0;
                position: relative;
                font-family: sans-serif;
            }
        </style>
    </head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Register</h5>
                                <p class="text-white-50">Fill Up Form</p>
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{ asset('template/assets') }}/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="mt-4" method="POST" action="{{ url('/register') }}">
                                    @csrf
                                    @error('login')

                                        <div class="alert alert-danger mb-2" role="alert">
                                            {{ $message }}.
                                        </div>
                                    @enderror

                                    <div class="mb-3">
                                        <label class="form-label" for="email">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter full name">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" name="password" required placeholder="Enter password">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Re-Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-6">

                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </div>

                                    <div class="mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="{{ url('/login') }}"><i class="mdi mdi-account"></i> Login Here</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="/register" class="fw-medium text-primary"> Register now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Monra. Crafted with <i class="mdi mdi-heart text-danger"></i> by RCrizt</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('template/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('template/assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('template/assets') }}/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('template/assets') }}/js/app.js"></script>

</body>

</html>
