<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT Portal - Student Enrollment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0">Student Enrollment Portal</h4>
                </div>

                <div class="card-body p-4">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p class="text-muted">
                        Please complete the student enrollment form.
                    </p>

                    <form action="{{ url('/enrollment') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" id="fullname"
                                   class="form-control @error('fullname') is-invalid @enderror"
                                   value="{{ old('fullname') }}"
                                   placeholder="Juan Dela Cruz">
                            @error('fullname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student ID</label>
                            <input type="text" name="student_id" id="student_id"
                                   class="form-control @error('student_id') is-invalid @enderror"
                                   value="{{ old('student_id') }}"
                                   placeholder="2026-01234">
                            @error('student_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="track" class="form-label">Course Track</label>
                            <select name="track" id="track"
                                    class="form-select @error('track') is-invalid @enderror">
                                <option value="">Select Track</option>
                                <option value="web" @selected(old('track') === 'web')>
                                    Web Development
                                </option>
                                <option value="network" @selected(old('track') === 'network')>
                                    Network Administration
                                </option>
                            </select>
                            @error('track')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}"
                                   placeholder="student@example.com">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="units" class="form-label">Units to Enroll</label>
                            <input type="number" name="units" id="units"
                                   class="form-control @error('units') is-invalid @enderror"
                                   value="{{ old('units') }}"
                                   placeholder="3 to 21">
                            @error('units')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" name="terms" id="terms"
                                       value="1"
                                       class="form-check-input @error('terms') is-invalid @enderror"
                                       @checked(old('terms'))>
                                <label for="terms" class="form-check-label">
                                    I agree to the enrollment terms and conditions
                                </label>
                                @error('terms')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Submit Enrollment Application
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
