@extends('master')

@section('title', 'About page')

@section('content')

  <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
    <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
      <div class="banner">
        <h1 class="banner-heading" style="opacity:1;">WHO WE ARE</h1>
        <p class="banner-body">A Consultancy firm that provides advice for various organisation </p>
      </div>
    </div>
  </div>


  <div class="mission">
    <div class="row">
      <div class="col-md-4 mission-box">
        <!-- <i class="fa fa-envelope-open fa-2x"></i> -->
        <h6 class="mission-heading display-4">Who We Are</h6>
        <hr size="5" width="80" align="left" color="#3BAA97" noshade>
        <p class="mission-body">We are a consultancy and research firm that provides advice for various organisation </p>
      </div>
      <div class="col-md-4 text-justify mission-box">
        <i class="icon-layers mb-4 start-icon"></i>
        <h6 class="mission-heading">Why We Exist</h6>
        <p class="mission-body">We exist to provide Consultancy Services in Management Control Systems for organisations
          (of all types and sizes) in the pursuit of their corporate goals and objectives</p>

        <p class="mission-body">We exist to provide Consultancy Services in Management Control Systems for organisations
            (of all types and sizes) in the pursuit of their corporate goals and objectives. International Journal Publication Facility</p>
      </div>
      <div class="col-md-4 text-justify mission-box">
        <i class="icon-pencil mb-4 start-icon"></i>
        <h6 class="mission-heading">What We Offer</h6>
        <p class="mission-body">We offer consultancy services in Management Control Systems, research for Academic, Industrial,
          and Socio-Politico-economic  organizations and International Journal Publication Facility</p>

        <p class="mission-body">We offer consultancy services in Management Control Systems, research for Academic, Industrial,
            and Socio-Politico-economic  organizations and International Journal Publication Facility</p>
      </div>
    </div>
  </div>

  <div class="quote">
    <div style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.8)), url('images/books.jpg'); height: 450px; background-size: cover;">
      <div class="quote-body">
        <h1 class="quote-heading">Insanity : doing the same thing over and over again and expecting different results</h1>
        <p class="quote-text"><em>Albert Einstein</em> </p>
      </div>
    </div>
  </div>

  <div class="message">
    <div class="row">
      <div class="col-md-12">
        <h6 class="message-heading text-center">Message From the CEO</h6>
        <p class="message-text text-center">Lorem ipsum dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>

@endsection
