<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nairobi.css?v=1.0.0') }}">

</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default sidebar-dark navs-gradient sidebar-mini sidebar-hover ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="dashboard/index.html" class="navbar-brand dis-none">
                <div class="logo">
                    <h3>M</h3>
                </div>
                <div class="logo-hover">
                    <p>MT food</p>
                </div>
            </a>
            <div class="sidebar-toggle d-xl-none" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body p-0 data-scrollbar">
            <div class="collapse navbar-collapse" id="sidebar">
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="{{ __(route('dashboard')) }}">
                            <i class="icon">
                                <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    @can('admin')
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button"
                            aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z"
                                        stroke="currentColor" stroke-width="1.42857" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </i>
                            <span class="item-name">Utilizadores</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ __(route('user.add')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Criar utilizador</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ __(route('user.list')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Lista de utilizadores</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-stock" role="button"
                            aria-expanded="false" aria-controls="sidebar-stock">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                            </i>
                            <span class="item-name">Entrada de produtos</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-stock" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link @if(url()->current() == route('stock.in')) active @endif"
                                    href="{{ __(route('stock.in')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Registar nova entrada</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(url()->current() == route('stock.in.view')) active @endif"
                                    href="{{ __(route('stock.in.view')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Visualizar entradas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-stock-in" role="button"
                            aria-expanded="false" aria-controls="sidebar-stock">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-dash" viewBox="0 0 16 16">
                                    <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                            </i>
                            <span class="item-name">Saída de produtos</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-stock-in" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ __(route('stock.out')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Registar saída</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ __(route('stock.out.view')) }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                            fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Visualizar saídas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ __(route('soldout')) }}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-basket3" viewBox="0 0 16 16">
                                    <path
                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6z" />
                                </svg>
                            </i>
                            <span class="item-name">Produtos esgotados</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="dashboard/index.html" class="navbar-brand">
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <div class="header-logo d-xl-none">
                        <a href="dashboard/index.html" class="navbar-brand dis-none">
                            <svg width="35" viewBox="0 0 52 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="7" y="5" width="11.4716" height="48" fill="#9C2224" />
                                <rect x="33.5283" y="5" width="11.4716" height="48" fill="#9C2224" />
                                <path d="M7 5H18.4716L44.9997 53H33.5281L7 5Z" fill="#9C2224" />
                            </svg>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1 mt-2"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">

                            <li class="nav-item dropdown">
                                <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('assets/images/avatars/01.png') }}" alt="User-Profile"
                                        class="img-fluid avatar avatar-50 avatar-rounded">
                                    <div class="caption ms-3 ">
                                        <h6 class="mb-0 caption-title">{{ __(Auth::user()->name.'
                                            '.Auth::user()->last_name) }}</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li class="border-0"><a class="dropdown-item"
                                            href="{{ __(route('user.update', Auth::user()->id)) }}">Profile</a></li>
                                    <li class="border-0">
                                        <hr class="m-0 dropdown-divider">
                                    </li>
                                    <li class="border-0"><a class="dropdown-item"
                                            href="{{ __(route('admin.logout')) }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!--Nav End-->
        </div>

        @yield('content')

        <footer class="footer">
            <div class="footer-body">
                <div class="right-panel">
                    ©
                    Bazuca
                    <span class="text-gray">
                        <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                fill="currentColor"></path>
                        </svg>
                </div>
            </div>
        </footer>
    </main>

    <!-- Wrapper End-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- offcanvas start -->

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
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('vendor/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('vendor/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
</body>

</html>