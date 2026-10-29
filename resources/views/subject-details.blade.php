<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Details | ACT Laravel App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #192f53;
        }

        .navbar {
            background-color: #343a40;
            padding: 22px 0;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 600;
            margin-left: 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #a9c7ff;
        }

        .page-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .page-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .subject-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .subject-value {
            color: #0d6efd;
            font-size: 22px;
            font-weight: bold;
        }

        .description {
            color: #6c757d;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ACT LARAVEL APP</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/enrollment">Enrollment</a>
                    <a class="nav-link" href="/student/2026-00123">Student Profile</a>
                    <a class="nav-link active" href="/course/act/subject/act102">Subject Details</a>
                    <a class="nav-link" href="/grades">Grades</a>
                    <a class="nav-link" href="/department/101">Department</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Subject Details Content -->
    <main class="page-container">
        <h1 class="page-title">Subject Details</h1>

        <div class="subject-card">
            <h4 class="mb-4">Subject Information</h4>

            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Course:</strong>
                </div>
                <div class="col-md-8 subject-value">
                    {{ $course }}
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Subject Code:</strong>
                </div>
                <div class="col-md-8 subject-value">
                    {{ $code }}
                </div>
            </div>

            <p class="description">
                This page demonstrates how Laravel passes multiple route parameters
                from a URL to a controller.
            </p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>