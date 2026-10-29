<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Information | ACT Laravel App</title>

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

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
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

        .department-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .department-number {
            font-size: 28px;
            font-weight: bold;
            color: #0d6efd;
        }

        .status-badge {
            display: inline-block;
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 8px 14px;
            border-radius: 6px;
            font-weight: bold;
        }

        .description {
            color: #6c757d;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ACT LARAVEL APP</a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/enrollment">Enrollment</a>
                    <a class="nav-link" href="/student/2026-00123">Student Profile</a>
                    <a class="nav-link" href="/course/act/subject/act102">Subject Details</a>
                    <a class="nav-link" href="/grades">Grades</a>
                    <a class="nav-link active" href="/department/101">Department</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-container">
        <h1 class="page-title">Department Information</h1>

        <div class="department-card">
            <h4 class="mb-4">Department Details</h4>

            <p class="mb-2">Department ID</p>

            <div class="department-number">
                #{{ $departmentId }}
            </div>

            <hr class="my-4">

            <p class="mb-2">Department Status</p>

            <span class="status-badge">Valid and Active</span>

            <p class="description">
                This page demonstrates a numeric route constraint in Laravel.
                Only department IDs containing numbers are accepted by this route.
            </p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>