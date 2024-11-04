<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Organization</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.organization.update') }}" class="forms-sample">
                @csrf
                        <div class="mb-3">
                            <label for="organization_title" class="form-label">Organization ID</label>
                            <input type="text" class="form-control" name="organization_id" value="{{ $organizationData->org_id }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="organization_title" class="form-label">Organization Title</label>
                            <input type="text" class="form-control" name="organization_title" value="{{ $organizationData->org_title }}" >
                        </div>
                        <div class="mb-3">
                            <label for="organization_description" class="form-label">organization Description</label>
                            <textarea class="form-control" name="organization_description" rows="5" placeholder="">{{ $organizationData->org_description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="organization_url" class="form-label">organization URL</label>
                            <input type="text" class="form-control" name="organization_url" value="{{ $organizationData->org_url }}" >
                        </div>
                        <div class="mb-3">
                            <label for="organization_status" class="form-label">organization Status</label>
                            <select name="organization_status" >
                                <option {{ $organizationData->org_status }}>{{ $organizationData->org_status }}</option>
                                <option value="draft">draft</option>
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
                            <label class="form-label" for="organization_image">Image upload</label>
                            <input class="form-control" type="file" name="organization_image">
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
                          <button class="btn btn-primary" type="submit">Update Organization</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
