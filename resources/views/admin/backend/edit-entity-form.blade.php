<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit {{ $entityData->ent_type }}</li>
        </ol>
    </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                                    <!-- <h6 class="card-title">Basic Form</h6> -->

                <form method="POST" action="{{ route('admin.entity.update') }}" class="forms-sample">
                    @csrf
                            <div class="mb-3">
                                <label for="entity_title" class="form-label">{{ $entityData->ent_type }} ID</label>
                                <input type="text" class="form-control" name="entity_id" value="{{ $entityData->ent_id }}" readonly>
                                <input type="hidden" class="form-control" name="entity_type" value="{{ $entityData->ent_type }}">
                            </div>
                            <div class="mb-3">
                                <label for="entity_title" class="form-label">{{ $entityData->ent_type }}  Name</label>
                                <input type="text" class="form-control" name="entity_name" value="{{ $entityData->ent_name }}" >
                            </div>
                            <div class="mb-3">
                                <label for="entity_title" class="form-label">{{ $entityData->ent_type }}  Acronym</label>
                                <input type="text" class="form-control" name="entity_acronym" value="{{ $entityData->ent_acro }}" >
                            </div>
                            <div class="mb-3">
                                <label for="entity_description" class="form-label">{{ $entityData->ent_type }} Description</label>
                                <textarea class="form-control" name="entity_description" rows="5" placeholder="">{{ $entityData->ent_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="entity_url" class="form-label">{{ $entityData->ent_type }}  URL</label>
                                <input type="text" class="form-control" name="entity_url" value="{{ $entityData->ent_url }}" >
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
                              <button class="btn btn-primary" type="submit">Update Entity</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
