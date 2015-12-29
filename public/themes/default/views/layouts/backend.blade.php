<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ theme('css/backend.css') }}">
	<title>@yield('title') &mdash; The Sunday Sim</title>
</head>
<body>
	<nav class="navbar navbar-static-top navbar-inverse">
		<div class="container">
			<div class="navbar-header"><a href="/" class="navbar-brand">The Sunday Sim</a></div>
			<ul class="nav navbar-nav">
				<li><a href="#">item 1</a></li>
				<li><a href="#">item 2</a></li>
				<li><a href="#">item 3</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
				<li><a href={{ route('auth.logout') }}>Logout</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>@yield('title')</h3>

				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>