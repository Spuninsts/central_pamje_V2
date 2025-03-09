<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.active-pages') }}">Page Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Page</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.page.store') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="page_id" class="form-label">Page ID</label>
                            <input type="text" class="form-control" name="page_id" value="{{$NewPageID}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="page_title" class="form-label">Page Title</label>
                            <input type="text" class="form-control" name="page_title" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="page_description" class="form-label">Page Description</label>
                            <textarea class="form-control" name="page_description" rows="5" placeholder="max of 100 words"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="page_url" class="form-label">Page URL</label>
                            <input type="text" class="form-control" name="page_url" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="page_type" class="form-label">Page Type</label>
                            <select name="page_type" >
                                    <option value="" selected>Select Page Type..</option>
                                @foreach(config('sitevariables.page_type') as $pt)
                                    <option value="{{$pt}}">{{$pt}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_status" class="form-label">Page Status</label>
                            <select name="page_status" >
                                <option value="draft" selected>draft</option>
                                <option value="inactive">inactive</option>
                                <option value="active">active</option>
                            </select>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="page_source" class="form-label">Page Source</label>
                            <input type="text" class="form-control" name="page_source" placeholder="">
                        </div>
                        </form>-->
                    </div>
                </div>
            </div> <!--end  12  sizing-->
        </div> <!-- end row -->


                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="mb-3">
                            <label for="page_category" class="form-label">Page Category (Only for resource page type)</label>
                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="page_category" name="page_category"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value="none" selected>- None -</option>
                                @foreach(config('sitevariables.res_category') as $pt)
                                    <option value="{{$pt}}">{{$pt}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_subcategory" class="form-label">Sub Categories (Only for resource page type) </label>
                            <select class="js-example-basic-multiple form-select select2-hidden-accessible" id="page_subcategory" name="page_subcategory[]" multiple="multiple" data-width="100%" data-select2-id="5" tabindex="-1" aria-hidden="true">
                                <option value="none">- None -</option>
                                @php
                                    $subcategories = array_merge(config('sitevariables.sub_category'));
                                    sort($subcategories);
                                @endphp
                                @foreach($subcategories as $sub)
                                    <option value="{{$sub}}">{{$sub}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_class" class="form-label">Page Classification (Only for resource page type)</label>
                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="page_class" name="page_class"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value="none" selected>- None -</option>
                                @foreach(config('sitevariables.sub_classification') as $sc)
                                    <option value="{{$sc}}">{{$sc}}</option>
                                @endforeach
                            </select>
                        </div>
                     </div>
                </div>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="photo">Image upload</label>
                                    <input class="form-control" type="file" name="page_image" id="article_photo">
                                </div>

                                <div class="mb-3">
                                    <img id="showImage" class="wd-xl-100" src="{{ url('upload/admin_images/placeholder.jpg') }}" alt="Page Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                              <button class="btn btn-primary" type="submit">Create Page</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
