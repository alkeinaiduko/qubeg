@extends('layouts.app')

@section('title')
	<title>Blog - Qube Gallery</title>
@endsection

@section('content')
	<div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
        	<img class="blog-image" src="{{asset('/images/about-us.jpg')}}">
          <div class="blog-post">
            <h2 class="blog-post-title">Blog Title</h2>
            <p class="blog-post-meta">July 8, 2018 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <a href="#">Comments(3)</a>
            <hr>
            <form>
            	<div class="form-group">
            		<textarea class="form-control" name="comment" placeholder="Write a comment..."></textarea>
            	</div>
            </form>
            <div class="comment-section">
            	<div class="media">
				  <img class="mr-3 commentor-image" src="{{asset('/images/user-avatar.png')}}" alt="Commentor Name">
				  <div class="media-body">
				    <h5 class="mt-0">Alkein Villajos<br><span class="comment-time">an hour ago</span></h5>

				    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
				    <hr>
				  </div>
	        	</div>
			</div>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Art Details</h4>
            <ol class="list-unstyled">
              <li>Name: Art Name</li>
              <li>by: <a href="#">Someone Else</a></li>
              <li>on July 8, 2018</li>
            </ol>
          </div>
          <hr>
          <div class="sidebar-module">
            <h4>Tags</h4>
            <div class="blog-tags">
              <ul>
                <li><span class="tags">Tag 1</span></li>
                <li><span class="tags">Tag 2</span></li>
                <li><span class="tags">Tag 3</span></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="sidebar-module">
            <h4>Share this entry</h4>
            <div class="share-entry">
              <ul class="social-links">
                <a href="#"><li class="facebook"><i class="fa fa-facebook-f"></i></li></a>
                <a href="#"><li class="twitter"><i class="fa fa-twitter"></i></li></a>
                <a href="#"><li class="googleplus"><i class="fa fa-google-plus-g"></i></li></a>
                <a href="#"><li class="pinterest"><i class="fa fa-pinterest-p"></i></li></a>
              </ul>
            </div>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection