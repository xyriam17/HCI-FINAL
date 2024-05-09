@extends('home')

@section('section')

<div class="bg-white dark:bg-zinc-800 p-8">
    <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-4xl font-bold text-zinc-900 dark:text-white">Projects 2024 </h1>
      <p class="mt-4 text-lg text-zinc-600 dark:text-zinc-300">
        <span style="color: red;">Providing</span> 
        <span style="color: orange;">medical</span> equipment for the
        <span style="color: orange;">neonatology</span> department<br>
        <span style="color: orange;">Improving</span>  the 
        <span style="color: red;">classroom</span> in
        <span style="color: orange;">National Scool</span> in
        <span style="color: red;">Bogo</span>
      </p>
      
      <div id="carouselExampleIndicators" class="carousel slide mt-8" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/d.webp') }}" class="d-block w-95" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/c.webp') }}" class="d-block w-90" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/p.webp') }}" class="d-block w-90" alt="Third slide">
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
    

      
@endsection
