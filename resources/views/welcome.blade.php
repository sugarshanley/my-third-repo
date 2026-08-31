<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel with Bootstrap</title>

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap-lux.min.css') }}">
</head>

<body>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ACT Laravel App</a>
        </div>
    </nav>

    <!-- Bootstrap Container -->
    <div class="container my-5">
        <div class="p-5 mb-4 bg-light rounded-3 border">
            <div class="container-fluid py-3">

                <h1 class="display-5 fw-bold text-primary">
                    Bootstrap Successfully Integrated!
                </h1>

                <p class="col-md-8 fs-4">
                    This Laravel application is now styled using local
                    Bootstrap CSS and JS files located in the public directory.
                </p>

                <button class="btn btn-primary btn-lg" type="button">
                    Test Button
                </button>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>