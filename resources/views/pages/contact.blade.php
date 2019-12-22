@extends('master')

@section('title', 'Contact page')

@section('content')

@include('flash::message')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading" style="opacity:1;">GET IN TOUCH</h1>
      <p class="banner-body">Our Team Will Be With You Shortly</p>
    </div>
  </div>
</div>


<div class="contact-section">
  <div class="row">
    <div class="col-md-4 text-center mb-4">
      <i class="icon-chat mb-4 start-icon"></i>
      <h6 class="contact-heading">Call us Today</h6>
      <p class="contact-body">024 255 1752 | 026 976 8163 </p>
    </div>

    <div class="col-md-4 text-center mb-4">
      <i class="icon-map mb-4 start-icon"></i>
      <h6 class="contact-heading">Location</h6>
      <p class="contact-body">Madina - Accra, Ghana</p>
    </div>

    <div class="col-md-4 text-center mb-4">
        <i class="icon-envelope mb-4 start-icon"></i>
      <h6 class="contact-heading">Email us Today</h6>
      <p class="contact-body">informcrc20@gmail.com</p>
    </div>

  </div>
</div>


<div class="form-contact">

    <div class="form-body">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h6 class="form-heading display-4 text-center">Please Message Us</h6>
              <hr size="5" width="80" color="#3BAA97" noshade align="center">
            </div>
          </div>


        <form class="" action="/sends" method="post">
          @csrf
          <div class="row mb-4">
              <div class="col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="smith asante" name="name" id="name">
              </div>

              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="smithasante@email.com" name="email" id="email">
              </div>
            </div><!-- end of row -->

            <div class="form-group mb-4">
                <label for="select">Subject</label>
                <select class="form-control" name="subject" id="select">
                    <option value="">Choose Subject</option>
                    <option >Academic Research</option>
                    <option >Environmental Research</option>
                    <option >Consultancy</option>
                    <option >General Business Consult</option>
                    <option >Other</option>
                </select>
            </div>

            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea name="body" rows="8" cols="80" class="form-control" id="message"></textarea>
            </div>

            <input type="submit" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid #3BAA97; border-radius: 50px; color: #3BAA97; background-color: white;" value="Send your Message" >

        </form>

        <br>

        @if($errors->any())

            <div class="alert alert-danger">

                <ul>
                  @foreach($errors->all() as $error)
                  <li> {{$error}}</li>
                  @endforeach
                </ul>

            </div>

        @endif

    </div>

</div><!-- form contact -->

@endsection
