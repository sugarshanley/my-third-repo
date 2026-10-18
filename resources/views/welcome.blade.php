<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ACT Laravel App | Student Enrollment</title>

    <link
        href="{{ asset('css/bootstrap.min.css') }}"
        rel="stylesheet"
    >

    <style>
        :root {
            --navy: #172b4d;
            --gold: #c9a04a;
            --cream: #faf9f6;
        }

        body {
            margin: 0;
            background: var(--cream);
            color: var(--navy);
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background: #343a40;
            padding: 18px 0;
        }

        .navbar-brand {
            color: white;
            font-size: 21px;
            font-weight: 800;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: var(--gold);
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .nav-link:hover {
            color: var(--gold);
        }

        .hero {
            margin-top: 45px;
            padding: 55px 45px;
            border-radius: 14px;
            background: #f0f1f3;
        }

        .hero h1 {
            margin-bottom: 20px;
            font-size: clamp(30px, 5vw, 46px);
            font-weight: 800;
        }

        .hero p {
            max-width: 700px;
            color: #667085;
            font-size: 17px;
            line-height: 1.8;
        }

        .btn-enrollment {
            display: inline-block;
            margin-top: 18px;
            padding: 14px 22px;
            border: 0;
            border-radius: 7px;
            background: var(--navy);
            color: white;
            font-weight: 700;
            text-decoration: none;
            transition: .2s;
        }

        .btn-enrollment:hover {
            background: var(--gold);
            color: var(--navy);
        }

        .feature-card {
            height: 100%;
            padding: 25px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            background: white;
        }

        .feature-card h2 {
            font-size: 20px;
            font-weight: 800;
        }

        .feature-card p {
            color: #667085;
            line-height: 1.7;
        }

        footer {
            margin-top: 60px;
            padding: 25px;
            background: #343a40;
            color: white;
            text-align: center;
        }

        @media (max-width: 576px) {
            .hero {
                padding: 30px 22px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar">
        <div class="container d-flex flex-wrap
                    justify-content-between align-items-center gap-3">

            <a href="{{ route('home') }}" class="navbar-brand">
                ACT LARAVEL APP
            </a>

            <div class="d-flex flex-wrap align-items-center gap-3">
                <a href="{{ route('home') }}" class="nav-link">
                    Home
                </a>

                <a href="{{ route('enrollment.create') }}" class="nav-link">
                    Enrollment
                </a>
            </div>

        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container">

        <section class="hero">
            <h1>Student Enrollment Portal</h1>

            <p>
                Welcome to the ACT Laravel application.
                Complete the student enrollment form to enter your
                information and validate your enrollment details.
            </p>

            <a href="{{ route('enrollment.create') }}"
               class="btn-enrollment">
                Open Enrollment Form
            </a>
        </section>

        <!-- FEATURES -->
        <section class="row g-4 mt-4">

            <div class="col-md-6">
                <div class="feature-card">
                    <h2>Student Information</h2>

                    <p>
                        Enter your full name, student ID, course track,
                        and email address through the enrollment form.
                    </p>

                    <a href="{{ route('enrollment.create') }}"
                       class="btn-enrollment">
                        Start Enrollment
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="feature-card">
                    <h2>Form Validation</h2>

                    <p>
                        The application checks required fields and
                        validates the submitted information using
                        Laravel Form Request validation.
                    </p>

                    <a href="{{ route('enrollment.create') }}"
                       class="btn-enrollment">
                        Try the Form
                    </a>
                </div>
            </div>

        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <p class="mb-1">ACT Laravel App</p>
        <small>Student Enrollment Portal · Laravel and Bootstrap</small>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
