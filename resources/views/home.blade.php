<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NGITI</title>

    <link rel="icon" href="images/hand.png" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu"
      rel="stylesheet"
    />

    <!-- Font Awesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--External CSS-->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
  </head>

  <body>
    <!--***** Back to top button *****-->
    <a title="scroll to top" id="button"></a>

    <!--***** Nav Bar *****-->
    <nav class="navbar navbar-expand-lg">
      <a href="#title"
        ><img src="{{ asset('images/logo.webp') }}" alt="Ngiti_Logo" class="navbarlogo"
      /></a>
     

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link px-2" href="{{ url('homepage') }}"
              ><i class="fas fa-home"></i>&nbsp;Home</a
            >
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>&nbsp;About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('mission') }}">Mission</a>
              <a class="dropdown-item" href="{{ url('whyngiti') }}">Why Ngiti</a>
              <a class="dropdown-item" href="{{ url('how-it-started') }}">How Did It All Start?</a>
              <a class="dropdown-item" href="{{ url('who-we-are') }}">Who Are We?</a>
              <a class="dropdown-item" href="{{ url('https://www.youtube.com/watch?v=rFvcuH-e3B4&t=80s') }}" target="_blank">NGITI by Noémie Schiever</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-clipboard-list"></i>&nbsp;Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('project2024') }}">Project 2024</a>
              <a class="dropdown-item" href="{{ url('previous') }}">Previous Project</a>
              <a class="dropdown-item" href="{{ url('gallery') }}">Project Gallery</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link px-2" href="{{ url('accomplishment') }}"
              ><i class="fas fa-check-circle"></i>&nbsp;Accomplishments</a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link px-2" href="{{ url('stayconnected') }}"
              ><i class="fas fa-envelope"></i>&nbsp;Stay Connected</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link px-2 donate-btn" href="#" data-bs-toggle="modal" data-bs-target="#donationModal">
                <i class="fas fa-donate"></i>&nbsp;Donate
            </a>
        </li>
        
          
          
        </ul>
      </div>
    </nav>
    <div class="modal " id="donationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">MONEY DONATION</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="donation-form" method="POST" action="{{ route('donate.store') }}">
                  @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required maxlength="255" placeholder="Enter Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required maxlength="255" placeholder="Enter Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="gcash_number" class="form-label">Gcash Number</label>
                        <input type="number" class="form-control" id="gcash_number" name="gcash_number" required maxlength="11" pattern="[0-9]{11}" placeholder="Enter Gcash Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount"name="amount" required min="0" placeholder="Enter Amount" required>
                    </div>
                    <div class="mb-3">
                      <label for="reference_number" class="form-label">Reference Number</label>
                                    <input type="number" class="form-control" id="reference_number" name="reference_number" maxlength="255" placeholder="Enter Reference Number" required>
                  </div>
                    <hr />
                    <div class="mb-3 text-center">
                        <label  id="paymentMethod" class="form-label">NGITI GCash Information</label>
                        <p>Organization Name: NGITI</p>
                        <p>GCash Number: 09463406001</p>
                        <img src="{{ asset('images/gcash.jpeg') }}" alt="GCash QR Code" width="200">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Donate</button>                </form>
              </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </form>
</div>
</div>
    
  </div>
  

    @yield('section')

    <!--************* Footer ********** -->

    <footer id="dk-footer">
      <div class="container">
        <div class="sec Aboutus">
          <h2>NGITI</h2>
          <span class="animate-border border-black"></span>

          <div class="footer-detail">
            <p>
              “None of us, including me, ever do great things. But we can all do
              small things, with great love, and together we can do something
              wonderful. Just together.”
            </p>
          </div>
        </div>

        <!-- End Col -->
        <div class="sec QuickLinks">
          <h2>About Us</h2>
          <u1>
            <li><a href="{{ url('homepage') }}">Home</a></li>
            <li><a href="{{ url('mission') }}">Mission</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Stay Contacted</a></li>
          </u1>
        </div>

        <!-- End col -->
        <div class="sec section-heading">
          <h2>Contact Us</h2>
          <p>Having some questions? Don’t miss your problem</p>

          <form action="#">
            <div class="sec form-row">
              <div class="col dk-footer-form">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Address"
                />

                <button
                  type="submit"
                  id="gmailus"
                  value="mailto: sb2253@gmail.com"
                >
                  <i class="fa fa-send"></i>
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="sec">
          <h2>Follow Us</h2>

          <ul class="sci">
            <li>
              <a
                href="https://www.facebook.com/ngitibogo"
                target="_blank"
                ><i class="fa fa-facebook-official" aria-hidden="true"></i
              ></a>
            </li>

            <li>
              <a href="https://www.instagram.com/ngitiassociation/?hl=fr" target="_blank"
                ><i class="fa fa-instagram" aria-hidden="true"></i
              ></a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCvDgPoY5PVZ24QV4bbCeFwA" target="_blank"
                ><i class="fa fa-youtube" aria-hidden="true"></i
              ></a>
            </li>

            

            
          </ul>
        </div>
      </div>

      <!-- End Contact Container -->
      <div class="copyrightText">
        <p class="p1">“For it is in giving that we receive.”</p>
        <p class="p2">
          Copyright ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          || Ngiti. All rights reserved
        </p>
      </div>
    </footer>

    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- external js file-->
    <script src="{{ asset('js/script.js') }}"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    {{-- <script src="index.js"></script> --}}
  </body>
</html>
