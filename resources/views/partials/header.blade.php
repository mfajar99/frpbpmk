{{-- @extends('layouts.main')
@section('container') --}}
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-sm-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li class="title"><span class="flaticon-energy"></span> trending-title</li>
                                    <li>Class property employ ancho red multi level mansion</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-date">
                                    <li><span class="flaticon-calendar"></span> +880166 253 232</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <h3 style="font-weight: bold">FRPB PAMEKASAN</h3>
                                {{-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> --}}
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Beranda</a></li>
                                        <li><a href="/disaster">Data Bencana</a></li>
                                        <li><a href="/member">Anggota</a></li>
                                        <li><a href="/posts">Berita</a></li>
                                        <li><a href="/agenda">Agenda</a></li>
                                        <li><a href="#">Profil</a>
                                            <ul class="submenu">
                                                @foreach ($profiles as $profile)
                                                    <li><a href="/profile/{{ $profile->id }}">{{ $profile->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/gallery">Galeri</a></li>
                                        <li><a href="/contact">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="main-menu header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                {{-- <ul class="header-social">
                                    <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul> --}}
                                <!-- Search Nav -->
                                {{-- <div class="nav-search search-switch">
                                    <i class="fa fa-search"></i>
                                </div> --}}
                                <ul id="navigation">
                                    @auth
                                        <li><a href="/profile">Halo, {{ auth()->user()->name }}</a>
                                            <ul class="submenu">
                                                <li><a href="/dashboard">DASHBOARD</a></li>
                                                <li>
                                                    <form action="/logout" method="post">
                                                        @csrf
                                                        <button style="border: none;  cursor: pointer;">
                                                            <i style="color: black; font-style: normal; padding-left: 5px; font-size: 15px; font-weight: 500;"
                                                                onmouseover="this.style.color='red'"
                                                                onmouseout="this.style.color='black'">LOGOUT</i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="/login">Login</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
{{-- @endsection --}}
