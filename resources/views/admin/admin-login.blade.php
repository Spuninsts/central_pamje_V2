
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRAL - Admin Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    @include('admin.body.css')

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
        <div class="card p-4 shadow-lg bg-color" style="width: 400px;">
            <div class="d-flex justify-content-center mb-1">
                <img src=" {{ asset('../upload/central-logo.svg') }}"  class="logo w-150"/>
            </div>
            <h5 class="text-center mb-4 text-secondary">PEER REVIEWER LOGIN PAGE</h5>
            <form class="forms-sample"  method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group">
                    <label for="userEmail" class="form-label">Email / User ID</label>
                    <input type="text" class="form-control" id="login" placeholder="Email/Username">

                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password">

                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn-signin btn-lg btn-block text-white">Login</button>


            </form>

        </div>
    </div>

    @include('admin.body.scripts')

</body>
</html>
