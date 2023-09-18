@extends('admin.mainapps')
@section('title')
  Pengumuman
@endsection
@section('content')
<section id="blog">
<div class="container mb-5 mt-5">

<table class="table">
  <thead>
  <a href="/createpengumuman" class="btn bg-btn mb-2">Tambahkan Pengumuman</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Pengumuman</th>
      <th scope="col">Isi Pengumuman</th>
      <th scope="col">Gambar Pengumuman</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pengumumen as $Pengumuman)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$Pengumuman->judul_pengumuman}}</td>
      <td  width="40%">{{$Pengumuman->isi_pengumuman}}</td>
      <td><img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt="" width="155"></td>
      <td>
        <a href="/editpengumuman/{{ $Pengumuman->id }}" class="btn bg-btn">edit</a>
        <a href="/deletepengumuman/{{ $Pengumuman->id }}" class="btn bg-btn">delete</a>
        <a href="/detailpengumuman" class="btn bg-btn">detail</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
</section>
@endsection