@extends('home')
@section('section')
<style>
    .container{
        margin-top: 20px;
    }
    </style>
<h2 id="W"> WHO ARE WE?<br>
    <p>The Board of Trustees</p>
</h2>





<div class="container">
    
    <div class="row">
      <div class="col-md-4">
        <div class="team-member">
          <img src="{{ asset('images/marie.jpg') }}" alt="Shiela Marie Fontanoza"> <h3>Shiela Marie Fontanoza</h3>
          <p>Co-Founder and Coordinator of missions in the Philippines</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member1">
          <img src="{{ asset('images/noemie.jpg') }}" alt="Noémie Schiever">  <h3>Noémie Schiever</h3>
          <p>Co-Founder & President</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member2">
          <img src="{{ asset('images/misha.jpg') }}" alt="Misha Schiever">  <h3>Misha Schiever</h3>
          <p>Co-Founder & Coordinator of missions in France</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member2">
          <img src="{{ asset('images/rotche.jpg') }}"" alt="Rotche Pevida">  <h3>Rotche Pevida</h3>
          <p>Coordinator of missions in the Philippines</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member3">
          <img src="{{ asset('images/arnaud.jpg') }}"" alt="Arnaud Delamare">  <h3>Arnaud Delamare</h3>
          <p>Member of the collegial delegation</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-member">
          <img src="{{ asset('images/volunteers.jpg') }}"" alt="Volunteers">  <h3>Volunteers</h3>
          <p>Teachers</p>
        </div>
      </div>
    </div>
  </div>
@endsection