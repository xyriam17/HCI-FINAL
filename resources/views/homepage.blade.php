@extends('home')

@section('section')

<!--***** Title *****-->

<section class="coloured-section" id="title">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <h1 class="big-heading">
                <span style="color: red;">Support</span> the 
                <span style="color: orange;">education</span> and 
                <span style="color: orange;">healthcare</span> of the 
                 <span style="color: orange;">children</span> in 
                 <span style="color: red;">Bogo</span>!
            </h1>
            
            <div>
              <form>
                <button id="rzp-button1" data-bs-toggle="modal" data-bs-target="#donationModal">
                    <i class="fas fa-donate"></i>&nbsp;Donate here
                </button>
                <!-- Donation Modal -->
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
                                      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Email" required >
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
                                  <button type="submit" class="btn btn-primary">Submit Donate</button>                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        

        <div class="col-lg-6">
          <img
            class="title-image"
            src="{{ asset('images/a.webp') }}"
            alt="child-image"
          />
          <img
            class="title-image1"
            src="{{ asset('images/b.webp') }}"
            alt="child-image"
          />
        </div>
      </div>
    </div>
  </section>

  
  

  <!-- ****   FAQ Section  **** -->

  <section id="faq">
    <div class="secf">
      <h2>FAQ</h2>
    </div>

    <div class="container bg-none">
      <div
        class="accordion accordion-flush faq-container"
        id="accordionFlushExample"
      >
        <div class="accordion-item bg-transparent">
          <h2 class="accordion-header" id="flush-headingOne">
            <button
              class="accordion-button collapsed bg-transparent text-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne"
              aria-expanded="false"
              aria-controls="flush-collapseOne"
            >
              Is my payment/transaction secured when I’m donating?
            </button>
          </h2>

          <div
            id="flush-collapseOne"
            class="accordion-collapse collapse text-light"
            aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body answer answer">
              All Payments are secured via 128-bit encryption. Helping Hand
              assures you that the information you provide is completely
              protected and that your donations are safe. Our secure-server
              software encrypts all your personal information including name,
              contact number, email ID and address. If you wish to maintain
              anonymity, you can click on ‘Anonymous’ while donating.
            </div>
          </div>
        </div>

        <div class="accordion-item bg-transparent">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button
              class="accordion-button collapsed bg-transparent text-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo"
              aria-expanded="false"
              aria-controls="flush-collapseTwo"
            >
              How are the Children verified?
            </button>
          </h2>

          <div
            id="flush-collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body answer">
              We, are extremely particular about the authenticity of a
              campaign. In order to ensure it is genuine, we follow a strict
              3-step process before listing any fundraiser. The rigorous
              verification process involves submission of legal identity
              proofs and medical documents. Furthermore, the specifics of each
              case are verified by the concerned hospital’s medical team. All
              fundraisers are ‘Assured’ and they protect the donor’s interest.
            </div>
          </div>
        </div>

        <div class="accordion-item bg-transparent">
          <h2 class="accordion-header" id="flush-headingThree">
            <button
              class="accordion-button collapsed bg-transparent text-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree"
              aria-expanded="false"
              aria-controls="flush-collapseThree"
            >
              How are my donations being utilized?
            </button>
          </h2>

          <div
            id="flush-collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body answer">
              There are many campaigns in urgent need of funds. Every month,
              your donation will be transferred to a hospital, school,
              orphanage for one such campaign to aid a child’s treatment and
              education.
            </div>
          </div>
        </div>

        <div class="accordion-item bg-transparent">
          <h2 class="accordion-header" id="flush-headingFour">
            <button
              class="accordion-button collapsed bg-transparent text-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFour"
              aria-expanded="false"
              aria-controls="flush-collapseFour"
            >
              Whom should I contact if I have a question or problem in making
              an online donation?
            </button>
          </h2>

          <div
            id="flush-collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingFour"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body answer">
              In case when you are stuck at any step while donating or you
              have any other question , you can directly contact on the given
              number: 123-90898.
            </div>
          </div>
        </div>

        <div class="accordion-item bg-transparent">
          <h2 class="accordion-header" id="flush-headingFive">
            <button
              class="accordion-button collapsed bg-transparent text-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseFive"
              aria-expanded="false"
              aria-controls="flush-collapseFive"
            >
              What does donating online offer me?
            </button>
          </h2>

          <div
            id="flush-collapseFive"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingFive"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body answer">
              It provides an easy, convenient way to donate to our mission,
              and reduces our fundraising costs. Plus, by donating with your
              credit card, you can use your credit card statement for
              taxes/receipts, earn credit card rewards, save time and reduce
              postage costs.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--***** Contact Us *****-->
<style>
.container {
        background: url 
}
        
</style>
  <section id="contact">
    <div class="contact">
      <h2>Contact Us</h2>
      <p>HAVE SOME QUESTIONS?</p>

      <form class="form" id="myForm" enctype="multipart/form-data">
        <div class="contbutton">
          <label for="First">
            <input type="text" placeholder="First Name" id="First" /> </label
          ><br />
          <label for="Last">
            <input type="text" placeholder="Last Name" /> </label
          ><br />
          <label for="email">
            <input type="email" placeholder="What's your mail?" /> </label
          ><br />
          <label for="problem">
            <textarea
            rows="5"
            cols="39"
              class="question"
              placeholder="Your questions..."
              id="problem"
            ></textarea> </label
          ><br />

          <div class="subbtn">
            <button type="submit">Send Message</button>
          </div>
        </div>
      </form>

      <div class="avatar " style="background-image: url('images/contact.png');"></div>
      
    </div>
  </section>
  
  

  @endsection