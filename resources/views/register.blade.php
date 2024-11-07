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
                        <a href="{{route('login')}}">Login</a>
                        {{-- <a href="{{route('login')}}"class="btn btn-danger">login</a> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{route('registerSave')}}" method="post">
                            <!-- Name Field -->
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name"  id="username" placeholder="Enter your name" >
                            </div>
                            
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter your email" >
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control"name="password" id="userpassword" placeholder="Enter your password" required>
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control"name="password_confirmation" id="userpassword" placeholder="Confirm your password" required>
                            </div>
                             <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" id="userage" placeholder="Enter your Age" required>
                            </div>
                             <div class="mb-3">
                                <label for="role" class="form-label">role</label>
                                <input type="text" class="form-control" name="role" id="userrole" placeholder="Enter your role" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
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
