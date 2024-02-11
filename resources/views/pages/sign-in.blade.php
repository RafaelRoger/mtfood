<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Please sign in</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ url('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nairobi.css?v=1.0.0') }}">
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <div>
        <div class="wrapper">
            <section class="vh-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-6">
                            <img src="{{ url('assets/images/pages/hamburguer.png') }}" class="bottom-img1" alt="images">
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="auth-form">
                                        <h2 class="text-center mb-4">Login</h2>

                                        <form method="post" action="{{ __(route('auth.login')) }}">
                                            @csrf
                                            <p class="text-center">Introduza o seu email e a sua palavra-passe para
                                                aceder à conta.</p>
                                            @if($errors->any() || session('message'))
                                            <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show"
                                                role="alert">
                                                @if($errors->any())
                                                <x-validation-errors class="mb-4" :errors="$errors" />
                                                @else
                                                {{ __(session('message')) }}
                                                @endif
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                            @endif
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="username" class="form-control" id="email"
                                                    aria-describedby="email" placeholder=" ">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Senha</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" aria-describedby="password" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-center flex-wrap">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="Remember">
                                                        <label class="form-check-label" name="remember"
                                                            for="Remember">Lembra de mim</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <a href="#page-forgot-password.html">Esqueceu sua senha?</a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!-- Backend Bundle JavaScript -->
    <script src="{{ url('assets/js/libs.min.js') }}"></script>
    <!-- widgetchart JavaScript -->
    <script src="{{ url('assets/js/charts/widgetcharts.js') }}"></script>
    <!-- dashboard JavaScript -->
    <script src="{{ url('assets/js/charts/dashboard.js') }}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{ url('assets/js/fslightbox.js') }}"></script>
    <!-- app JavaScript -->
    <script src="{{ url('assets/js/app.js') }}"></script>
    <!-- apexchart JavaScript -->
    <script src="{{ url('assets/js/charts/apexcharts.js') }}"></script>
    <!-- countdown JavaScript -->
    <script src="{{ url('assets/js/countdown.js') }}"></script>
</body>

</html>