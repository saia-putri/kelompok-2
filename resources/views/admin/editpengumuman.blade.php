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
        <form action="/" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
                <input type="hidden" class="form-control" id="penulis" name="penulis_post">
            </div>
            <div class="mb-3">
                <label for="judul_post" class="form-label">Judul Post</label>
                <input type="text" class="form-control" id="judul_post" name="judul_post" >
            </div>
            <div class="mb-3">
                <label for="isi_post" class="form-label">Isi Post</label>
                <textarea class="form-control" name="isi_post" id="isi_post" cols="30" rows="5">
            </textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_post" class="form-label">Gambar Post</label>
                <input type="file" class="form-control" id="gambar_post" name="gambar_post" accept="image/*">
                <input type="hidden" name="oldImage" value="">
                <img src="" class="img-thumbhnail mt-3" width="30%" alt="Foto">
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


