@extends('admin-layouts.app')

@section('content')
<header id="admin-header">
	<h1 class="align-middle">LOGO</h1>
	<nav id="admin-nav">
		<div class="dropdown">		
			<i class="material-icons">mail_outline</i>

			<i class="material-icons">notifications_none</i>

			<img src="{{asset('/images/user-avatar.png')}}" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
		<a href="{{route('admin.stories')}}"><li class="active"><i data-feather="book-open" style="position: relative; top: 9px !important;"></i><span>My Stories</span></li></a>
		<a href="#"><li><i data-feather="tag" style="position: relative; top: 9px !important;"></i><span>Add Tag</span></li></a>
		<a href="#"><li><i data-feather="slack" style="position: relative; top: 9px !important;"></i><span>Add Genre</span></li></a>
		<a href="#"><li><i data-feather="users" style="position: relative; top: 9px !important;"></i><span>Users</span></li></a>
		<a href="#"><li><i data-feather="settings" style="position: relative; top: 9px !important;"></i><span>Settings</span></li></a>
	</ul>
</aside>

<section id="admin-main-container">
	<div class="admin-main-content">
		<div class="list-control">
			<h2 class="float-left">My  Stories</h2>
			<button class="btn btn-primary float-right"><i class="fas fa-pencil-alt"></i> Write New Story</button>
		</div>
		<div class="list-container">
			<ul class="stories-list">
				<li>
					<div class="each-story-container">
						<div class="cover-image"><img src="{{asset('/images/cover-1.jpg')}}" width="100px"></div>
						<div class="story-details">
							<h5>The Stranger's Charade</h5>
							<p>Updated 1 hour ago</p>
							<span class="genre">Fanfiction</span><br>
							<span class="chapter">12 Chapters</span><br>
							<span class="badge badge-primary">PUBLISHED</span>
							<ul>
								<li>
									<i class="fas fa-eye"></i> 10k
								</li>
								<li>
									<i class="fas fa-heart"></i> 5k
								</li>
								<li>
									<i class="fas fa-comments"></i> 3.1k
								</li>
							</ul>
						</div>

						<div class="actions-container float-right">
						</div>
					</div>
				</li>
				<li>
					<div class="each-story-container">
						<div class="cover-image"><img src="{{asset('/images/cover-2.jpg')}}" width="100px"></div>
						<div class="story-details">
							<h5>Married Unhappily Ever After</h5>
							<p>Updated 3 hour ago</p>
							<span class="genre">Fanfiction</span><br>
							<span class="chapter">23 Chapters</span><br>
							<span class="badge badge-danger">DRAFT</span>
							<ul>
								<li>
									<i class="fas fa-eye"></i> 10k
								</li>
								<li>
									<i class="fas fa-heart"></i> 5k
								</li>
								<li>
									<i class="fas fa-comments"></i> 3.1k
								</li>
							</ul>
						</div>

						<div class="actions-container float-right">
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

</section> <!-- END OF THE MAINT CONTAINER -->
@endsection