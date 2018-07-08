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


</section> <!-- END OF THE MAINT CONTAINER -->
@endsection