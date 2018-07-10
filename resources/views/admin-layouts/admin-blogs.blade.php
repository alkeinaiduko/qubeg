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
			<h2 class="float-left">Qube Gallery Blogs</h2>
			<a href="{{route('admin.write.blog')}}" class="btn btn-primary float-right"><i class="fas fa-pencil-alt"></i> Write New Story</a>
		</div>
		<div class="list-container">
			
		</div>
	</div>

</section> <!-- END OF THE MAINT CONTAINER -->
@endsection