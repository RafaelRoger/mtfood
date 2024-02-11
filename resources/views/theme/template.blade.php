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
                    <svg width="35" viewBox="0 0 52 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="7" y="5" width="11.4716" height="48" fill="#9C2224" />
                        <rect x="33.5283" y="5" width="11.4716" height="48" fill="#9C2224" />
                        <path d="M7 5H18.4716L44.9997 53H33.5281L7 5Z" fill="#9C2224" />
                    </svg>
                </div>
                <div class="logo-hover">
                    <svg width="125" viewBox="0 0 362 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="362" height="108" fill="url(#paint0_linear)" />
                        <path
                            d="M38.8 25H50.8L64.8 58.6L66.24 62.12L66.88 63.8H67.2L66.96 62.12C66.8533 61.48 66.8 60.3067 66.8 58.6V25H78V81H66L52 47.4L50.56 43.88L49.92 42.2H49.6L49.76 43.88C49.92 45.96 50 47.1333 50 47.4V81H38.8V25ZM86.0125 81L102.413 25H115.213L131.613 81H120.413L116.813 68.2H100.813L97.2125 81H86.0125ZM114.813 61L110.013 44.2C109.853 43.6133 109.693 42.92 109.533 42.12C109.373 41.2667 109.266 40.6533 109.213 40.28L108.973 38.2H108.653L108.332 40.28C108.226 40.76 108.093 41.4267 107.933 42.28C107.826 43.08 107.719 43.72 107.613 44.2L102.813 61H114.813ZM139.581 81V25H150.781V81H139.581Z"
                            fill="white" />
                        <path
                            d="M164.347 25H179.547C186.96 25 192.4 26.52 195.867 29.56C199.387 32.6 201.147 37.08 201.147 43C201.147 48.4933 199.414 52.8133 195.947 55.96C194.4 57.3467 192.667 58.36 190.747 59L204.347 81H191.547L179.947 61H175.547V81H164.347V25ZM179.547 53.8C183.227 53.8 185.867 52.9733 187.467 51.32C189.12 49.6133 189.947 46.84 189.947 43C189.947 39.16 189.12 36.4133 187.467 34.76C185.867 33.0533 183.227 32.2 179.547 32.2H175.547V53.8H179.547ZM230.716 81.8C224.049 81.8 218.849 79.48 215.116 74.84C211.382 70.1467 209.516 62.8667 209.516 53C209.516 43.1333 211.382 35.88 215.116 31.24C218.849 26.5467 224.049 24.2 230.716 24.2C237.382 24.2 242.582 26.5467 246.316 31.24C250.049 35.88 251.916 43.1333 251.916 53C251.916 62.8667 250.049 70.1467 246.316 74.84C242.582 79.48 237.382 81.8 230.716 81.8ZM230.716 74.6C233.649 74.6 236.049 72.9467 237.916 69.64C239.782 66.3333 240.716 60.7867 240.716 53C240.716 45.2133 239.782 39.6667 237.916 36.36C236.049 33.0533 233.649 31.4 230.716 31.4C227.782 31.4 225.382 33.0533 223.516 36.36C221.649 39.6667 220.716 45.2133 220.716 53C220.716 60.7867 221.649 66.3333 223.516 69.64C225.382 72.9467 227.782 74.6 230.716 74.6ZM262.706 25H279.506C285.853 25 290.626 26.3067 293.826 28.92C297.08 31.5333 298.706 35.0267 298.706 39.4C298.706 43.72 297.026 47.0267 293.666 49.32C292.173 50.3333 290.52 51.0267 288.706 51.4C290.893 51.7733 292.893 52.5467 294.706 53.72C296.413 54.84 297.826 56.36 298.946 58.28C300.12 60.2 300.706 62.5733 300.706 65.4C300.706 75.8 293.64 81 279.506 81H262.706V25ZM279.506 48.2C281.906 48.2 283.826 47.48 285.266 46.04C286.76 44.5467 287.506 42.6 287.506 40.2C287.506 37.8 286.76 35.88 285.266 34.44C283.826 32.9467 281.906 32.2 279.506 32.2H273.906V48.2H279.506ZM279.506 73.8C286.173 73.8 289.506 70.7333 289.506 64.6C289.506 58.4667 286.173 55.4 279.506 55.4H273.906V73.8H279.506ZM311.534 81V25H322.734V81H311.534Z"
                            fill="#9C2224" />
                        <defs>
                            <linearGradient id="paint0_linear" x1="-0.853773" y1="54.7606" x2="362.854" y2="54.7605"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#9C2224" />
                                <stop offset="0.687864" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
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
                            <span class="item-name">Users</span>
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

                        <a class="nav-link" href="{{ __(route('report.view', 'week')) }}">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path
                                        d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                                    <path
                                        d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </i>
                            <span class="item-name">Relatório de saídas</span>

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
                                <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                                    <svg width="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M14.3889 20.8572C13.0247 22.3719 10.8967 22.3899 9.51953 20.8572"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                </a>
                                <div class="sub-drop dropdown-menu iq-noti dropdown-menu-end p-0"
                                    aria-labelledby="notification-drop">
                                    <div class="card bg-transparent shadow-none m-0">
                                        <div class="card-header bg-transparent d-flex justify-content-between">
                                            <div class="header-title">
                                                <p class="fs-6 ">New notifications.</p>
                                            </div>
                                            <div class="header-title">
                                                <p class="fs-6">Mark all</p>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <img src="assets/images/utilities/05.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded" alt="img51">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Successfull transaction</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">15 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img src="assets/images/utilities/03.png"
                                                            class="img-fluid avatar avatar-30 avatar-rounded"
                                                            alt="img52">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">4 of Pending Transactions!</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">30 mins ago</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/utilities/04.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded" alt="img53">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Cancelled order</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">55 mins ago</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/utilities/05.png"
                                                        class="img-fluid avatar avatar-30 avatar-rounded" alt="img54">
                                                    <div class="w-100 ms-3">
                                                        <h6 class="mb-0 ">New game arrivals</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">14 Mar</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="bg-primary count-mail"></span>
                                </a>
                                <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                                    <div class="card bg-transparent shadow-none m-0">
                                        <div class="card-header bg-transparent d-flex justify-content-between py-3">
                                            <div class="header-title">
                                                <p class="mb-0 text-white">Our Latest News</p>
                                            </div>
                                        </div>
                                        <div class="card-body p-0 ">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex ">
                                                    <div class="">
                                                        <img src="assets/images/coins/02.png"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img55">
                                                    </div>
                                                    <div class=" w-100 ms-3">
                                                        <h6 class="mb-0 ">Bitcoin</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the
                                                            printing and typesetting industry. </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <img src="assets/images/coins/03.png"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img56">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Ethereum</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the
                                                            printing and typesetting industry. </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <img src="assets/images/coins/06.png"
                                                            class="img-fluid avatar avatar-50 avatar-rounded"
                                                            alt="img57">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Litecoin</h6>
                                                        <small class="float-left font-size-12">Lorem Ipsum is simply
                                                            dummy text of the
                                                            printing and typesetting industry.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('assets/images/avatars/01.png') }}" alt="User-Profile"
                                        class="img-fluid avatar avatar-50 avatar-rounded">
                                    <div class="caption ms-3 ">
                                        <h6 class="mb-0 caption-title">{{ __(Auth::user()->name.' '.Auth::user()->last_name) }}</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li class="border-0"><a class="dropdown-item"
                                            href="dashboard/app/user-profile.html">Profile</a></li>
                                    <li class="border-0">
                                        <hr class="m-0 dropdown-divider">
                                    </li>
                                    <li class="border-0"><a class="dropdown-item"
                                            href="dashboard/auth/sign-in.html">Logout</a>
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