<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<title>Admin CENTRAL PAMJE -Dashboard</title>
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../upload/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('../upload/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../upload/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

    @include('admin.body.css')
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
            @include('admin.body.sidebar')
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
            @include('admin.body.header')
			<!-- partial -->

            @yield('admin')

			<!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
			<!-- partial -->

		</div>
	</div>

	@include('admin.body.scripts')

</body>
</html>
