<!doctype html>
<html>
<head>

	<title>@yield('title')</title>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/index.css" type="text/css">

	@yield('head')

	<style>
		a:link {
			text-decoration:underline;
		}
	</style>

</head>

<body>

	@yield('content')

	@yield('body')

	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

</body>

</html>