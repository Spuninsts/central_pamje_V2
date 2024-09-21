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
					<li class="breadcrumb-item"><a href="#">Indexes</a></li>
					<li class="breadcrumb-item active" aria-current="page">Active Indexes</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="mt-3">
							<a href="{{ route('admin.new-index') }}" class="btn btn-info active" role="button" aria-pressed="true">Add Index</a>
							</div>
						</div>
					</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
						<h6 class="card-title">Indexes</h6>
						<div class="table-responsive">
							<table id="dataTableExample" class="table">
							<thead>
								<tr>
								<th>Index ID</th>
								<th>Name</th>
                                <th>Acronym</th>
								<th>Description</th>
								<th>Link</th>
								</tr>
							</thead>
							<tbody>
								@foreach( $IndexData as $key => $item)
								<tr>
                                <td>{{ $item->ent_id }}</td>
								<td>{{ $item->ent_name }}</td>
								<td>{{ $item->ent_acro }}</td>
								<td>{{ $item->ent_description }}</td>
								<td>{{ $item->ent_url }}</td>
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
