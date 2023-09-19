@extends('pengunjung.mainapps')
@section('title')
    Home
@endsection
@section('content')
    <!-- header bg -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/palcom1.jpg" alt="" width="100%">
            </div>

            <div class="carousel-item">
                <img src="/img/palcom3.jpg" alt="" width="100%">
            </div>

            <div class="carousel-item">
                <img src="/img/palcom2.jpg" alt="" width="100%">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section id="blog">
        <div class="container">
            <!-- card artikel1 -->
            @foreach ($artikels as $Artikel)
                <div class="row mb-2 mt-5">
                    <div class="font">
                        <h2>Artikel</h2>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">{{ $Artikel->judul_artikel }}</h3>
                                <p class="card-text mb-auto">{{ $Artikel->isi_artikel }}</p>
                                <a href="/detailartikel" class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue reading
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="{{ asset('storage/' . $Artikel->gambar_artikel) }}" alt="" width="250"
                                    height="250">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">{{ $Artikel->judul_artikel }}</h3>
                                <p class="mb-auto">{{ $Artikel->isi_artikel }}</p>
                                <a href="/detailartikel" class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue reading
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="{{ asset('storage/' . $Artikel->gambar_artikel) }}" alt="" width="250"
                                    height="250">
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <!-- card artikel2 -->
            @foreach ($pengumumen as $Pengumuman)
                <div class="font mb-3 mt-4">
                    <h2>Pengumuman</h2>
                </div>
                <div class="card mb-5" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt=""
                                width="80%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $Pengumuman->judul_pengumuman }}</h3>
                                <p class="card-text">{{ $Pengumuman->isi_pengumuman }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-5 mb-5" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $Pengumuman->judul_pengumuman }}</h3>
                                <p class="card-text">{{ $Pengumuman->isi_pengumuman }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt=""
                                width="80%">
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Berita -->
            <!-- <div class="font mb-2 mt-5">
              <h2>Berita</h2>
            </div> -->
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card h-100">
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/1tahun.jpg" alt="" width="100%" height="250">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit,
                                rerum?</p>
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
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus,
                                tempore!</p>
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
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
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
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/3XEnCEs1TOM?si=O4lh_BaTTCFIw2tS" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/7nUHFqJ9ypw?si=AJmF5WFJjpOlVb_-" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/mETrl0Pbm3M?si=cUOwjdqSAul-JdZG" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/ZyUrBGi0iG0?si=bN7uSAu2w6Mc3lxI" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/ZcIwTjEsOX0?si=pyai6EvwlXyFv3W0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/r_3SenXjjC4?si=WDjSRfUvELkezyKL" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
