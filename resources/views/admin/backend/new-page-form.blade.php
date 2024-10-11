<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Page</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.page.store') }}" class="forms-sample">
                @csrf
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
                            <input type="text" class="form-control" name="page_type" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="page_status" class="form-label">Page Status</label>
                            <select name="page_status" >
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
                            <label class="form-label" for="page_image">Image upload</label>
                            <input class="form-control" type="file" name="page_image">
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
                          <button class="btn btn-primary" type="submit">Create Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
