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
                <form method="POST" action="{{ route('admin.user.update') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                                    <div class="mb-3">
                                        <label for="user_id" class="form-label">user ID</label>
                                        <input type="text" class="form-control" name="user_id" value="{{$userData->user_id}}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_status" class="form-label">User Status</label>
                                        <select name="user_status" >
                                            <option value="{{$userData->user_status}}" selected>{{$userData->user_status}}</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="active">Active</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_type" class="form-label">User Type</label>
                                        <select name="user_type" >
                                            <option value="{{$userData->user_type}}" selected>{{$userData->user_type}}</option>
                                            <option value="editor">Editor</option>
                                            <option value="reviewer">Reviewer</option>
                                            <option value="organization">Org Contact</option>
                                            <option value="standard">Standard</option>
                                            <option value="admin">Admin</option>
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

                                        <!--  Image Edit  -->
                                        <div class="col-md-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="photo">Update Image</label>
                                                        <input class="form-control" type="file" name="user_photo" id="article_photo">
                                                    </div>

                                                    <div class="mb-3">
                                                        <img id="showImage" class="wd-xl-100" src="{{ (!empty($userData->user_address)) ? url('upload/admin_images/'.$userData->user_address) : url('upload/admin_images/placeholder.jpg') }}" alt="Journal Picture">
                                                    </div>
                                                </div>
                                            </div>
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

                                    <div class="mb-3 pt-5">
                                        <div class="form-check form-check-inline">
                                            <div class="mb-3">

                                                <!-- Delete Button that triggers the modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $userData->user_id }}">
                                                    Delete
                                                </button>

                                                <!-- Delete Confirmation Modal -->
                                                <div class="modal fade" id="deleteModal{{ $userData->user_id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete "{{ $userData->fname }} {{ $userData->lname }}"? This action cannot be undone.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                                                <!-- Delete Form -->
                                                                <form action="{{ route('admin.user.destroy', $userData->user_id) }}" method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

</div>
