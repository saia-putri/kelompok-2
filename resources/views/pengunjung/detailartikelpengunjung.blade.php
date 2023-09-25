@extends('pengunjung.mainapps')
@section('title')
    Detail Artikel
@endsection
@section('content')
<section id="blog">
<div class="container mb-5 mt-5">
@foreach ($artikels as $Artikel)
<div class="card mb-3">
    <img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" alt="" width="100%">
  <div class="card-body">
    <h3 class="card-title py-3">{{ $Artikel->judul_artikel }}</h3>
    <p class="card-text">{{ $Artikel->isi_artikel }}</p>
  </div>
</div>
@endforeach
</div>
</section>
@endsection