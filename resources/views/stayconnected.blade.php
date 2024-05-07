@extends('home')
@section('section')

<div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form" style="background-image: url('images/flag.avif');">
          <h2 class="text-center">CONTACT US</h2>
          <p class="text-center">If you have any questions or comments, please don't hesitate to contact us.</p>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      
      <div class="col-md-12">
        <br>
        <br>
        <div class="newsletter-form" style="background-image: url('images/logo.webp');">
          <h2 class="text-center">Newsletter</h2>
          <p class="text-center">Subscribe to our newsletter to receive updates on our journey.</p>
          <form>
            <div class="mb-3">
              <label for="newsletterEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="newsletterEmail" aria-describedby="newsletterHelp">
              <div id="newsletterHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection