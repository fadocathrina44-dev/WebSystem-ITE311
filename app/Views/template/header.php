<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS <?= esc(session()->get('user_role')) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* FIXED LEFT SIDEBAR */
        .sidebar {
            width: 230px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #0d6efd;
            padding-top: 20px;
            color: #fff;
        }

        .sidebar a {
            color: #fff;
            padding: 10px 15px;
            display: block;
            font-weight: 500;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        /* MAIN CONTENT PUSHED RIGHT */
        .content-area {
            margin-left: 230px;
            padding: 20px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }
            .content-area {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<?php if (session()->get('user_role') === 'admin'): ?>

<!-- FIXED LEFT SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4">ADMIN</h4>

    <a href="<?= base_url('dashboard') ?>">Dashboard</a>
    <a href="<?= base_url('users') ?>">User Management</a>
    <a href="#">Students</a>
    <a href="#">Courses</a>
    <a href="#">Instructors</a>
    <a href="#">Approvals</a>
    <a href="<?= base_url('logout') ?>">Logout</a>
</div>

<?php endif; ?>
<!--For Instructor-->
<?php if (session()->get('user_role') === 'instructor'): ?>

<!-- FIXED LEFT SIDEBAR -->
<div class="sidebar">
    <!-- FIXED LEFT SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center mb-4">INSTRUCTOR</h4>

    <a href="<?= base_url('#') ?>">Dashboard</a>
    <a href="<?= base_url('#') ?>">My Courses</a>
    <a href="<?= base_url('#') ?>">Assignments</a>
    <a href="<?= base_url('#') ?>">Student Submissions</a>
    <a href="<?= base_url('#') ?>">Gradebook</a>
    <a href="<?= base_url('#') ?>">Announcements</a>
    <a href="<?= base_url('#') ?>">Messages</a>
    <a href="<?= base_url('logout') ?>">Logout</a>
</div>
</div>

<?php endif; ?>

<?php if (session()->get('user_role') === 'student'): ?>
  <!-- FIXED LEFT SIDEBAR -->
  <div class="sidebar">
      <h4 class="text-center mb-4">STUDENT</h4>

      <a href="<?= base_url('student/dashboard') ?>">Dashboard</a>
      <a href="<?= base_url('student/my-courses') ?>">My Courses</a>
      <a href="<?= base_url('student/assignments') ?>">Assignments</a>
      <a href="<?= base_url('student/progress') ?>">My Progress</a>
      <a href="<?= base_url('student/announcements') ?>">Announcements</a>
      <a href="<?= base_url('student/messages') ?>">Messages</a>
      <a href="<?= base_url('student/profile') ?>">Profile</a>
      <a href="<?= base_url('logout') ?>">Logout</a>
  </div>
<?php endif; ?>