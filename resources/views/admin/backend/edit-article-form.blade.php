<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

            <!-- <h6 class="card-title">Basic Form</h6>  'ArticleData','AssociateData','UserData','EntityData','OrgData','role_array'-->

            <form method="POST" action="{{ route('admin.article.update') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                    @foreach($ArticleData as $item)
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="article_id" value="{{ $item->id }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="journal_id" class="form-label">Journal ID</label>
                            <input type="text" class="form-control" name="journal_id" value="{{ $item->journal_mid }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="full_title" class="form-label">Name of Journal</label>
                            <input type="text" class="form-control" name="full_title" autocomplete="off" value="{{ $item->full_title }}">
                        </div>

                        <div class="mb-3">
                            <label for="short_title" class="form-label">Short Title or Acronym</label>
                            <input type="text" class="form-control" name="short_title" autocomplete="off" value="{{ $item->short_title }}">
                        </div>
                        {{--<div class="mb-3">
                            <label for="org_society" class="form-label">Name of Organization or Society </label>
                            <input type="text" class="form-control" name="org_society" value="{{ $OrgData[0]['org_title'] }}">
                        </div>--}}
                        <div class="mb-3">
                            <label for="org_society" class="form-label">Name of Organization or Society </label>
                            <select name="org_society" id="org_society">
                                <option value="">--Select Organization -- </option>
                                @foreach($organizationData as $itemo)
                                    @if( $item->org_society == $itemo->org_id )
                                        <option value="{{$itemo->org_id}}" selected>{{$itemo->org_title}}</option>
                                    @endif

                                        <option value="{{$itemo->org_id}}">{{$itemo->org_title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Journal eContact </label>
                            <input type="email" class="form-control" name="email" placeholder="" value="{{ $item->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="journal_contact" class="form-label">Journal Contact Person</label>
                            <input type="text" class="form-control" name="journal_contact" placeholder="" value="{{ $item->article_contact }}">
                        </div>
                        <div class="mb-3">
                            <label for="journal_contact" class="form-label">Journal Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" placeholder="" value="{{ $item->contact_number }}">
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3">
                            <div class="mb-3">
                                <label for="about" class="form-label">About the Journal</label>
                                <textarea class="form-control" name="about" rows="5" >{{ $item->about }}</textarea>
                            </div>


                            <div class="mb-3">
                                <label for="aims_scope" class="form-label">Aims and scope</label>
                                <textarea class="form-control" name="aims_scope" rows="5" >{{ $item->aims_scope }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">URL Link </label>
                                <input type="text" class="form-control" name="link" value="{{ $item->link }}">
                           </div>
                           <div class="mb-3">
                                <label for="policy" class="form-label">Article Publication Policy </label>
                                <input type="text" class="form-control" name="policy" value="{{ $item->policy }}">
                           </div>
                        @endforeach

                        <div class="mb-3">
                            <label for="indexing" class="form-label">Indexing</label>
                            <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="journal_indexes[]" multiple="multiple" data-width="100%" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                @foreach( $EntityData as $key => $item)
                                    @if ($item->ent_type == 'index')
                                        @if(in_array($item->ent_id,explode(",",$ArticleData[0]->indexing)))
                                            <option value="{{$item->ent_id}}" selected>{{$item->ent_name}}</option>
                                        @else
                                            <option value="{{$item->ent_id}}" >{{$item->ent_name}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <select class="form-select mb-3" name="journal_publisher" data-width="50%" aria-hidden="true">
                                <option>Select Publisher...</option>
                                @foreach( $EntityData as $key => $item)
                                    @if ($item->ent_type == 'publisher')
                                        @if($item->ent_id == $ArticleData[0]->publisher)
                                            <option value="{{$item->ent_id}}" selected>{{$item->ent_name}}</option>
                                        @else
                                            <option value="{{$item->ent_id}}" >{{$item->ent_name}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>


                    </div>
                </div> <!-- card body -->
             </div>
        </div>
    </div>

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
                                    @foreach($role_array as $role)
                                        <div class="row mb-3">
                                            <h5>{{ $role }}</h5>
                                            @foreach($AssociateData as $key => $item)
                                                @if($item->association_role == $role)
                                                    @foreach($UserData as $key1 => $item1)
                                                        @if($item->association_id == $item1->user_id)
                                                            <p>{{ $item1->title }} {{ $item1->fname }} {{ $item1->mname }} {{ $item1->lname }}</p>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach

                                    <div class="input-group mb-3">

                                        <!-- Button trigger modal -->
                                        @if($role_array == null )
                                            <button type="button" class="btn btn-primary" readonly>
                                                Membership needs to be added first
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Modify Membership
                                            </button>
                                        @endif


                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Attention</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <H4><span class="badge text-bg-secondary">Save this page before navigating to Membership page.</span></H4>
                                                        <H4><span class="badge text-bg-danger">Any Unsaved data on this page will be lost.</span></H4>
                                                        <H4><span class="badge text-bg-secondary">Click Continue to edit user membership.</span></H4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a class="btn btn-primary" href="/admin/edit/members?val={{$ArticleData[0]->journal_mid}}" >Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Add new group and users
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                                <div class="accordion-body">
                                    <!-- THis section is for select type of users -->

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
                    </div>
                    <!--ACCORDION  -->

                </div>
            </div> <!-- card body -->
        </div>
    </div>

    <div class="row">


        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="photo">Image upload</label>
                        <input class="form-control" type="file" name="article_photo" id="article_photo">
                    </div>

                    <div class="mb-3">
                        <img id="showImage" class="img-fluid" src="{{ (!empty($ArticleData[0]->photo)) ? url('upload/admin_images/'.$ArticleData[0]->photo) : url('upload/admin_images/placeholder.jpg') }}" alt="Journal Picture">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                          <button class="btn btn-primary" type="submit">Save Changes</button>

                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                @if($featuredIsFull)
                                    <div class="alert alert-danger" role="alert">
                                        Reached max of 4 featured Journals.
                                        <input type="hidden" id="article_featured" name="article_featured" value="{{ $ArticleData[0]->article_status }}">
                                    </div>
                                @else
                                    <input type="checkbox" name="article_featured" class="form-check-input">
                                    Featured
                                @endif
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" checked name="article_active" class="form-check-input">
                                Active
                            </label>
                            <p>Unchecking will change set the Journal to draft status and hidden to public.</p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <!-- <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                          <button class="btn btn-primary" type="submit">Save Changes</button>

                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" name="article_featured" class="form-check-input">
                                Featured
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" checked name="article_active" class="form-check-input">
                                Active
                            </label>
                            <p>Unchecking will change set the Journal to draft status and hidden to public.</p>
                        </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

</div>
