<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.page.update') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="page_title" class="form-label">Page ID</label>
                            <input type="text" class="form-control" name="page_id" value="{{ $pageData->page_id }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="page_title" class="form-label">Page Title</label>
                            <input type="text" class="form-control" name="page_title" value="{{ $pageData->page_title }}" >
                        </div>
                        <div class="mb-3">
                            <label for="page_description" class="form-label">Page Description</label>
                            <textarea class="form-control" name="page_description" rows="5" placeholder="">{{ $pageData->page_description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="page_url" class="form-label">Page URL</label>
                            <input type="text" class="form-control" name="page_url" value="{{ $pageData->page_url }}" >
                        </div>
                        <div class="mb-3">
                            <label for="page_type" class="form-label">Page Type</label>
                            <select name="page_type" >
                                <option value="{{$pageData->page_type}}" selected>{{$pageData->page_type}}</option>
                                @foreach(config('sitevariables.page_type') as $pt)
                                    <option value="{{$pt}}">{{$pt}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_status" class="form-label">Page Status</label>
                            <select name="page_status" >
                                <option {{ $pageData->page_status }}>{{ $pageData->page_status }}</option>
                                <option value="draft">draft</option>
                                <option value="inactive">inactive</option>
                                <option value="active">active</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="page_source" class="form-label">Page Source</label>
                            <input type="text" class="form-control" name="page_source" value="{{ $pageData->page_source }}" >
                        </div>

                        <div class="mb-3">
                            <label for="page_category" class="form-label">Page Category (Only for resource page type)</label>
                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="page_category" name="page_category"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option {{ $pageData->page_category }} selected>{{ $pageData->page_category }}</option>
                                @foreach(config('sitevariables.res_category') as $pt)
                                    <option value="{{$pt}}">{{$pt}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_subcategory" class="form-label">Sub Categories</label>
                            <select class="js-example-basic-multiple form-select select2-hidden-accessible" id="page_subcategory" name="page_subcategory[]" multiple="multiple" data-width="100%" data-select2-id="5" tabindex="-1" aria-hidden="true">

                                @php
                                    $subcategories = array_merge(config('sitevariables.sub_editor'), config('sitevariables.sub_author'), config('sitevariables.sub_researcher'), config('sitevariables.sub_reviewer'));
                                    $subcategories = array_unique($subcategories);
                                    sort($subcategories);
                                    $user_subcategories = explode(",",$pageData->page_subcategory)
                                @endphp
                                @foreach($user_subcategories as $usc)
                                    <option value="{{$usc}}" selected>{{$usc}}</option>
                                @endforeach
                                @foreach($subcategories as $sub)
                                    <option value="{{$sub}}">{{$sub}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="page_class" class="form-label">Page Classification</label>
                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="page_class" name="page_class"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value="{{$pageData->page_tags}}" selected>{{$pageData->page_tags}}</option>
                                    @foreach(config('sitevariables.sub_classification') as $sc)
                                    <option value="{{$sc}}">{{$sc}}</option>
                                @endforeach
                            </select>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="photo">Image upload</label>
                        @if(!empty($pageData->page_image_path))
                            <input class="form-control" type="file" name="page_image" id="article_photo" value="{{url('upload/admin_images/'.$pageData->page_image_path)}}">
                        @else
                            <input class="form-control" type="file" name="page_image" id="article_photo">
                        @endif
                    </div>

                    <div class="mb-3">
                        <img id="showImage" class="wd-xl-100" src="{{ (!empty($pageData->page_image_path)) ? url('upload/admin_images/'.$pageData->page_image_path) : url('upload/admin_images/placeholder.jpg')}}" alt="Page Image">
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
                          <button class="btn btn-primary" type="submit">Update Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
