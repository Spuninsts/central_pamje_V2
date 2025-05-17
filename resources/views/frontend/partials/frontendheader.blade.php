<header class="pt-3 ">
    <div class="container d-flex flex-wrap align-self-center mb-1 w-100">
        <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="{{ asset('frontend/img/central-logo.svg') }}" alt="Central Logo" width="150" height="150">
        </a>


        <form method="GET" action="{{ route('main.search') }}" class="col-12 col-lg-auto mb-3 mb-lg-0 align-self-end " >
            <input type="search" class="form-control mb-2" placeholder="Search..." id="query"  name="query" aria-label="Search">
        </form>

        <ul class="nav align-self-end mb-2">
            @if(Auth::check())
                <li class="nav-item mx-1">
                    <button type="button" class="btn btn-primary cen-btn-darkblue" data-bs-toggle="modal" data-bs-target="#userProfileModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        &nbsp;
                        Account
                    </button>
                </li>
                <li class="nav-item mx-1">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button type="button" class="btn btn-primary cen-btn-darkblue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                            &nbsp;
                            Logout
                        </button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item mx-1">
                    <a href="/login" ><button type="button" class="btn btn-primary  cen-btn-darkblue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                            &nbsp;
                            Log in</button>
                    </a>
                </li>

                <!-- Registration buttons - only shown when not logged in The modal is in frontendregmodal.blade.php -->
                <div class="d-flex gap-1">
                    <button type="button" class="btn btn-primary text-white  cen-btn-darkblue" data-bs-toggle="modal" data-bs-target="#reviewerRegistrationModal">
                        Register as a Reviewer
                    </button>
                    <button type="button" class="btn btn-primary text-white  cen-btn-darkblue" data-bs-toggle="modal" data-bs-target="#editorRegistrationModal">
                        Register as an Editor
                    </button>
                </div>
            @endif
        </ul>

    </div>


    @include('frontend.partials.frontendregmodal')

    <!-- User Profile Modal -->
    @if(Auth::check())
        <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header cen-bg-darkblue text-white">
                        <h5 class="modal-title" id="userProfileModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body cen-bg-darkgrey">
                        <form action="{{ route('profile.update') }}" method="POST" class="p-3" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <!-- Hidden Fields -->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
                            <input type="hidden" name="org_id" value="{{ Auth::user()->org_id }}">

                            <div class="row mb-4">
                                <div class="col-md-3 text-center">
                                    <div class="mb-3">
                                        @if(Auth::user()->user_photo)
                                            <img src="{{ asset('storage/'.Auth::user()->user_photo) }}" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;" alt="Profile Photo">
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle cen-font-darkblue" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_photo" class="btn btn-sm btn-outline-primary">Change Photo</label>
                                        <input type="file" class="d-none" id="user_photo" name="user_photo" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="title" class="form-label"><h5>Title</h5></label>
                                            <select class="form-select" id="title" name="title">
                                                <option value="">Select Title</option>
                                                <option value="Dr." {{ Auth::user()->title == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                                <option value="Prof." {{ Auth::user()->title == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                                <option value="Mr." {{ Auth::user()->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                                <option value="Mrs." {{ Auth::user()->title == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                                <option value="Ms." {{ Auth::user()->title == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <label for="username" class="form-label"><h5>Username</h5></label>
                                            <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="firstname" class="form-label"><h5>First Name</h5></label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="middlename" class="form-label"><h5>Middle Initial</h5></label>
                                            <input type="text" class="form-control" id="middlename" name="middlename" value="{{ Auth::user()->middlename }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="lastname" class="form-label"><h5>Last Name</h5></label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label"><h5>Email Address</h5></label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                                    <small class="text-muted">Email cannot be changed</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="user_type" class="form-label"><h5>User Type</h5></label>
                                    <input type="text" class="form-control" id="user_type" value="{{ Auth::user()->user_type }}" readonly>
                                    <small class="text-muted">User type cannot be changed</small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for="user_address" class="form-label"><h5>Address</h5></label>
                                    <textarea class="form-control" id="user_address" name="user_address" rows="2">{{ Auth::user()->user_address }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="role" class="form-label"><h5>Role</h5></label>
                                    <input type="text" class="form-control" id="role" value="{{ Auth::user()->role }}" readonly>
                                    <small class="text-muted">Role cannot be changed</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="user_status" class="form-label"><h5>Status</h5></label>
                                    <input type="text" class="form-control" id="user_status" value="{{ Auth::user()->user_status }}" readonly>
                                    <small class="text-muted">Status cannot be changed</small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for="user_spare" class="form-label"><h5>Additional Information</h5></label>
                                    <textarea class="form-control" id="user_spare" name="user_spare" rows="2">{{ Auth::user()->user_spare }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="current_password" class="form-label"><h5>Current Password</h5></label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <small class="text-muted">Required to change password</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label"><h5>New Password</h5></label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small class="text-muted">Leave blank to keep current password</small>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12 text-end">
                                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary cen-btn-darkblue">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Navigation Container -->
    <nav class="navbar navbar-expand-lg cen-bg-darkblue">
        <div class="container">

            <!-- Toggler Button for Medium and Below -->
            <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse cen-bg-darkblue " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="/">HOME</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="/aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white" href="http://www.pamje.org/">PAMJE</a>
                    </li>
                    <li class="nav-item px-3 mobile-left-align">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">JOURNALS</a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/journals/alphabet?val=all">Alphabetical</a></li>
                                {{--<li><a class="dropdown-item" href="/journals/category?va=all">By Category</a></li>--}}


                            </ul>
                        </div>
                    </li>
                    <li class="nav-item px-3 mobile-left-align">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                RESOURCES
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/resources/editors">For Editors</a></li>
                                <li><a class="dropdown-item" href="/resources/researchers">For Researchers</a></li>
                                <li><a class="dropdown-item" href="/resources/authors">For Authors</a></li>
                                <li><a class="dropdown-item" href="/resources/reviewers">For Peer Reviewers</a></li>

                            </ul>
                        </div>

                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-white " href="/newsannouncements">NEWS AND ANNOUNCEMENT</a>
                    </li>

                    <li class="nav-item px-3">
                        <a class="nav-link text-white " href="/contactus">CONTACT US</a>
                    </li>

                    @if(Auth::check())
                        <li class="nav-item px-3">
                            <a class="nav-link text-white " href="/peerauthor">PEER REVIEWERS</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
