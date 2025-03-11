<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
    </ol>
</nav>

    <form method="POST" action="{{ route('admin.members.add') }}" class="forms-sample">
        @csrf
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                   <!--ACCORDION  -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Editorial Team for {{ $JournalID  }}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- THis section is for select type of users -->

                                    <input type="hidden" class="form-control" name="association_journal" value="{{ $JournalID }}">

                                    <div class="container mt-5">
                                        <div class="mb-3">
                                            <label for="publisher" class="form-label">Member Type</label>
                                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="new_role"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                                <option value="" selected>Select an option</option>
                                                @if($role_array == null)
                                                    @php
                                                        $role_array = config('sitevariables.member_type')
                                                    @endphp
                                                @else
                                                    @php
                                                        $role_array = array_merge($role_array,config('sitevariables.member_type'));
                                                        $role_array = array_unique($role_array);
                                                    @endphp
                                                @endif
                                                @foreach($role_array as $role)
                                                    <option value="{{$role}}" >{{$role}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="New Member Type" id="newItemInput">
                                            <button class="btn btn-primary" type="button" id="addNewItem">Add new membership</button>
                                        </div>
                                    </div>

                                    <!-- THis section is for select type of users -->

                                    <label for="publisher" class="form-label">Users</label>
                                    <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="new_users[]" multiple="multiple" data-width="100%" data-select2-id="5" tabindex="-1" aria-hidden="true">
                                        @foreach( $AllUserData as $key => $item)
                                            <option value="{{$item->user_id}}" >{{$item->title}}&nbsp;{{$item->fname}}&nbsp;{{$item->lname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="/admin/article/edit?val={{$JournalID}}" role="button">Back to Journal</a>
                            </h2>

                        </div>
                    </div>
                    <!--ACCORDION  -->

                    </div>
                </div> <!-- card body -->
            </div>
        </div>
     </form>
    </div>
