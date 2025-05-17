{{--@extends('layouts.app')--}}

<!doctype html>
<html lang="en">
<!---head codes for css, bootstrap-->
@include('frontend.partials.frontendhead')
<body>
<!---header code -->
@include('frontend.partials.frontendheader')

<!---main body-->


<main>
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header cen-bg-darkblue text-white">
                        <h4 class="mb-0 text-white">Registration Successful</h4>
                    </div>
                    <div class="card-body cen-bg-darkgrey">
                        <div class="text-center mb-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        </div>

                        <h3 class="text-center mb-4">Thank You for Registering as a {{ ucfirst($userType) }}</h3>

                        <div class="alert alert-info">
                            <p>Your registration has been submitted successfully and is currently pending approval by our administrators.</p>
                            <p>You will receive an email notification once your account has been reviewed.</p>
                        </div>

                        @if($userType == 'reviewer')
                            <div class="mt-4 mb-4">
                                <h5 class="cen-font-darkblue">What's Next?</h5>
                                <ul>
                                    <li>Our editorial team will review your qualifications</li>
                                    <li>Once approved, you'll be able to access the reviewer portal</li>
                                    <li>You'll start receiving manuscript review invitations based on your areas of expertise</li>
                                </ul>
                            </div>
                        @elseif($userType == 'editor')
                            <div class="mt-4 mb-4">
                                <h5 class="cen-font-darkblue">What's Next?</h5>
                                <ul>
                                    <li>Our senior editorial board will review your application</li>
                                    <li>Once approved, you'll be able to access the editor portal</li>
                                    <li>You'll receive an orientation on our editorial processes and workflows</li>
                                    <li>You'll be assigned to manuscripts matching your expertise</li>
                                </ul>
                            </div>
                        @endif

                        <div class="text-center mt-4">
                            <p>Please contact <a href="mailto:support@journal.com" class="cen-font-darkblue cen-link-hover-blue">secretariat@pamje.org</a> if you have any questions.</p>
                            <a href="{{ route('main') }}" class="btn cen-btn-darkblue text-white mt-3">Return to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>>

<!--footer-->
@include('frontend.partials.frontendfooter')

</body>
</html>
