<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update User</li>
        </ol>
    </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                <form method="POST" action="{{ route('admin.user.update') }}" class="forms-sample">
                            @csrf
                                    <div class="mb-3">
                                        <label for="user_id" class="form-label">user ID</label>
                                        <input type="text" class="form-control" name="user_id" value="{{$userData->user_id}}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_status" class="form-label">User Status</label>
                                        <select name="user_status" >
                                            <option value="{{$userData->user_status}}" selected>{{$userData->user_status}}</option>
                                            <option value="inactive">inactive</option>
                                            <option value="active">active</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_type" class="form-label">User Type</label>
                                        <select name="user_type" >
                                            <option value="{$userData->user_type}}" selected>{{$userData->user_type}}</option>
                                            <option value="author">Author</option>
                                            <option value="reviewer">Reviewer</option>
                                            <option value="organization">Org Contact</option>
                                            <option value="standard">Standard</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="user_title" value="{{$userData->title}}" >
                                    </div>
                                        <div class="mb-3">
                                            <label for="user_first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="user_first_name"  value="{{$userData->fname}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_title" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" name="user_middle_name"  value="{{$userData->mname}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="user_last_name" value="{{$userData->lname}}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_email" class="form-label">email</label>
                                            <input type="email" class="form-control" name="user_email" value="{{$userData->email}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="user_organization">Organization:</label>
                                            <select name="user_organization" id="user_organization">
                                            <option value="">--Select an organization--</option>
                                                @foreach($organizationData as $item)
                                                    @if($item->org_id == $userData->org_id)
                                                        <option value="{{$item->org_id}}" selected>{{$item->org_title}}</option>
                                                    @else
                                                        <option value="{{$item->org_id}}">{{$item->org_title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                          <button class="btn btn-primary" type="submit">Update User</button>
                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
