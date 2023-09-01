<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- css local -->
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
  </head>
  
  <body>
    <!-- ini navbar1 -->
    <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
      <img src="/img/pct.opi.jpg" alt=""  width="50" height="50" >
        <span class="fs-4 pct">PalComTech.Opi NEWS</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
    </header>
    <!-- ini navbar2 -->
    <nav class="py-2 bg-body-tertiary border-bottom sticky-top">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Beranda</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Artikel</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Pengumuman</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Tentang Kami</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Sign up</a></li>
      </ul>
    </div>
    </nav>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <!-- header bg -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/campus.png" alt=""  width="100%">
      </div>

      <div class="carousel-item">
        <img src="/img/poster.jpg" alt=""  width="100%">
      </div>

      <div class="carousel-item">
        <img src="/img/poster2.jpg" alt=""  width="100%">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
  
     <!-- ini konten -->
     @yield('content')

    <!-- ini footer -->
    <footer class="py-3 bg-pct">
    <div class="container">
        <div class="text-white">
            Copyright &copy by.kelompok-2
        </div>
        <div class="text-white">
            PalComTech.Opi NEWS
        </div>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>