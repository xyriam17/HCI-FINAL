@extends('home')
@section('section')
<section id="project" class="project">
    <div class="gallery">
        <h2>Project Gallery</h2>
            <div id="carouselExampleIndicators" class="carousel slide mt-9" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/o.webp') }}" class="d-block w-90 h-80" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/m.webp') }}" class="d-block w-80" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/q.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/r.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/s.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/t.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/w.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/x.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/y.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/z.webp') }}" class="d-block w-80" alt="Third slide">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              
          </div>
        
              

</section>
@endsection