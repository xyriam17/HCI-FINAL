@extends('home')
@section('section')
<section id="features" class="features">
    <div class="secf">
      <h2>Our Mission</h2>
      <p>
        <span style="color: red;">Improve</span> the 
        <span style="color: orange;">quality</span> of basic
        <span style="color: orange;">education</span>,
        <span style="color: orange;">health</span> and the 
        <span style="color: red;">learning</span> environment for
        <span style="color: orange;">children</span> of 
        <span style="color: red;">Bogo</span> City Philippines.
      </p>
    </div>

    <div class="cards">
      <div class="flip-card">
          <div class="flip-card-inner">
          <div class="flip-card-front">
              <br />
              <br />
              <br>
              <br>
              <br>
              <i id="icon1"><img src="images/m1.png" alt="" width="300px"></i>
              
          </div>

          <div class="flip-card-back">
              <br />
              <br>
              <br>
              <p>
                  Although access to primary education in Bogo has significantly increased in the last couple of years, prevailing problems such as lack of school supplies, classrooms, and access to basic healthcare are still preventing many children from having a healthy educative environment.
              </p>
          </div>
          </div>
      </div>

      <div class="flip-card">
          <div class="flip-card-inner">
          <div class="flip-card-front">
              <br />
              <br />
              <br>
              <i id="icon2"><img src="images/m2.png" alt="" width="250px"></i>
          </div>

          <div class="flip-card-back">
              <br />
              <br />
              <br>
              <br>
              <p>
                  NGITI promotes access to a healthy, safe, and hygienic environment for the children to live and learn in. We seek to improve the efficiency of already existing, but insufficient, services in early childhood care centers, preschools, and primary schools.
              </p>
          </div>
          </div>
      </div>

      <div class="flip-card">
          <div class="flip-card-inner">
          <div class="flip-card-front">
              <br />
              <br />
              <i id="icon3"><img src="images/m3.png" alt="" width="300px"></i>
          </div>

          <div class="flip-card-back">
              <br />
              <p>
                  Children do not have the means necessary to reach out to you. NGITI ensures their voices echo. Through NGITI actions, the resources collected are directed towards the tools asked from the schools. We believe in the potential of people to empower themselves and to improve their situations by themselves. The teachers and students are fighters and only need so little to win the battle.
              </p>
          </div>
          </div>
      </div>
      </div>
  </section>
@endsection