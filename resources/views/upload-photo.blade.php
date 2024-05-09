@extends('home')
@section('section')
<style>
  .contact-form {
      padding: 40px;
      border-radius: 10px;
      background-color: #f8f9fa;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .upload-container {
      max-width: 500px;
      margin: 0 auto;
    }

    .upload-container h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .upload-container p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .upload-btn {
      width: 100%;
    }

    @media (max-width: 576px) {
      .contact-form {
        padding: 20px;
      }
    }
  </style>

<div class="container py-5">
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form" style="background-image: url('images/flag.avif') ;">
          <h2 class="text-center">UPLOAD GALLERY</h2>
          <p class="text-center">Projects Gallery.</p>
          <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
              <label for="name" class="form-label">Photos</label>
              <input type="file" class="form-control" id="name" name="filename">
            </div>
           
            
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
        </div>
      </div>
      
    
    </div>
  </div>
@endsection