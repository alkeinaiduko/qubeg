@extends('admin-layouts.app')

@section('content')
<header id="admin-header">
	<h1 class="align-middle">LOGO</h1>
	<nav id="admin-nav">
		<div class="dropdown">		
			<i class="material-icons">mail_outline</i>

			<i class="material-icons">notifications_none</i>

			<img src="{{asset('/images/user-avatar.jpg')}}" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#">Profile</a>
			    <a class="dropdown-item" href="#">Settings</a>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item sign-out" href="{{route('admin.logout')}}">Sign out</a>
			</div>
		</div>
	</nav>
</header>

<aside id="admin-aside">
	<ul class="side-nav">
            <a href="{{route('admin.dashboard')}}"><li><div><i data-feather="home" style="position: relative; top: 9px !important;"></i><span>Dashboard</span></div></li></a>
            <a href="{{route('admin.blogs')}}"><li class="active"><i data-feather="edit-2" style="position: relative; top: 9px !important;"></i><span>Blogs</span></li></a>
            <a href="#"><li><i data-feather="settings" style="position: relative; top: 9px !important;"></i><span>Settings</span></li></a>
        </ul>
</aside>

<section id="admin-main-container">
	<div class="admin-main-content">
		<div class="list-control">
			<h2 class="float-left">Write a blog</h2>
		</div>

		<div class="write-a-blog">
			<div class="row">
				<div class="col-md-6">
					<form method="POST" action="{{route('admin.submit.blog')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="Blog Title">
						</div>
						<div class="form-group">
							<select class="multi-tag-select form-control" name="states[]" multiple="multiple">
							  <option value="AL">Alabama</option>
							  <option value="AL">Alkein</option>
							  <option value="WY">Wyoming</option>
							</select>
						</div>
						<div class="form-group">
							<textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
						</div>
						<div class="form-group">
						    <label for="blog-cover">Upload a cover</label>
						    <input type="file" class="form-control-file" name="blog_cover" id="blog-cover">
					  </div>
					  <button type="submit" class="btn btn-primary">Post</button>
					</form>
				</div>
			</div>
		</div>

		@include('admin-layouts.partials.messages')
	</div>
</section> <!-- END OF THE MAINT CONTAINER -->
@endsection