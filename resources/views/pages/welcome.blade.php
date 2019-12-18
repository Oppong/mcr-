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
                <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 500px; background-size: cover; opacity:0.95;">
                    <div class="intro">
                        <h1 class="intro-heading">WE HELP YOU GROW YOUR BUSINESS</h1>
                        <p class="intro-body">We provide best services to our clients  and always try to achieve client trust and excellence</p>
                        <a class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white;"> <small class="text-dark"> <strong>LEARN MORE</strong> </small> </a>
                        <a class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
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
                      <a class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white;"> <small class="text-dark" > <strong>LEARN MORE</strong> </small> </a>
                      <a class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
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
                      <a class="pt-2 pb-2 pr-3 pl-3  mr-3" style="background-color:white;"> <small class="text-dark"> <strong>LEARN MORE</strong> </small> </a>
                      <a class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid white"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
                  </div>
              </div>
          </div>
        </div>

    </div>
</div>




@endsection
