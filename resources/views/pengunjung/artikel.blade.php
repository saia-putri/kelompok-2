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
        <div class="col-auto d-none d-lg-block mt-3 mb-3">
          <img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" alt="" width="100%">
        </div>
          <p class="card-text mb-auto">{{ $Artikel->isi_artikel }}</p>
        </div>
        
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"> 
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="card-title">{{ $Artikel->judul_artikel }}</h3>
        <div class="col-auto d-none d-lg-block mt-3 mb-3">
          <img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" alt="" width="100%">
        </div>
          <p class="card-text mb-auto">{{ $Artikel->isi_artikel }}</p>
        </div>
        
      </div>
    </div>

     </div>
    </div>
    @endforeach
  </div>
  </section>
@endsection