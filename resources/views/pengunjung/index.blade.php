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
          <h3 class="mb-0">Featured post</h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Post title</h3>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
          Continue reading
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>
        </div>
      </div>

     </div>
    </div>
 <!-- card artikel2 -->
<div class="font mb-2 mt-4">
</div>
<div class="card" style="max-width: 100%; height: 250px;">
  <div class="row g-0">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="245" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Card title</h3>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-5 mt-3" style="max-width: 100%; height: 250px;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Card title</h3>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <div class="col-md-4">
    <svg class="bd-placeholder-img" width="100%" height="245" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>
    </div>
  </div>
</div>

  <!-- Berita -->
<div class="font mb-2 mt-5">
  <h2>Berita</h2>
</div>
<div class="row row-cols-1 row-cols-md-4 g-3">
  <div class="col">
    <div class="card h-100">
        <div class="col-auto d-none d-lg-block">
          <img src="img/1tahun.jpg" alt="" width="100%" height="250">
        </div>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, rerum?</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
        <div class="col-auto d-none d-lg-block">
          <img src="img/1tahun.jpg" alt="" width="100%" height="250">
        </div>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, tempore!</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
        <div class="col-auto d-none d-lg-block">
          <img src="img/1tahun.jpg" alt="" width="100%" height="250">
        </div>
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
        <div class="col-auto d-none d-lg-block">
          <img src="img/1tahun.jpg" alt="" width="100%" height="250">
        </div>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsum!</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<!-- video -->
  <div class="vid mb-2 mt-5">
  <div class="row">
    <div class="font">
      <h2>Video</h2>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/3XEnCEs1TOM?si=O4lh_BaTTCFIw2tS" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/7nUHFqJ9ypw?si=AJmF5WFJjpOlVb_-" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/mETrl0Pbm3M?si=cUOwjdqSAul-JdZG" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <div class="row py-2">
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/ZyUrBGi0iG0?si=bN7uSAu2w6Mc3lxI" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/ZcIwTjEsOX0?si=pyai6EvwlXyFv3W0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col">
         <iframe width="100%" height="250" src="https://www.youtube.com/embed/r_3SenXjjC4?si=WDjSRfUvELkezyKL" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  </div>

  </div>
  </section>
  
@endsection
