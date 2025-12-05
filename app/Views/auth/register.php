<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-12 col-md-7 col-lg-6">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4 bg-dark">
            <h4 class="mb-3 text-center text-white">Create an account</h4>

           <?php if(isset($validation)): ?>
            <div class="alert alert-danger">
              <?= $validation->listErrors() ?>
            </div>
          <?php endif; ?>


            <form action="<?= base_url('register') ?>" method="post" novalidate>
              <div class="row g-2">
                <div class="mb-3">
                  <label for="firstname" class="form-label text-white">Username</label>
                    <input name="fisrtname" type="text" class="form-control bg-dark text-white border border-white custom-focus" required>
                </div>
                
              <div class="mb-3">
                <label for="email" class="form-label text-white">Email address</label>
                 <input name="email" type="email" class="form-control bg-dark text-white border border-white custom-focus" required>
              </div>

              <div class="row g-2">
                <div class="col-md-6 mb-3">
                  <label for="password" class="form-label text-white">Password</label>
                  <input name="password" type="password" class="form-control bg-dark text-white border border-white custom-focus" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="password_confirm" class="form-label text-white">Confirm Password</label>
                  <input id="password_confirm" name="password_confirm" type="password" class="form-control bg-dark text-white border border-white custom-focus" required>
                </div>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label text-white" for="terms">I agree to the terms and privacy</label>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>

            <div class="text-center mt-3">
                      <p class="mb-0 text-white">
                          Don't have an account?
                          <a href="<?= base_url('login') ?>" class="text-primary fw-bold">
                              Login
                          </a>
                      </p>
                    </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>