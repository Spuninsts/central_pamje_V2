<div class="page-content">

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Publisher</li>
    </ol>
</nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                                <!-- <h6 class="card-title">Basic Form</h6> -->

            <form method="POST" action="{{ route('admin.entity.store') }}" class="forms-sample">
                @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="entity_type" value="publisher">
                        </div>
                        <div class="mb-3">
                            <label for="journal_id" class="form-label">Publisher ID</label>
                            <input type="text" class="form-control" name="entity_id" value="{{$NewPublisherID}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="publisher_title" class="form-label">Publisher Name</label>
                            <input type="text" class="form-control" name="entity_name"  >
                        </div>
                        <div class="mb-3">
                            <label for="publisher_title" class="form-label">Publisher Acronym</label>
                            <input type="text" class="form-control" name="entity_acronym"  >
                        </div>
                        <div class="mb-3">
                            <label for="publisher_description" class="form-label">Publisher Description</label>
                            <textarea class="form-control" name="entity_description" rows="5" placeholder="max of 100 words"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="publisher_url" class="form-label">Publisher URL</label>
                            <input type="text" class="form-control" name="entity_url" placeholder="">
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
                          <button class="btn btn-primary" type="submit">Create publisher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
