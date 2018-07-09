@extends('layouts.app')

@section('title')
	<title>Blog - Qube Gallery</title>
@endsection

@section('content')
	<div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Qube Gallery Blog</h1>
        <p class="lead blog-description">Your best example description goes here.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        	<div class="blog-main-container">
	        	<div class="blog-image-container">
		        	<img class="blog-image" src="{{asset('/images/about-us.jpg')}}">
		        </div>
				<div class="blog-post">	
					<h2 class="blog-post-title">Blog Title</h2>
					<p class="blog-post-meta">July 8, 2018 by <a href="#">Mark</a></p>

					<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
					<a href="{{route('show.blog')}}">Comments(3)</a>
					<hr>
				</div><!-- /.blog-post -->
			</div> <!-- /.blog-main-container -->

			<div class="blog-main-container">
	        	<div class="blog-image-container">
		        	<img class="blog-image" src="{{asset('/images/about-us.jpg')}}">
		        </div>
				<div class="blog-post">	
					<h2 class="blog-post-title">Blog Title</h2>
					<p class="blog-post-meta">July 8, 2018 by <a href="#">Mark</a></p>

					<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
					<a href="{{route('show.blog')}}">Comments(3)</a>
					<hr>
				</div><!-- /.blog-post -->
			</div> <!-- /.blog-main-container -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection