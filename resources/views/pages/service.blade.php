@extends('master')

@section('title', 'Service Page'  )

@section('content')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading" style="opacity:1;">WHAT WE DO</h1>
      <p class="banner-body">A Consultancy firm that seeks to help your business grow </p>
    </div>
  </div>
</div>


<div class="service">
  <div class="row">

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-microchip fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-twitter-square fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-instagram fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-telegram fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-facebook-square fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="fa fa-linkedin fa-2x"></i>
      <h6 class="service-heading">Why We Exist</h6>
      <p class="service-body">We exist to provide Consultancy Services in Management Control Systems for organisations
        (of all types and sizes) in the pursuit of their corporate goals and objectives</p>
    </div>
  </div>
</div>

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('images/consult_image.jpg'); height: 200px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.6)), url('images/lagoon.jpg'); height: 200px; background-size: cover; opacity:0.80;">
    <div class=" call-section row">
      <div class="col-md-8">
        <p class="text-white">Contact us now for your research and consultancy service</p>
      </div>
      <div class="col-md-4">
          <a href="contact" class="pt-2 pb-2 pr-3 pl-3" style="border: 1.5px solid white; border-radius: 50px;"> <small class="text-white"> <strong>CONTACT US</strong> </small> </a>
      </div>
    </div>
  </div>
</div>
@endsection
