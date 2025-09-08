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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">My Dashboard</a>
            <div class="d-flex">
                <a href="<?= site_url('/auth/logout') ?>" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

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

                        <!-- Example of dashboard options -->
                        <div class="d-grid gap-3 mt-4">
                            <a href="#" class="btn btn-primary btn-lg">View Profile</a>
                            <a href="#" class="btn btn-outline-primary btn-lg">Settings</a>
                            <a href="#" class="btn btn-outline-secondary btn-lg">Activity Logs</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
