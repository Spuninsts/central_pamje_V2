<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Article</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.article.store') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="journal_id" class="form-label">Journal ID</label>
                            <input type="text" class="form-control" name="journal_id" value="{{$NewJournalID}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="full_title" class="form-label">Name of Journal</label>
                            <input type="text" class="form-control" name="full_title" autocomplete="off" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="short_title" class="form-label">Short Title or Acronym</label>
                            <input type="text" class="form-control" name="short_title" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="org_society" class="form-label">Name of Organization or Society </label>
                            <select name="org_society" id="org_society">
                                <option value="">--Select an organization--</option>
                                @foreach($organizationData as $item)
                                    <option value="{{$item->org_id}}">{{$item->org_title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Journal eContact </label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label for="journal_contact" class="form-label">Journal Contact Person</label>
                            <input type="text" class="form-control" name="journal_contact" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="journal_contact" class="form-label">Journal Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" placeholder="">
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
                                <textarea class="form-control" name="about" rows="5" placeholder="max of 100 words"></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="aims_scope" class="form-label">Aims and scope</label>
                                <textarea class="form-control" name="aims_scope" rows="5" placeholder="max of 50 words"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="link" class="form-label">URL Link </label>
                                <input type="text" class="form-control" name="link" placeholder="http://">
                           </div>
                           <div class="mb-3">
                                <label for="policy" class="form-label">Article Publication Policy </label>
                                <input type="text" class="form-control" name="policy" placeholder="">
                           </div>

                            <div class="mb-3">
                                <label for="indexing" class="form-label">Indexing</label>
                                <select class="js-example-basic-multiple form-select select2-hidden-accessible" name="journal_indexes[]" multiple="multiple" data-width="100%" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    @foreach( $EntityData as $key => $item)
                                        @if ($item->ent_type == 'index')
                                            <option value="{{$item->ent_id}}" >{{$item->ent_name}}</option>
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
                                            <option value="{{$item->ent_id}}" >{{$item->ent_name}}</option>
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


        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="photo">Image upload</label>
                            <input class="form-control" type="file" name="article_photo" id="article_photo">
                        </div>

                        <div class="mb-3">
                            <img id="showImage" class="img-fluid" src="{{ url('upload/admin_images/placeholder.jpg') }}" alt="Journal Picture">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                          <button class="btn btn-primary" type="submit">Create Journal</button>

                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                @if($featuredIsFull)
                                    <div class="alert alert-danger" role="alert">
                                        Reached max of 4 featured Journals.
                                    </div>
                                @else
                                    <input type="checkbox" name="article_featured" class="form-check-input">
                                    Set Featured
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

   <!--  <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                          <button class="btn btn-primary" type="submit">Create Journal</button>

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
    </div> -->

</div>
