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

                <div class="card-body">
                   <!--ACCORDION  -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Editorial Team
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @php($ctr = 1)
                                    <input type="hidden" class="form-control" name="association_journal" value="{{$AssociateData[0]->association_journal}}">
                                    @foreach($role_array as $role) <!-- start for each role-->
                                        <!-- this is for the member type -->
                                        <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="new_role{{$ctr}}"  data-width="100%" data-select2-id="{{$ctr}}" tabindex="-1" aria-hidden="true">
                                            <option value="{{$role}}" selected>{{$role}}</option>
                                            @foreach($role_array as $rolein)
                                                @if($rolein != $role)
                                                    <option value="{{$rolein}}" >{{$rolein}}</option>
                                                @endif
                                            @endforeach
                                        </select> <!-- end for role select -->
                                    <!--  @-php($ctr += 1) -->
                                        <!-- this is for users -->
                                        <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="journal_users{{$ctr}}[]" multiple="multiple" data-width="100%" data-select2-id="{{$ctr}}" tabindex="-1" aria-hidden="true">
                                            @foreach($AssociateData as $key => $item)
                                                @if($item->association_role == $role)
                                                    @foreach($UserData as $key1 => $item1)
                                                        @if($item->association_id == $item1->user_id)
                                                            <option value="{{$item1->user_id}}" selected>{{ $item1->title }} {{ $item1->fname }} {{ $item1->mname }} {{ $item1->lname }}</option>
                                                        @else
                                                            <option value="{{$item1->user_id}}" >{{ $item1->title }} {{ $item1->fname }} {{ $item1->mname }} {{ $item1->lname }}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </select>
                                    @php($ctr += 1)
                                    @endforeach <!-- end for each role-->
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="btn btn-primary" type="submit">Update Membership</button>
                                <a class="btn btn-danger" href="/admin/article/edit?val={{$AssociateData[0]->association_journal}}" role="button">Cancel and back to Journal</a>
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
