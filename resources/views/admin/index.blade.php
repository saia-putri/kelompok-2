@extends('admin.mainapps')
@section('title')
    Home
@endsection
@section('content')
<section id="header" class="header">
</section>

<section>
<div class=container>
  <div class="mimin py-3">
    <marquee behavior="" direction=""><h1>Selamat Datang Mimin</h1></marquee>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-3 mb-5">
    <div class="col">
    <div class="card text-white card1" style="max-width: 100%;">
      <div class="card-header">Data Artikel</div>
      <div class="card-body">
        <h1 class="card-title angka">2</h1>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="card text-white card1" style="max-width: 100%;">
      <div class="card-header">Data Pengumuman</div>
      <div class="card-body">
        <h1 class="card-title angka">2</h1>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="card text-white card1" style="max-width: 100%;">
      <div class="card-header">Data User</div>
      <div class="card-body">
        <h1 class="card-title angka">2</h1>
      </div>
    </div>
    </div>
  </div>
</div>
</section>
@endsection