@extends('master')

@section('title', 'Projects page')

@section('content')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">OUR PROJECTS </h1>
      <p class="banner-body">Projects Worked on By the Firm</p>
    </div>
  </div>
</div>


<div class="construction">
    <div class="row">

      <div class="col-md-6" style="margin-top: 150px;">
        <h6 class="construction-heading display-4">Page Under Construction</h6>
        <hr size="5" width="80" align="left" color="#3BAA97" noshade>
        <p class="sec-section-body mb-4">Please Visit the page later</p>
        <a href="/" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid #3BAA97; border-radius: 50px;"> <small style="color: #3BAA97; "> <strong>GO BACK HOME</strong> </small> </a>
      </div>

      <div class="col-md-6 mt-4">
        <img src="images/kingdom-2.png " alt="" class="img-fluid">
      </div>

    </div>
</div>


@endsection
