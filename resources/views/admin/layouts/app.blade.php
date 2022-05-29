<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css') }}/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-3 me-0 px-3" href="#">
    <img src="{{ asset('images/otomax.jpg') }}" id="icon" alt="User Icon" height="50"/>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    <li class="nav-item">
      <a class="nav-link px-3" style="font-size: 20px !important;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
      </form>
    </div>
  </div>
</header>

<div class="container-fluid pt-5">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-3 pt-3 mt-5 d-md-block bg-light sidebar collapse" style="background: #ffd884 !important;">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin.indexAdmin') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin.indexProduk') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.indexMerk') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Merk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.indexKelompokIndikator') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Kelompok Indikator
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.indexIndikator') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Indikator
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.indexRules') }}" style="font-size: 20px;">
              <span data-feather="aperture" style="height: 24px; width: 24px;"></span>
              Rule
            </a>
          </li>
        </ul>
      </div>
    </nav>
    @yield('content')
  </div>
</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

      
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="{{ asset('js') }}/dashboard.js"></script>
  </body>
</html>