@extends('master')
@section('title', 'Homepage')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 500px; background-size: cover; ">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 500px; background-size: cover; background: rgba(0,0,0,0.6)">
                    <div class="intro">
                        <h1 class="intro-heading">WE HELP YOU GROW YOUR BUSINESS</h1>
                        <p class="intro-body">We provide best services to our clients  and always try to achieve client trust and excellence</p>
                        <a href="/service" class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white; border-radius: 50px;"> <small class="text-dark"> <strong>LEARN MORE</strong> </small> </a>
                        <a href='/contact' class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white; border-radius: 50px;"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
          <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 500px; background-size: cover; ">
              <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/celestial.jpg'); height: 500px; background-size: cover; opacity:0.95;">
                  <div class="intro">
                      <h1 class="intro-heading">TEAM WORK IS OUR HALLMARK</h1>
                      <p class="intro-body">We solicit ideas from each team member to provide our clients with the best service</p>
                      <a href="/service" class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white; border-radius: 50px;"> <small class="text-dark" > <strong>LEARN MORE</strong> </small> </a>
                      <a href="/contact" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white; border-radius: 50px;"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
                  </div>
              </div>
          </div>
        </div>
        <div class="carousel-item">
          <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 500px; background-size: cover; ">
              <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/ocean.jpg'); height: 500px; background-size: cover; opacity:0.95;">
                  <div class="intro">
                      <h1 class="intro-heading">YOUR BUSINESS OUR PRIORITY</h1>
                      <p class="intro-body">We solicit ideas from each team member to provide our clients with the best service</p>
                      <a href="/service" class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white; border-radius: 50px;"> <small class="text-dark"> <strong>LEARN MORE</strong> </small> </a>
                      <a href="/contact" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white; border-radius: 50px;"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
                  </div>
              </div>
          </div>
        </div>

    </div>
</div>


<div class="first-section">
  <div class="row">
    <div class="col-md-4 mb-4">
      <i class="icon-strategy mb-4 start-icon"></i>
      <h6>Strategy</h6>
      <p class="first-section-body">We solicit ideas from each team member to provide our clients with the best service</p>
    </div>

    <div class="col-md-4 mb-4">
      <i class="icon-shield mb-4 start-icon"></i>
      <h6>Training</h6>
      <p class="first-section-body">Providing Training on Statistical Packages for both Public and Private Organisations</p>
    </div>

    <div class="col-md-4 mb-4 ">
      <i class="icon-linegraph mb-4 start-icon"></i>
      <h6>Consulting</h6>
      <p class="first-section-body">We provide General Business Advice for both Public and Private organisations.</p>
    </div>

    <div class="col-md-4">
      <i class="icon-circle-compass mb-4 start-icon"></i>
      <h6>Business Proposals</h6>
      <p class="first-section-body">Preparation of business proposals and business plans for organisations and individuals</p>
    </div>

    <div class="col-md-4">
      <i class="icon-lightbulb mb-4 start-icon"></i>
      <h6>Research</h6>
      <p class="first-section-body">Conducting of all kinds of Research for both Public and Private Organisations</p>
    </div>

    <div class="col-md-4">
      <i class="icon-profile-male mb-4 start-icon"></i>
      <h6>Seminars</h6>
      <p class="first-section-body">Organizing Seminars on how to conduct Research and develop Research Instruments</p>
    </div>
  </div>
</div>

<div class="second-section">

  <div class="sec-section">
    <div class="row">
      <div class="col-md-6 mb-4" style="margin-top: 150px;">
        <h6 class="sec-section-heading display-4">Who We Are</h6>
        <hr size="5" width="80" align="left" color="#3BAA97" noshade>
        <p class="sec-section-body mb-4">We exist to provide Consultancy Services in Management Control Systems for organisations
          (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
        <a href="/services" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid #3BAA97; border-radius: 50px;"> <small style="color: #3BAA97; "> <strong>READ MORE</strong> </small> </a>
      </div>

      <div class="col-md-6">
          <img src="images/new consult.png " alt="" class="img-fluid">
      </div>

    </div><!-- end of row -->
  </div>
</div>


@endsection
