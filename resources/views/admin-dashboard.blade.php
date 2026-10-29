<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ACT Laravel App</title>

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

        .dashboard-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .dashboard-icon {
            font-size: 42px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ACT LARAVEL APP</a>
        </div>
    </nav>

    <main class="page-container">
        <h1 class="fw-bold mb-4">Admin Dashboard</h1>

        <div class="dashboard-card">
            <div class="dashboard-icon">🛡️</div>

            <h3>Welcome, Administrator!</h3>

            <p class="text-secondary">
                You have successfully accessed the protected Admin Dashboard.
            </p>

            <div class="alert alert-success mb-0">
                Access granted. Your middleware check passed.
            </div>
        </div>
    </main>

</body>
</html>