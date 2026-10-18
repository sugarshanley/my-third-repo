<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Portal</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            color: #263445;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .site-header {
            background: #172b4d;
            color: white;
            padding: 18px 0;
        }

        .site-title {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
        }

        .site-subtitle {
            margin-top: 4px;
            color: #d5ddeb;
            font-size: 12px;
        }

        .home-link {
            color: white;
            text-decoration: none;
            border: 1px solid #b9c5d5;
            border-radius: 4px;
            padding: 8px 12px;
        }

        .home-link:hover {
            color: white;
            background: #263f68;
        }

        .page-container {
            max-width: 850px;
            margin: 35px auto;
            padding: 0 15px;
        }

        .page-heading {
            margin-bottom: 22px;
        }

        .page-heading h1 {
            margin-bottom: 8px;
            font-size: 28px;
            font-weight: 700;
            color: #172b4d;
        }

        .page-heading p {
            color: #657184;
            line-height: 1.6;
        }

        .form-panel {
            background: white;
            border: 1px solid #dce2e9;
            border-radius: 6px;
        }

        .form-panel-header {
            padding: 17px 22px;
            border-bottom: 1px solid #dce2e9;
        }

        .form-panel-header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
        }

        .form-panel-body {
            padding: 22px;
        }

        .form-label {
            margin-bottom: 7px;
            font-weight: 600;
            color: #344256;
        }

        .required {
            color: #c0392b;
        }

        .form-control,
        .form-select {
            min-height: 42px;
            border: 1px solid #ccd4df;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #5276a5;
            box-shadow: 0 0 0 2px rgba(82, 118, 165, .12);
        }

        .field-group {
            margin-bottom: 19px;
        }

        .field-help {
            margin-top: 5px;
            color: #737f90;
            font-size: 12px;
        }

        .btn-submit {
            padding: 11px 18px;
            background: #172b4d;
            color: white;
            border: 1px solid #172b4d;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
        }

        .btn-submit:hover {
            background: #263f68;
            color: white;
        }

        .page-footer {
            margin-top: 35px;
            padding: 18px 0;
            border-top: 1px solid #dce2e9;
            color: #737f90;
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 576px) {
            .page-container {
                margin-top: 25px;
            }

            .page-heading h1 {
                font-size: 24px;
            }

            .form-panel-body {
                padding: 17px;
            }
        }
    </style>
</head>

<body>

<header class="site-header">
    <div class="container d-flex justify-content-between align-items-center gap-3">
        <div>
            <h1 class="site-title">ACT Laravel App</h1>
            <div class="site-subtitle">Student Enrollment Portal</div>
        </div>

        <a href="{{ route('home') }}" class="home-link">Home</a>
    </div>
</header>

<main class="page-container">

    <div class="page-heading">
        <h1>Student Enrollment</h1>
        <p>Please complete the form below. All fields are required.</p>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Please check the following fields:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="form-panel">
        <div class="form-panel-header">
            <h2>Enrollment Information</h2>
        </div>

        <div class="form-panel-body">

            <form action="{{ route('enrollment.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 field-group">
                        <label for="first_name" class="form-label">
                            First Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            class="form-control @error('first_name') is-invalid @enderror"
                            value="{{ old('first_name') }}"
                            placeholder="Enter first name"
                            required
                        >

                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 field-group">
                        <label for="last_name" class="form-label">
                            Last Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            class="form-control @error('last_name') is-invalid @enderror"
                            value="{{ old('last_name') }}"
                            placeholder="Enter last name"
                            required
                        >

                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @error('fullname')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 field-group">
                        <label for="student_id" class="form-label">
                            Student ID <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="student_id"
                            name="student_id"
                            class="form-control @error('student_id') is-invalid @enderror"
                            value="{{ old('student_id') }}"
                            placeholder="2026-01234"
                            pattern="[0-9]{4}-[0-9]{5}"
                            maxlength="10"
                            required
                        >

                        <div class="field-help">Format: YYYY-XXXXX</div>

                        @error('student_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 field-group">
                        <label for="track" class="form-label">
                            Course Track <span class="required">*</span>
                        </label>

                        <select
                            id="track"
                            name="track"
                            class="form-select @error('track') is-invalid @enderror"
                            required
                        >
                            <option value="">Select Track</option>

                            <option value="web"
                                {{ old('track') == 'web' ? 'selected' : '' }}>
                                Web Development
                            </option>

                            <option value="network"
                                {{ old('track') == 'network' ? 'selected' : '' }}>
                                Network Administration
                            </option>
                        </select>

                        @error('track')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 field-group">
                        <label for="email" class="form-label">
                            Email Address <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            placeholder="student@example.com"
                            required
                        >

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 field-group">
                        <label for="units" class="form-label">
                            Units to Enroll <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            id="units"
                            name="units"
                            class="form-control @error('units') is-invalid @enderror"
                            value="{{ old('units') }}"
                            placeholder="3 to 21"
                            min="3"
                            max="21"
                            step="1"
                            required
                        >

                        @error('units')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                            value="1"
                            class="form-check-input @error('terms') is-invalid @enderror"
                            {{ old('terms') ? 'checked' : '' }}
                            required
                        >

                        <label for="terms" class="form-check-label">
                            I agree to the enrollment terms and conditions.
                        </label>

                        @error('terms')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn-submit">
                    Submit Enrollment Application
                </button>

            </form>
        </div>
    </section>

    <footer class="page-footer">
        ACT Laravel App · Student Enrollment Portal
    </footer>

</main>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
