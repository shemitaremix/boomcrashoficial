@extends('layouts.postlayout')

@section('header')
<div class="page-banner home-banner">
  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div class="col-lg-6 py-3 wow fadeInUp">
        <h1 class="mb-4">Para nosotros es un gusto tenerte en esta parte con nosotros!!</h1>
        <p class="text-lg mb-5">Aqui podras observar todos los booms osea publicaciones de todos los usuarios</p>

        
      </div>
      <div class="col-lg-6 py-3 wow zoomIn">
        <div class="img-place">
          <img src="../assets/img/bg_image_1.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('contenidillo')
<main>
 
@foreach($posts as $post)
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place text-center">
            <img src="" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <h2 class="title-section">Boom!! <span class="marked"><a href="{{route('posts.boomb',$post)}}">{{$post->name}}</a></span>
             @foreach($post->tags as $tag)
              <h5><a href="">{{$tag->name}}</a></h5>
              
             @endforeach
          </h2>
          <div class="divider"></div>
          <p>{{$post->extract}}</p>
          <div class="img-place mb-3">
            <img src="../assets/img/testi_image.png" alt="">
          </div>
          <a href="#" class="btn btn-primary">More Details</a>
          <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section features">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5>Provide financial advice by our advisor</h5>
              <p>Copywrite, blogpublic realations content translation.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5>Complete solutions for global organisations</h5>
              <p>Copywrite, blogpublic realations content translation.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5>Provide financial advice by our advisor</h5>
              <p>Copywrite, blogpublic realations content translation.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
@endforeach
  
</main>
@endsection