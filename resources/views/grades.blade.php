<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades | ACT Laravel App</title>

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

        .grades-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .semester-badge {
            display: inline-block;
            background-color: #e8f0ff;
            color: #0d6efd;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .table thead th {
            background-color: #192f53;
            color: white;
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
                    <a class="nav-link active" href="/grades">Grades</a>
                    <a class="nav-link" href="/department/101">Department</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Grades Content -->
    <main class="page-container">
        <h1 class="page-title">Student Grades</h1>

        <div class="grades-card">
            <h4 class="mb-3">Academic Information</h4>

            <p class="mb-2">Grading Period</p>

            <div class="semester-badge">
                {{ $term }}
            </div>

            <h5 class="mb-3">Grade Summary</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Grade</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>ACT101</td>
                            <td>Introduction to Computing</td>
                            <td>1.25</td>
                        </tr>
                        <tr>
                            <td>ACT102</td>
                            <td>Computer Programming</td>
                            <td>1.50</td>
                        </tr>
                        <tr>
                            <td>ACT103</td>
                            <td>Web Development</td>
                            <td>1.75</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="description">
                This page demonstrates an optional route parameter in Laravel.
                The grading period is supplied through the URL.
            </p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>