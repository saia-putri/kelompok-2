@extends('pengunjung.mainapps')
@section('title')
    Home
@endsection
@section('content')
<section id="blog">
  <div class="container py-3">
  @foreach ($artikels as $Artikel)
    <div class="row mt-5 mb-5">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"> 
        <div class="col p-4 d-flex flex-column position-static">
        <h3 class="card-title">{{ $Artikel->judul_artikel }}</h3>
          <p class="card-text mb-auto">{{ $Artikel->isi_artikel }}</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" alt="" width="250" height="250">
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">{{ $Artikel->judul_artikel }}</h3>
          <p class="mb-auto">{{ $Artikel->isi_artikel }}</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
          Continue reading
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" alt="" width="250" height="250">
        </div>
      </div>

     </div>
    </div>
    @endforeach
  </div>
  </section>
@endsection