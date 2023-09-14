@extends('admin.mainapps')
@section('title')
    Edit
@endsection
@section('content')
<section id="blog">
<div class="container py-5">
    <h3 class="fw-bold">Edit Artikel</h3>
<div class="card">

    <div class="card-body">           
        <form action="/" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul_artikel" class="form-label">Judul artikel</label>
                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" >
            </div>
            <div class="mb-3">
                <label for="isi_artikel" class="form-label">Isi artikel</label>
                <textarea class="form-control" name="isi_artikel" id="isi_artikel" cols="30" rows="5">
            </textarea>
            </div>
            <div class="mb-3">
                <label for="gambar_artikel" class="form-label">Gambar artikel</label>
                <input type="file" class="form-control" id="gambar_artikel" name="gambar_artikel" accept="image/*">
                <input type="hidden" name="oldImage" value="">
                <img src="" class="img-thumbhnail mt-3" width="30%" alt="Foto">
            </div>
            <div class="text-end">
                <a href="/dataartikel" class="btn bg-btn">Kembali</a>
                <button type="submit" class="btn bg-btn">Update</button>
            </div>
        </form>
    </div>

</div>
</div>
</section>
@endsection


