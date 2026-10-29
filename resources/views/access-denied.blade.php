<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied | ACT Laravel App</title>

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

        .page-container {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .denied-card {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 35px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .denied-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ACT LARAVEL APP</a>
        </div>
    </nav>

    <main class="page-container">
        <div class="denied-card">
            <div class="denied-icon">🚫</div>

            <h1 class="text-danger fw-bold">Access Denied</h1>

            <p class="text-secondary mt-3">
                You do not have permission to access the Admin Dashboard.
            </p>

            <p>Please provide the required administrator role to continue.</p>

            <a href="/" class="btn btn-primary mt-2">Return to Home</a>
        </div>
    </main>

</body>
</html>