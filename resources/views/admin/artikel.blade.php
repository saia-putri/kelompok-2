@extends('admin.mainapps')
@section('title')
    Artikel
@endsection
@section('content')
<section id="blog">
<div class="container mb-5 mt-5">

<table class="table">
  <thead>
  <a href="/createartikel" class="btn bg-btn mb-2">Tambahkan Artikel</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Artikel</th>
      <th scope="col">Isi Artikel</th>
      <th scope="col">Gambar Artikel</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($artikels as $Artikel)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $Artikel->judul_artikel }}</td>
      <td width="40%">{{ $Artikel->isi_artikel }}</td>
      <td><img src="{{ asset('storage/' . $Artikel->gambar_artikel)}}" width="155" alt=""></td>
      <td>
        <a href="/editartikel/{{ $Artikel->id }}" class="btn bg-btn">edit</a>
        <a href="/deleteartikel/{{ $Artikel->id }}" class="btn bg-btn">delete</a>
        <a href="/detailartikel" class="btn bg-btn">detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</section>
@endsection