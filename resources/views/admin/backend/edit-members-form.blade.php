<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
    </ol>
</nav>

    <form method="POST" action="{{ route('admin.members.update') }}" class="forms-sample">
        @csrf
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                        <div class="container mt-5">
                                <label class="h4">Editorial Team for {{$AssociateData[0]->association_journal}}</label>
                                @php $ctr = 1 @endphp
                                <input type="hidden" class="form-control" name="association_journal" value="{{$AssociateData[0]->association_journal}}">

                            @foreach($role_array as $role) <!-- start for each role-->
                                    <!-- this is for the member type -->
                                    <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="new_role{{$ctr}}"  data-width="100%" data-select2-id="{{$ctr}}" tabindex="-1" aria-hidden="true">
                                        <option value="{{$role}}" selected>{{$role}}</option>
                                        @foreach($role_array as $rolein)
                                            @if($rolein != $role)
                                                <option value="{{$rolein}}" >{{$rolein}}</option>
                                            @endif
                                        @endforeach <!-- end forr $rolein foreach-->
                                    </select> <!-- end for role select -->
                                    <!-- this is for users -->
                                    <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="journal_users{{$ctr}}[]" multiple="multiple" data-width="100%" data-select2-id="{{$ctr}}" tabindex="-1" aria-hidden="true">
                                        @foreach($AssociateData as $key => $item)
                                            @if($item->association_role == $role)
                                                @foreach($UserData as $key1 => $item1)
                                                    @if($item->association_id == $item1->user_id)
                                                        <!-- this is for hidden users -->
                                                        <option value="{{$item1->user_id}}" selected>{{ $item1->title }} {{ $item1->fname }} {{ $item1->mname }} {{ $item1->lname }}</option>
                                                    @endif
                                                @endforeach
                                                @foreach($AllUserData as $key2 => $item2)
                                                        <!-- this is for  users showing on the text box -->
                                                        <option value="{{$item2->user_id}}">{{ $item2->title }} {{ $item2->fname }} {{ $item2->mname }} {{ $item2->lname }}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                @php $ctr += 1 @endphp
                            @endforeach <!-- end for each role-->
                        </div>

                        <div class="container mt-5">
                            <label class="h4">Add new group and users</label>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">Member Type</label>
                                <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="new_role{{$ctr}}"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
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
                        </div> <!-- container mt-5" -->


                        <div class="container mt-5">
                            <label for="publisher" class="form-label">Users</label>
                            <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="journal_users{{$ctr}}[]" multiple="multiple" data-width="100%" data-select2-id="5" tabindex="-1" aria-hidden="true">
                                @foreach( $AllUserData as $key => $item)
                                    <option value="{{$item->user_id}}" >{{$item->title}}&nbsp;{{$item->fname}}&nbsp;{{$item->lname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="container mt-5">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="/admin/article/edit?val={{$AssociateData[0]->association_journal}}" role="button">Back to Journal</a>
                            </h2>
                        </div>
                </div> <!-- card body -->
            </div>
        </div> <!--End Row  -->
     </form>
    </div>
