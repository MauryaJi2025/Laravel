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
                        <h3>login</h3>
                        <a href="{{route('register')}}" class="btn btn-danger">Register</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('loginMatch')}}" method="post">
                            <!-- Name Field -->
                            @csrf                            
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter your email" required>
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control"name="password" id="userpassword" placeholder="Enter your password" required>
                            </div>
                            <!-- Confirm Password Field -->
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
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
