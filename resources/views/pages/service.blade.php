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
      <i class="icon-genius mb-4 start-icon"></i>
      <h6 class="service-heading">Research</h6>
      <p class="service-body">Conducting of all kinds of Research for both Public and Private Organisations and Organising Seminars on how to conduct Research and develop Research Instruments</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="icon-globe mb-4 start-icon"></i>
      <h6 class="service-heading">Training</h6>
      <p class="service-body">Providing Training on Statistical Packages for both Public and Private Organisations and Providing Training for people in Action Research to solve problems</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="icon-anchor mb-4 start-icon"></i>
      <h6 class="service-heading">Management Control System</h6>
      <p class="service-body">We offer business registrations, business proposals, business plan, performance management,
        project management, business policies preparation and implementation etc.</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="icon-telescope mb-4 start-icon"></i>
      <h6 class="service-heading">Seminars</h6>
      <p class="service-body">Organizing Seminars on how to conduct Research and develop Research Instruments and Seminars for Business Organisations (including SMEs)</p>
    </div>

    <div class="col-md-4 text-center service-box">
      <i class="icon-streetsign mb-4 start-icon"></i>
      <h6 class="service-heading">Guidance</h6>
      <p class="service-body">We Guidance on Planning and Budget Preparation, Guidance on Revenue Mobilisation, Guidance on Human and Financial Resource Management and Management Training Programmes (Leadership)</p>
    </div>

    <div class="col-md-4 text-center service-box">
        <i class="icon-hourglass mb-4 start-icon"></i>
      <h6 class="service-heading">Consulting</h6>
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
