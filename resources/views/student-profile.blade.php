<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile | ACT Laravel App</title>

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

        .profile-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .student-id {
            font-size: 28px;
            font-weight: bold;
            color: #0d6efd;
        }

        .description {
            color: #6c757d;
            margin-top: 15px;
        }
    </style>
</head>

<body>

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
                    <a class="nav-link" href="/course/act/subject/act102">Subject Details</a>
                    <a class="nav-link" href="/grades">Grades</a>
                    <a class="nav-link" href="/department/101">Department</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-container">
        <h1 class="page-title">Student Profile</h1>

        <div class="profile-card">
            <h4 class="mb-4">Student Information</h4>

            <p class="mb-2">Student ID:</p>

            <div class="student-id">{{ $studentId }}</div>

            <p class="description">
                This student ID was passed through a Laravel route parameter.
            </p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
