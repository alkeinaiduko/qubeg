

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
			<a href="#"><li class="active"><div><i data-feather="home" style="position: relative; top: 9px !important;"></i><span>Dashboard</span></div></li></a>
			<a href="#"><li><i data-feather="book-open" style="position: relative; top: 9px !important;"></i><span>My Books</span></li></a>
			<a href="#"><li><i data-feather="tag" style="position: relative; top: 9px !important;"></i><span>Add Tag</span></li></a>
			<a href="#"><li><i data-feather="slack" style="position: relative; top: 9px !important;"></i><span>Add Genre</span></li></a>
			<a href="#"><li><i data-feather="users" style="position: relative; top: 9px !important;"></i><span>Users</span></li></a>
			<a href="#"><li><i data-feather="settings" style="position: relative; top: 9px !important;"></i><span>Settings</span></li></a>
		</ul>
	</aside>

	<section id="admin-main-container">
		<div class="row">
			<div class="col-md-4">
				<div class="detail-box">
					<span class="detail-icon-container bg-warning"><i class="material-icons">group</i></span>
					<div class="detail-box-content">
						<span class="detail-box-text">Visitors</span>
						<span class="detail-box-number">434</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="detail-box">
					<span class="detail-icon-container bg-info"><i class="material-icons">person</i></span>
					<div class="detail-box-content">
						<span class="detail-box-text">Users</span>
						<span class="detail-box-number">1,000</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="detail-box">
					<span class="detail-icon-container bg-success"><i class="material-icons">av_timer</i></span>
					<div class="detail-box-content">
						<span class="detail-box-text">Clock</span>
						<span class="detail-box-number">9:45 PM</span>
					</div>
				</div>
			</div>
		</div>
		<div class="admin-main-content">
			<div class="row">
				<div class="col-md-4">
					<div class="dashboard-info-box bg-book">
						<div class="dimmer">
							<div class="dashboard-info-box-icon">
								<i class="fas fa-book icon-margin-book"></i>
							</div>
							<div class="dashboard-info-box-desc">
								<h4 class="text-center">143 Stories</h4>
								<p>You have written 143 stories in total.
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="dashboard-info-box bg-blog">
						<div class="dimmer">
							<div class="dashboard-info-box-icon">
								<i class="fas fa-clipboard-list icon-margin-blog"></i>
							</div>
							<div class="dashboard-info-box-desc">
								<h4 class="text-center">452 Posts</h4>
								<p>You have posted 452 blog posts in total.
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="dashboard-info-box bg-download">
						<div class="dimmer">
							<div class="dashboard-info-box-icon">
								<i class="fas fa-download icon-margin-download"></i>
							</div>
							<div class="dashboard-info-box-desc">
								<h4 class="text-center">846 Downloads</h4>
								<p>You have 143 downloads in total.
							</div>
						</div>
					</div>
				</div>
			</div> <!-- END OF DASHBOARD ROW -->

		</div>

	</section> <!-- END OF THE MAINT CONTAINER -->
@endsection
