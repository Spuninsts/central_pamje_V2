<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Banner</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.banner.store') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="banner_title" class="form-label">Banner ID</label>
                            <input type="text" class="form-control" name="banner_id" value="{{ $recordID }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="banner_title" class="form-label">Banner Title</label>
                            <input type="text" class="form-control" name="banner_title" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="banner_description" class="form-label">Banner Description</label>
                            <textarea class="form-control" name="banner_description" rows="5" placeholder="max of 100 words"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="publisher" class="form-label">Banner Link</label>
                            <select class="js-example-basic-single form-select select2-hidden-accessible" id="dynamicSelect" name="banner_url"  data-width="100%" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value="" selected>Select an existing Page</option>
                                @foreach($pageData as $page)
                                    <option value="/admin/page/edit?val={{$page->page_id}}" >{{$page->page_title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Banner Url" id="newItemInput">
                            <button class="btn btn-primary" type="button" id="addNewItem">Add URL instead</button>
                        </div>

                        <div class="mb-3">
                            <label for="banner_status" class="form-label">Banner Status</label>
                            <select name="banner_status" >
                                <option value="draft" selected>draft</option>
                                <option value="inactive">inactive</option>
                                <option value="active">active</option>
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
                            <label class="form-label" for="banner_image">Image upload</label>
                            <input class="form-control" type="file" name="banner_image" id="article_photo">
                        </div>
                    <div class="mb-3">
                        <img id="showImage" class="img-fluid" src="{{ url('upload/admin_images/placeholder.jpg') }}" alt="Banner Picture">
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
                          <button class="btn btn-primary" type="submit">Create Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
