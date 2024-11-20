<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">New User</li>
        </ol>
    </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                <form method="POST" action="{{ route('admin.user.store') }}" class="forms-sample">
                            @csrf
                                    <div class="mb-3">
                                        <label for="journal_id" class="form-label">user ID</label>
                                        <input type="text" class="form-control" name="user_id" value="{{$NewUserID}}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_status" class="form-label">User Status</label>
                                        <select name="user_status" >
                                            <option value="inactive">Inactive</option>
                                            <option value="active">Active</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_type" class="form-label">User Type</label>
                                        <select name="user_type" >
                                            <option value="editor">Editor</option>
                                            <option value="reviewer">Reviewer</option>
                                            <option value="organization">Org Contact</option>
                                            <option value="standard">Standard</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="user_title"  >
                                    </div>
                                        <div class="mb-3">
                                            <label for="user_first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="user_first_name"  >
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_title" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" name="user_middle_name"  >
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="user_last_name"  >
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_email" class="form-label">email</label>
                                            <input type="email" class="form-control" name="user_email" placeholder="">
                                        </div>
                                        {{--<div class="mb-3">
                                            <label for="user_organization">Organization:</label>
                                            <select name="user_organization" id="user_organization">
                                            <option value="">--Select an organization--</option>
                                                @foreach($organizationData as $item)
                                                    <option value="{{$item->org_id}}">{{$item->org_title}}</option>
                                                @endforeach

                                            </select>
                                        </div>--}}

                                    <!-- THis section is for adding / selecting new org -->


                                            <div class="mb-3">
                                                <label for="publisher" class="form-label">Organization</label>
                                                <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="user_organization"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                                    <option value="">--Select an organization--</option>
                                                    @foreach($organizationData as $item)
                                                        <option value="{{$item->org_id}}">{{$item->org_title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="New Organization Name" id="newItemInput">
                                                <button class="btn btn-primary" type="button" id="addNewItem">Add New Organization</button>
                                            </div>


                                    <!-- THis section is for adding / selecting new org -->


                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                          <button class="btn btn-primary" type="submit">Create User</button>
                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
