@extends('admin.mainapps')
@section('title')
    Create
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
<h3 class="fw-bold">Membuat Pengumuman</h3>
<div class="card">
    <div class="card-body">      
    <form action="/savepengumuman" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
            <input type="text" class="form-control" id="judul_pengumuman" name="judul_pengumuman" placeholder="judul pengumuman">
        </div>
        <div class="mb-3">
            <label for="isi_pengumuman" class="form-label">Isi Pengumuman</label>
            <textarea class="form-control" name="isi_pengumuman" id="isi_pengumuman" cols="30" rows="5" placeholder="isi pengumuman"></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar_pengumuman" class="form-label">Gambar Pengumuman</label>
            <input type="file" class="form-control" id="gambar_pengumuman" name="gambar_pengumuman" accept="image/*">
        </div>
        <div class="text-end">
            <button type="submit" class="btn bg-btn">post</button>
        </div>
    </form>
    </div>
</div>
</div>
</section>
@endsection