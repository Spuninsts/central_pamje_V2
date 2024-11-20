<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Organization</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.organization.store') }}" class="forms-sample">
                @csrf
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="entity_type" value="organization">
                        </div>
                        <div class="mb-3">
                            <label for="journal_id" class="form-label">Organization ID</label>
                            <input type="text" class="form-control" name="organization_id" value="{{$NewOrgID}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="organization_title" class="form-label">Organization Name *</label>
                            <input type="text" class="form-control" name="organization_name"  required>
                        </div>
                        <div class="mb-3">
                            <label for="organization_description" class="form-label">Organization Description</label>
                            <textarea class="form-control" name="organization_description" rows="5" placeholder="max of 100 words"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="organization_url" class="form-label">Organization URL</label>
                            <input type="text" class="form-control" name="organization_url" placeholder="">
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
                          <button class="btn btn-primary" type="submit">Create Organization</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
