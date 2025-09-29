<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?= $this->include('templates/header') ?>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center p-4">
                        <h2 class="fw-bold text-primary">Welcome Back!</h2>
                        <p class="text-muted">
                            Hello, <span class="fw-semibold"><?= esc($name) ?></span> <br>
                            <small class="badge bg-success">Role: <?= esc($role) ?></small>
                        </p>

                        <!-- Role-based actions -->
                        <?php if ($role === 'admin'): ?>
                            <div class="d-grid gap-3 mt-4">
                                <a href="#" class="btn btn-primary btn-lg">Manage Users</a>
                                <a href="#" class="btn btn-outline-primary btn-lg">System Settings</a>
                                <a href="#" class="btn btn-outline-secondary btn-lg">Reports</a>
                            </div>
                        <?php elseif ($role === 'instructor'): ?>
                            <div class="d-grid gap-3 mt-4">
                                <a href="#" class="btn btn-primary btn-lg">My Courses</a>
                                <a href="#" class="btn btn-outline-primary btn-lg">Grade Submissions</a>
                                <a href="#" class="btn btn-outline-secondary btn-lg">Course Reports</a>
                            </div>
                        <?php elseif ($role === 'student'): ?>
                            <div class="d-grid gap-3 mt-4">
                                <a href="#" class="btn btn-primary btn-lg">My Subject</a>
                                <a href="#" class="btn btn-outline-primary btn-lg">Browse Courses</a>
                                <a href="#" class="btn btn-outline-primary btn-lg">My Enrollments</a>
                                <a href="#" class="btn btn-outline-secondary btn-lg">My Grades</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
