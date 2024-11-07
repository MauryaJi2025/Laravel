<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                    dashboard inner page
                    <a href="{{route('dashboard')}}" class="btn btn-danger">Go to dashboard</a>
                    <a href="{{route('logout')}}" class="btn btn-danger">logout</a>
                    {{-- <h2>Welcome,{{Auth::user()->name}}</h2>
                    <a href="{{route('inner')}}" class="btn btn-danger">Go to inner Page</a>
                    <a href="{{route('logout')}}" class="btn btn-danger">Logout</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN (for optional Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
