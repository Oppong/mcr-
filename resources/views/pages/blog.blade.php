@extends('master')

@section('title', 'Blog page')

@section('content')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/consult_image.jpg'); height: 350px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/lagoon.jpg'); height: 350px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading">LATEST NEWS</h1>
      <p class="banner-body">Read about the world of Business and Research</p>
    </div>
  </div>
</div>



@endsection
