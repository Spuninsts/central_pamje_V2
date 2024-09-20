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

            <form method="POST" action="{{ route('admin.article.update') }}" class="forms-sample">
                @csrf
                    @foreach($ArticleData as $item)
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
                        <div class="mb-3">
                            <label for="org_society" class="form-label">Name of Organization or Society </label>
                            <input type="text" class="form-control" name="org_society" value="{{ $OrgData[0]['org_title'] }}">
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
                            <!-- {{ $index_var = $publisher_var  = ''}}
                             @foreach($EntityData as $key => $item)
                                    @if ($item->ent_type == 'index')
                                        {{ $index_var .= $item->ent_name.PHP_EOL }}
                                    @else
                                        {{ $publisher_var .= $item->ent_name.PHP_EOL }}
                                    @endif
                            @endforeach -->
                            <!-- This is commented out to keep values from displaying, but its working -->
                           <div class="mb-3">
                                <label for="indexing" class="form-label">Indexing</label>
                                <textarea class="form-control" name="indexing" rows="5" >{{ $index_var }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">Publisher</label>
                                <input type="text" class="form-control" name="publisher" value="{{ $publisher_var }}">
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
                    <h5>Editorial Team</h5>
                    </br>
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
                    <!-- USER MODAL -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Update Team
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Save all changes before editing on this page, saving here will cause a whole page refresh</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- USER MODAL  -->
                </div>
            </div> <!-- card body -->
            </div>
    </div>

    <div class="row">
       <!--  <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="logo">Logo upload (60px x 160px, ~200 KB, PNG format)</label>
                            <input class="form-control" type="file" name="article_logo">
                        </div>
                </div>
            </div>
        </div> -->

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="photo">Image upload</label>
                            <input class="form-control" type="file" name="article_photo">
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
