@extends('layouts.postlayout')

@section('contenidillo')
<main>
  <div class="page-section pt-5">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
          <li class="breadcrumb-item active">Second divided from form fish beastr</li>
        </ul>
      </nav>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-single-wrap">
            <div class="post-author">
                  
                  
              Boomer <a href="#">{{$post->user->name}}</a>
            </div>
            <h1 class="post-title">{{$post->name}}</h1>
            
            <div class="post-meta">
              <div class="post-date">
                <span class="icon">
                  <span class="mai-time-outline"></span>
                </span> <a href="#">March 10, 2020</a>
              </div>
             
            </div>
            <div class="post-content">
              <blockquote class="quote">“{{$post->extract}}”
                <span class="author">― {{$post->user->name}}</span></blockquote>
              <p>{{$post->body}}</p>
            </div>
          </div>

          <div class="comment-form-wrap pt-5">
            <h2 class="mb-5">Leave a comment</h2>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="widget">
           

            <!-- Widget Categories -->
            <div class="widget-box">
              <h4 class="widget-title"></h4>
              <div class="divider"></div>

              <ul class="categories">
                
              </ul>
            </div>

            <!-- Widget recent post -->
            <div class="widget-box">
              <h4 class="widget-title">Mas Booms relacionados sobre {{$post->category->name}}</h4>
              <div class="divider"></div>
              @foreach($similares as $similar)
              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="{{route('posts.boomb',$similar)}}">{{$similar->name}}</a></h6>
                  </div>
              </div>
              @endforeach
              

            </div>

            <!-- Widget Tag Cloud -->
            <div class="widget-box">
              <h4 class="widget-title"></h4>
              <div class="divider"></div>

              
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection