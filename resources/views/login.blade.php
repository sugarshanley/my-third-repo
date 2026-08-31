<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TaskFlow Login</title>

    <!-- Bootswatch Lux Theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-lux.min.css') }}">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                TaskFlow
            </a>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-md-8 col-lg-5">

                <div class="card shadow border-0">
                    <div class="card-body p-5">

                        <!-- Branding -->
                        <div class="text-center mb-4">
                            <h1 class="h2 fw-bold">Welcome Back!</h1>
                            <p class="text-muted">
                                Sign in to continue to TaskFlow
                            </p>
                        </div>

                        <!-- Login Form -->
                        <form>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="name@example.com"
                                >
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Enter your password"
                                >
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-4">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember"
                                >

                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>

                            <!-- Login Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>
                            </div>

                        </form>

                        <!-- Optional Footer -->
                        <div class="text-center mt-4">
                            <small class="text-muted">
                                Your tasks. Organized. Simplified.
                            </small>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>