@extends('master')

@section('title', 'Blog page')

@section('content')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
    <div class="banner">
        <h1 class="banner-heading">KNOWLEDGE SHARING PLATFORM</h1>
      <p class="banner-body">Read about the world of Business and Research</p>
    </div>
  </div>
</div>


<div class="blog-section">
    <div class="row">

    <div class="col-md-4">
        <div class="card">
          <div class="zoom">
            <a href="/intro"><img src="images/entreprenuer.jpg" alt="" class="img-fluid"> </a>
          </div>
          <div class="card-body">
            <h6><a href="/intro" class="blog-section-heading"> Step-By-Step Entry into the World of the Entrepreneur</a> </h6>
            <p class="blog-body">The word ‘entrepreneur’ has variously been defined in entrepreneurship writings and
              this author has adopted the one given by Scarborough: ‘An entrepreneur is</p>

            <a href="#" class="blog-text small mr-4"> <i class="fa fa-user"></i> &nbsp; Amponsah-Kwatiah </a>
            <a href="#" class="blog-text small"> <i class="fa fa-calendar"></i> &nbsp; Jan 5, 2020 </a>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
          <div class="zoom">
            <a href="/stepone"><img src="images/financial.jpg" alt="" class="img-fluid"> </a>
          </div>
          <div class="card-body">
            <h6><a href="/stepone" class="blog-section-heading"> Step 1: Acquire Basic Financial Knowledge </a> </h6>
            <p class="blog-body">This short article is one of six series under the topic: Step-By-Step Entry into the World of the Entrepreneur.
              Its objective is to encourage people to pursue financial knowledge </p>

            <a href="#" class="blog-text small mr-4"> <i class="fa fa-user"></i> &nbsp; Amponsah-Kwatiah </a>
            <a href="#" class="blog-text small"> <i class="fa fa-calendar"></i> &nbsp; Jan 6, 2020 </a>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
          <div class="zoom">
            <a href="/cansave"><img src="images/money.jpg" alt="" class="img-fluid"> </a>
          </div>
          <div class="card-body">
            <h6><a href="/cansave" class="blog-section-heading"> Everyone can save and invest </a> </h6>
            <p class="blog-body">One of the frequent complaints which some people make virtually at all our seminars
               (and the like) is their inability to save and invest due to insufficient income/funds. </p>

            <a href="#" class="blog-text small mr-4"> <i class="fa fa-user"></i> &nbsp; Amponsah-Kwatiah </a>
            <a href="#" class="blog-text small"> <i class="fa fa-calendar"></i> &nbsp; Jan 6, 2020 </a>
          </div>
        </div>
    </div>

    </div>
</div>


@endsection
