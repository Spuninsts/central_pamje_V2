@extends('admin.admin-dashboard')
@section('admin')

<div class="page-content">

        <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                <div>
                    <img class="wd-70 rounded-circle" src="{{ (!empty($profileData->user_photo)) ? url('upload/admin_images/'.$profileData->user_photo) : url('upload/no_image.jpg') }}" alt="profile">
                    <span class="h4 ms-3">{{ $profileData->username }}</span>
                </div>
                </div>
                <div class="mt-3 row">
                    <div class="col-md-6">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">First Name:</label>
                        <p class="text-muted">{{ $profileData->fname }}</p>
                    </div>
                    <div class="col-md-6">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Last Name:</label>
                        <p class="text-muted">{{ $profileData->lname }}</p>
                    </div>
                </div>
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                <p class="text-muted">{{ $profileData->email }}</p>
                </div>
{{--                <div class="mt-3">--}}
{{--                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>--}}
{{--                <p class="text-muted">{{ $profileData->phone }}</p>--}}
{{--                </div>--}}
                <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                <p class="text-muted">{{ $profileData->user_address }}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                </a>
                <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

								<h6 class="card-title">Profile Form</h6>

								<form class="forms-sample"  method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Username</label>
										<input type="text" name="username" class="form-control" id="username" autocomplete="off" value="{{ $profileData->username }}">
									</div>
                                    <div class="mb-3 row">
                                        <div class="col-md-6">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control" id="first_name" autocomplete="off" value="{{ $profileData->fname }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" autocomplete="off" value="{{ $profileData->lname }}">
                                        </div>
                                    </div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email address</label>
										<input type="email" name="email" class="form-control" id="email" autocomplete="off" value="{{ $profileData->email }}">
									</div>
{{--                                    <div class="mb-3">--}}
{{--										<label for="exampleInputUsername1" class="form-label">Phone</label>--}}
{{--										<input type="text" name="phone" class="form-control" id="phone" autocomplete="off" value="{{ $profileData->phone }}">--}}
{{--									</div>--}}
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Address</label>
										<input type="text" name="address" class="form-control" id="address" autocomplete="off" value="{{ $profileData->user_address }}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Photo</label>
										<input type="file" name="photo" class="form-control" id="photo" autocomplete="off" value="{{ $profileData->user_photo }}">
									</div>

                                    <div class="mb-3">
									    <img class="wd-80 rounded-circle" id="showImage" src="{{ (!empty($profileData->user_photo)) ? url('upload/admin_images/'.$profileData->user_photo) : url('upload/no_image.jpg') }}" alt="profile">
                                    </div>
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
								</form>

              </div>
            </div>
            </div>
        </div>
        <!-- middle wrapper end -->
        </div>

    </div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#photo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
            });
    });

</script>

@endsection
