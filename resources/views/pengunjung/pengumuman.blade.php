@extends('pengunjung.mainapps')
@section('title')
    Home
@endsection
@section('content')
<section id="blog">
<div class="container py-3">
@foreach ($pengumumen as $Pengumuman)
  <div class="card mt-5 mb-5" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt="" width="80%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{$Pengumuman->judul_pengumuman}}</h3>
          <p class="card-text">{{$Pengumuman->isi_pengumuman}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-5 mb-5" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{$Pengumuman->judul_pengumuman}}</h3>
          <p class="card-text">{{$Pengumuman->isi_pengumuman}}</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt="" width="80%">
      </div>
    </div>
  </div>
@endforeach
</div>
</section>
@endsection