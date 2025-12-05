<?= $this->include('template/header') ?>

<body>

<div class="content-area">  <!-- ADD THIS WRAPPER -->

<?php if (session()->get('user_role') === 'admin'): ?>

    <div class="container-fluid py-4">

        <!-- Statistic Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <h6 class="text-muted mb-2">Total Students</h6>
                    <h3 class="fw-bold text-primary"><?= esc($students ?? 250) ?></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <h6 class="text-muted mb-2">Total Courses</h6>
                    <h3 class="fw-bold text-primary"><?= esc($courses ?? 18) ?></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <h6 class="text-muted mb-2">Instructors</h6>
                    <h3 class="fw-bold text-primary"><?= esc($instructors ?? 12) ?></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm">
                    <h6 class="text-muted mb-2">Pending Approvals</h6>
                    <h3 class="fw-bold text-primary"><?= esc($pending ?? 5) ?></h3>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <h5 class="fw-semibold mb-3">Recent Activities</h5>
        <div class="card shadow-sm border-0 p-3">
            <table class="table table-borderless align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>New course added: <strong>Python Basics</strong></td>
                        <td>Instructor A</td>
                        <td>Nov 13, 2025</td>
                        <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Student registered: <strong>John Doe</strong></td>
                        <td>System</td>
                        <td>Nov 12, 2025</td>
                        <td><span class="badge bg-info">New</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Assignment submitted: <strong>UI/UX Project</strong></td>
                        <td>Jane Smith</td>
                        <td>Nov 12, 2025</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

<?php endif; ?>

<?php if (session()->get('user_role') === 'instructor'): ?>
    <div class="container-fluid py-4">

    <!-- Statistic Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">My Courses</h6>
                <h3 class="fw-bold text-primary"><?= esc($myCourses ?? 6) ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Active Students</h6>
                <h3 class="fw-bold text-primary"><?= esc($activeStudents ?? 140) ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Assignments to Grade</h6>
                <h3 class="fw-bold text-primary"><?= esc($pendingGrades ?? 24) ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Announcements Posted</h6>
                <h3 class="fw-bold text-primary"><?= esc($announcements ?? 3) ?></h3>
            </div>
        </div>
    </div>

    <!-- Recent Submissions -->
    <h5 class="fw-semibold mb-3">Recent Student Submissions</h5>
    <div class="card shadow-sm border-0 p-3 mb-5">
        <table class="table table-borderless align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Student</th>
                    <th>Assignment</th>
                    <th>Course</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ana Cruz</td>
                    <td>Project 1</td>
                    <td>Web Development</td>
                    <td>Nov 14, 2025</td>
                    <td><span class="badge bg-warning text-dark">To Grade</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Marco Reyes</td>
                    <td>Quiz 2</td>
                    <td>Python Basics</td>
                    <td>Nov 14, 2025</td>
                    <td><span class="badge bg-warning text-dark">To Grade</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sarah Gomez</td>
                    <td>Module 3 Task</td>
                    <td>UX Design</td>
                    <td>Nov 13, 2025</td>
                    <td><span class="badge bg-success">Graded</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- My Courses -->
    <h5 class="fw-semibold mb-3">My Courses</h5>
    <div class="card shadow-sm border-0 p-3">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Students</th>
                    <th>Status</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Python Basics</td>
                    <td>48</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Web Development</td>
                    <td>56</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>UI/UX Design</td>
                    <td>36</td>
                    <td><span class="badge bg-secondary">Paused</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php endif; ?>

<?php if (session()->get('user_role') === 'student'): ?>
    <div class="container-fluid py-4">

    <!-- Statistic Cards -->
    <div class="row g-4 mb-5">
        
        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Enrolled Courses</h6>
                <h3 class="fw-bold text-primary"><?= esc($enrolledCourses ?? 5) ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Completed Lessons</h6>
                <h3 class="fw-bold text-primary"><?= esc($completedLessons ?? 32) ?></h3>
            </div>
        </div> 

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">Pending Assignments</h6>
                <h3 class="fw-bold text-primary"><?= esc($pendingAssignments ?? 4) ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center p-4 shadow-sm">
                <h6 class="text-muted mb-2">My Average Grade</h6>
                <h3 class="fw-bold text-primary"><?= esc($averageGrade ?? "88%") ?></h3>
            </div>
        </div>

    </div>

    <!-- Recent Activity -->
    <h5 class="fw-semibold mb-3">Recent Activity</h5>
    <div class="card shadow-sm border-0 p-3 mb-5">
        <table class="table table-borderless align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Activity</th>
                    <th>Course</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Completed Lesson 5</td>
                    <td>Python Basics</td>
                    <td>Nov 14, 2025</td>
                    <td><span class="badge bg-success">Completed</span></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Submitted Assignment 2</td>
                    <td>Web Development</td>
                    <td>Nov 14, 2025</td>
                    <td><span class="badge bg-info">Submitted</span></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>New Announcement</td>
                    <td>UX Design</td>
                    <td>Nov 13, 2025</td>
                    <td><span class="badge bg-secondary">Unread</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- My Courses -->
    <h5 class="fw-semibold mb-3">My Courses</h5>
    <div class="card shadow-sm border-0 p-3">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Progress</th>
                    <th>Status</th>
                    <th>Open</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Python Basics</td>
                    <td>78%</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Enter</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Web Development</td>
                    <td>45%</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Enter</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>UI/UX Design</td>
                    <td>20%</td>
                    <td><span class="badge bg-warning text-dark">Ongoing</span></td>
                    <td><a href="#" class="btn btn-sm btn-primary">Enter</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<?php endif; ?>

</div> <!-- END content-area -->

</body>
</html>
