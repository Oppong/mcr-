@extends('master')

@section('title', 'Error page')

@section('content')


<div class="construction">
    <div class="row">

      <div class="col-md-6" style="margin-top: 150px;">
        <h6 class="construction-heading display-4">404 | Not Found</h6>
        <hr size="5" width="80" align="left" color="#3BAA97" noshade>
        <p class="sec-section-body mb-4">Could not find the page you are looking for!!</p>
        <a href="/" class="pt-2 pb-2 pr-3 pl-3" style="border: 1px solid #3BAA97; border-radius: 50px;"> <small style="color: #3BAA97; "> <strong>GO BACK HOME</strong> </small> </a>
      </div>

      <div class="col-md-6 mt-4">
        <img src="images/kingdom-2.png " alt="" class="img-fluid">
      </div>

    </div>
</div>


@endsection
