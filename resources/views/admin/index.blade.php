@extends('admin.mainapps')
@section('title')
    Home
@endsection
@section('content')
<section id="header" class="header">
<div class="container mb-2 mt-2 mimin">
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/PalCom.jpg" alt=""  width="100%">
      </div>

      <div class="carousel-item">
        <img src="/img/palcom1.jpg" alt=""  width="100%">
      </div>

      <div class="carousel-item">
        <img src="/img/palcom2.jpg" alt=""  width="100%">
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
</div>
<marquee behavior="" direction=""><h1>Selamat Datang Mimin</h1></marquee>
</section>
<section>
  <div class=container>
<div class="row row-cols-1 pt-5 row-cols-md-3 g-3 mb-5">
<div class="col">
<div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Data Artikel</div>
  <div class="card-body">
    <h1 class="card-title">2</h1>
  </div>
</div>
</div>
<div class="col">
<div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Data Pengumuman</div>
  <div class="card-body">
    <h1 class="card-title" class="angka">2</h1>
  </div>
</div>
</div>
<div class="col">
<div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Data User</div>
  <div class="card-body">
    <h1 class="card-title">2</h1>
  </div>
</div>
</div>
</div>
</div>
</section>
@endsection