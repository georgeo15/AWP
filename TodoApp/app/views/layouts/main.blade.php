<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo App</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('style/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
	{{-- Asset returns the path to public folder --}}

</head>
<body>

	<div class="wrapperMain">
		<div class="container-fluid">

	  <nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header pull-left">
		      <a class="navbar-brand" href="{{ URL::route('home') }}">GladiatorNote</a>
		    </div>
				
				<div id="navbar" class="navbar-collapse collapse pull-right">
				  <ul class="navbar-nav nav">
				  	<li>{{ HTML::link('logout', 'Logout') }}</li>
				  </ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="listcontainer">

			@yield('content')
			{{-- Print out whatever is b/w section() & stop() tags wherever layouts.main is called. --}}

			</div>
		</div>
	</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>