<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access | ACT Laravel App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                ACT Laravel App
            </a>
        </div>
    </nav>

    <main class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5 text-center">

                        <div class="display-1 mb-3">🚫</div>

                        <h2 class="fw-bold text-danger mb-3">
                            Unauthorized Access
                        </h2>

                        <div class="alert alert-danger text-start" role="alert">
                            <strong>Access denied!</strong>
                            The Security Clearance Key is missing or invalid.
                            A valid key is required to access the Student Grade Portal.
                        </div>

                        <p class="text-muted">
                            Please use the correct security clearance key
                            to access the protected grade report.
                        </p>

                        <a href="/" class="btn btn-dark mt-2">
                            Back to Home
                        </a>

                    </div>
                </div>

                <p class="text-center text-muted small mt-3">
                    ACT Laravel App &copy; {{ date('Y') }}
                </p>

            </div>
        </div>

    </main>

</body>
</html>