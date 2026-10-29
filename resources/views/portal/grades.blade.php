<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Portal | ACT Laravel App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                ACT Laravel App
            </a>
            <span class="navbar-text text-white">
                Student Grade Portal
            </span>
        </div>
    </nav>

    <main class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <div class="display-5 mb-2">🎓</div>
                            <h2 class="fw-bold">Student Grade Report</h2>
                            <p class="text-muted">
                                Registrar's Office — Academic Records
                            </p>
                        </div>

                        <hr>

                        <div class="row mb-4">
                            <div class="col-sm-6 mb-3">
                                <div class="text-muted small">STUDENT ID</div>
                                <div class="fs-5 fw-semibold">
                                    {{ $studentId }}
                                </div>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <div class="text-muted small">SEMESTER</div>
                                <div class="fs-5 fw-semibold">
                                    {{ $semester }}
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3">Grade Summary</h5>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject</th>
                                        <th class="text-center">Grade</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>ACT101</td>
                                        <td>Introduction to Computing</td>
                                        <td class="text-center fw-bold">1.25</td>
                                    </tr>

                                    <tr>
                                        <td>ACT102</td>
                                        <td>Computer Programming</td>
                                        <td class="text-center fw-bold">1.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="alert alert-info mt-4 mb-0" role="alert">
                            <strong>Note:</strong> The grades shown are sample data
                            for demonstration purposes only.
                        </div>

                        <div class="text-center mt-4">
                            <a href="/" class="btn btn-outline-secondary">
                                Back to Home
                            </a>
                        </div>

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