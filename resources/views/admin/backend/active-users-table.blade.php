<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Active Users</li>
    </ol>
</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="mt-3">
							<a href="{{ route('admin.new-user') }}" class="btn btn-info active" role="button" aria-pressed="true">Add User</a>
							</div>
						</div>
					</div>
					</div>
				</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">Active Users</h6>
<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Title</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Organization</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($UserData as $item)
      <tr>
          <td><a href="/admin/edit/user?val={{$item->user_id }}">{{ $item->user_id}}</a></td>
        <td>{{ $item->title}}</td>
        <td>{{ $item->fname }}&nbsp;{{$item->lname}}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->user_type}}</td>
        <td>{{ $item->org_id}}</td>
        <td>{{ $item->user_status}}</td>
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
