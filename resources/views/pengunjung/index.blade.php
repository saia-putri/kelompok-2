@extends('pengunjung.mainapps')
@section('title')
    Home
@endsection
@section('content')
  <section id="blog">
  <div class="container">
  <!-- card artikel1 -->
  <div class="row mb-2 mt-5">
    <div class="font">
      <h2>Artikel</h2>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"> 
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-body-secondary">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
          Continue reading
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>

     </div>
    </div>
 <!-- card artikel2 -->
<div class="font">
  <h2>Artikel</h2>
</div>
<div class="card mb-3" style="max-width: 100%; height: 250px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-5 mt-3" style="max-width: 100%; height: 250px;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
  </div>
</div>

  <!-- Berita -->
<div class="font">
  <h2>Berita</h2>
</div>
<div class="row row-cols-1 row-cols-md-4 g-3 mb-5">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<!-- video -->
  <div class="vid mb-5">
  <div class="row mb-2">
    <div class="font">
      <h2>Video</h2>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <div class="row py-2">
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/XTDy2f7mvTc" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  </div>

  </div>
  </section>
  
@endsection
