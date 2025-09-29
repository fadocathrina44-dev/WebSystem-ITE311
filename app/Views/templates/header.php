<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Web System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Push nav links to the right -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == '' ? 'active' : '' ?>"
                        href="<?= site_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == 'about' ? 'active' : '' ?>"
                        href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == 'contact' ? 'active' : '' ?>"
                        href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <?php if (session()->get('isLoggedIn')): ?>
                    <?php $role = session()->get('role'); ?>
                    <li class="nav-item">
                        <a class="nav-link text-primary <?= service('uri')->getPath() == 'dashboard' ? 'active' : '' ?>"
                            href="<?= site_url('dashboard') ?>">Dashboard</a>
                    </li>
                    <?php if ($role === 'student'): ?>
                        <li class="nav-item"><a class="nav-link" href="#">My Subject</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Enrollments</a></li>
                    <?php elseif ($role === 'teacher'): ?>
                        <li class="nav-item"><a class="nav-link" href="#">My Courses</a></li>
                    <?php elseif ($role === 'admin'): ?>
                        <li class="nav-item"><a class="nav-link" href="#">Admin Panel</a></li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-2" href="<?= site_url('logout') ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2 <?= service('uri')->getPath() == 'login' ? 'active' : '' ?>"
                            href="<?= site_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success ms-2 <?= service('uri')->getPath() == 'register' ? 'active' : '' ?>"
                            href="<?= site_url('register') ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>