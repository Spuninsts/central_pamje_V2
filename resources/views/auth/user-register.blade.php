@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="cen-breadcrumbs">Home</a></li>
                        <li class="breadcrumb-item active cen-breadcrumbs" aria-current="page">Registration</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header cen-bg-darkblue text-white">
                        <h4 class="mb-0">Join Our Team</h4>
                    </div>
                    <div class="card-body cen-bg-darkgrey">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h2>Become Part of Our Academic Community</h2>
                                <p>We invite qualified professionals to join our team. Register as a reviewer or editor to contribute to academic excellence in our publications.</p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-header bg-light">
                                        <h4 class="mb-0 cen-font-darkblue">Reviewer</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>As a reviewer, you'll evaluate manuscripts within your area of expertise and provide valuable feedback to authors.</p>
                                        <ul>
                                            <li>Stay current with latest research</li>
                                            <li>Develop critical analysis skills</li>
                                            <li>Expand your professional network</li>
                                            <li>Contribute to scientific knowledge</li>
                                        </ul>
                                    </div>
                                    <div class="card-footer bg-light text-center">
                                        <button type="button" class="btn cen-btn-darkblue text-white" data-bs-toggle="modal" data-bs-target="#reviewerRegistrationModal">
                                            Register as a Reviewer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-header bg-light">
                                        <h4 class="mb-0 cen-font-darkblue">Editor</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>As an editor, you'll guide the peer-review process and make important decisions about manuscript publications.</p>
                                        <ul>
                                            <li>Shape the direction of scientific discourse</li>
                                            <li>Work with leading researchers</li>
                                            <li>Ensure publication quality</li>
                                            <li>Enhance your academic standing</li>
                                        </ul>
                                    </div>
                                    <div class="card-footer bg-light text-center">
                                        <button type="button" class="btn cen-btn-darkblue text-white" data-bs-toggle="modal" data-bs-target="#editorRegistrationModal">
                                            Register as an Editor
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <h5><i class="fas fa-info-circle me-2"></i>Registration Process</h5>
                                    <p>After submitting your registration form, our editorial team will review your qualifications. This process typically takes 3-5 business days. You will receive an email notification once your account has been reviewed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the registration modals -->
    @include('components.user-registration-modals')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Display validation errors in modal if they exist
            @if($errors->any())
            @if(old('user_type') == 'reviewer')
            $('#reviewerRegistrationModal').modal('show');
            @elseif(old('user_type') == 'editor')
            $('#editorRegistrationModal').modal('show');
            @endif
            @endif
        });
    </script>
@endsection
