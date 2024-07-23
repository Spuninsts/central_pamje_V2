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

            <form method="POST" action="{{ route('admin.banner.store') }}" class="forms-sample">
                @csrf
                        <div class="mb-3">
                            <label for="banner_title" class="form-label">Banner Title</label>
                            <input type="text" class="form-control" name="banner_title" autocomplete="off" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="banner_description" class="form-label">Banner Description</label>
                            <textarea class="form-control" name="banner_description" rows="5" placeholder="max of 100 words"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="banner_url" class="form-label">Banner URL</label>
                            <input type="text" class="form-control" name="banner_url" placeholder="">
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
                            <input class="form-control" type="file" name="banner_image">
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
