<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="CENTRAL Admin Login">
	<meta name="author" content="">
	<meta name="keywords" content="Central Admin login">
	<title>CENTRAL - Admin Login Page</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../upload/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('../upload/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../upload/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  

    @include('admin.body.css')

</head>
<body>
<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-50 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card ">
							<div class="row">
                <div class="col-md-12 ps-md-0 ">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="{{ route('dashboard') }}" class="noble-ui-logo logo-light d-block mb-2 text-center">
                      <img src=" {{ asset('../upload/logo1-3-transparent.png') }}"  class="logo w-50"/></a>
                    
                       <h5 class="text-muted fw-normal my-4 text-center">Welcome back! Log in to your account.</h5>

                      <form class="forms-sample"  method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="m-3">
                          <label for="userEmail" class="form-label">Email/User ID</label>
                          <input type="text"  name="login" class="form-control" id="login" placeholder="Email/Username">
                        </div>
                        <div class="m-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="form-check m-3">
                          <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                          <label class="form-check-label" for="remember_me">
                            Remember me
                          </label>
                        </div>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0 px-5">
                          Login
                          </button>
                        </div>
                        <!-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
                      </form>
                  </div>
                </div>
                
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	@include('admin.body.scripts')


</body>
</html>
