@extends('home')
@section('section')
<section id="project" class="project">
    <div class="gallery">
        <h2>Project Gallery</h2>
            <div id="carouselExampleIndicators" class="carousel slide mt-9" data-ride="carousel">
                <div class="carousel-inner">
                 @php $counter = 0 ; @endphp
                  @foreach( $photos as $key => $photo)

                  @php $counter++; @endphp

                  <div class="carousel-item @if( $counter == 1 ) active @endif">
                    <img src="{{ asset('uploads/') }}/{{ $photo->filename }}" class="d-block w-90 h-80" alt="First slide">
                  </div>
                 @endforeach
                
                 
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