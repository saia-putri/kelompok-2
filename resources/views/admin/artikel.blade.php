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
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($artikels as $Artikel)
    <tr>
      <th scope="row">1</th>
      <td>{{$Artikel->judul_artikel}}</td>
      <td>{{$Artikel->isi_artikel}}</td>
      <td>{{$Artikel->gambar_artikel}}</td>
      <td>
        <a href="/editartikel" class="btn bg-btn">edit</a>
        <a href="/" class="btn bg-btn">delete</a>
        <a href="/" class="btn bg-btn">detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</section>
@endsection