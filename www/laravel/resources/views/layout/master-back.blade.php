<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>

<body>
	<section>
		@include('layout.nav-back')
	</section>

@yield('content')

@include('layout.footer-back')
</body>
</html>
