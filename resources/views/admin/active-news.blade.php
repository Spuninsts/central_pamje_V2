<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Panel PAMJE</title>

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

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">News</a></li>
					<li class="breadcrumb-item active" aria-current="page">Active News</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="mt-3">
							<a href="{{ route('admin.new-page') }}" class="btn btn-info active" role="button" aria-pressed="true">Add News</a>
							</div>
						</div>
					</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
						<h6 class="card-title">News</h6>
						<div class="table-responsive">
							<table id="dataTableExample" class="table">
							<thead>
								<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Description</th>
								<th>Status</th>
								<th>Image</th>
								<th>Link</th>
								</tr>
							</thead>
							<tbody>
                            @foreach( $PageData as $key => $item)
                                <tr>
                                    <td><a href="/admin/page/edit?val={{ $item->page_id }}">{{ $item->page_id }}</a></td>
                                    <td>{{ $item->page_title }}</td>
                                    <td>{{ $item->page_description }}</td>
                                    <td>{{ $item->page_status }}</td>
                                    <td>{{ $item->page_image_path }}</td>
                                    <td><a href="{{ $item->page_url }}" target="_blank">{{ $item->page_url }}</a></td>
                                </tr>
                            @endforeach
							</tbody>
							</table>
						</div>
						</div>
					</div>
					</div>
				</div>

				</div>

			<!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
			<!-- partial -->

		</div>
	</div>

	@include('admin.body.scripts')

</body>
</html>
