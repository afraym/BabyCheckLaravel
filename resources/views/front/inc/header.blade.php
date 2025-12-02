<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>


<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">

<title>BabyCheck A&F</title>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{ asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css">



<link id="pagestyle" href="{{ asset('assets/css/material-kit.css?v=3.0.3')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">


</head>

<body class="index-page bg-gray-200 rtl ">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" title="Designed and Coded A&F" data-placement="bottom" target="_blank">
     BabyCheck
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item px-3">
          <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li class="nav-item px-3">
          <a href="/verify" class="nav-link {{ request()->is('verify') ? 'active' : '' }}">Verify product</a>
        </li>
        <li class="nav-item px-3">
          <a href="#about" class="nav-link">About</a>
        </li>
        <li class="nav-item px-3">
          <a href="#contact" class="nav-link">Contact</a>
        </li>
        @auth
        <li class="nav-item px-3 {{ request()->routeIs('batches.index') ? 'active' : '' }}">
          <a href="{{ route('batches.index') }}" class="nav-link">Batches</a>
        </li>
        <li class="nav-item px-3 {{ request()->routeIs('batches.create') ? 'active' : '' }}">
          <a href="{{ route('batches.create') }}" class="nav-link">New Batch</a>
        </li>
        @endauth
      </ul>
      <ul class="navbar-nav ms-auto">
        @guest
        <li class="nav-item px-3">
          <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0 {{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item px-3">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-sm bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Logout</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<header class="header-2">
 
    <!-- <span class="mask bg-gradient-primary opacity-4"></span> -->
@if (request()->is('admin/*'))

<div class=" min-vh-75 relative" style="min-height: 8vh !important;">



@else
 <div class=" min-vh-75 relative" >
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>BabyCheck</h5>
        <p>The most accurate pregnancy test for your peace of mind.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Easy to Use</h5>
        <p>Simple, clear results in just 3 minutes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/03.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>99.9% Accuracy</h5>
        <p>Results you can trust from the earliest days.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endif
  </div>
  </div>
</header>