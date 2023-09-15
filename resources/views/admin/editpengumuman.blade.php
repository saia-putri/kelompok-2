@extends('admin.mainapps')
@section('title')
    Edit
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
    <h3 class="fw-bold">Edit Pengumuman</h3>
<div class="card">

    <div class="card-body">           
        <form action="/updatepengumuman/{{ $Pengumuman->id }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="mb-3">
                <label for="judul_pengumuman" class="form-label">Judul Pengumuman</label>
                <input type="text" class="form-control" id="judul_pengumuman" name="judul_pengumuman" value="{{ $Pengumuman->judul_pengumuman }}">
            </div>
            <div class="mb-3">
                <label for="isi_pengumuman" class="form-label">Isi Pengumuman</label>
                <textarea class="form-control" name="isi_pengumuman" id="isi_pengumuman" cols="30" rows="5">
                {{ $Pengumuman->isi_pengumuman }}
            </textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_pengumuman" class="form-label">Gambar Pengumuman</label>
                <input type="file" class="form-control" id="gambar_pengumuman" name="gambar_pengumuman" accept="image/*">
                <input type="hidden" name="oldImage" value="{{ $Pengumuman->gambar_pengumuman }}">
                <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt="" width="20%" class="img-thumbhnail mt-3" width="30%" alt="Foto">
            </div>
            <div class="text-end">
                <a href="/datapengumuman" class="btn bg-btn">Kembali</a>
                <button type="submit" class="btn bg-btn">Update</button>
            </div>
        </form>
    </div>

</div>
</div>
</section>
@endsection


