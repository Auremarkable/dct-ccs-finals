<?php 
include '../../functions.php'; 
$logoutPage = '../logout.php';
require '../partials/header.php';
require '../partials/side-bar.php';
?>

<div class="col-md-9 col-lg-10">
    <h3 class="text-left mb-5 mt-5">Edit Student</h3>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="register.php">Register Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
        </ol>
    </nav>

    <!-- Edit Student Form -->
    <div class="card p-4 mb-5">
        <form method="POST">
            <!-- Student ID (disabled) -->
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id" value="" disabled>
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="">
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="">
            </div>

            <!-- Update Student Button -->
            <button type="submit" class="btn btn-primary btn-sm w-100">Update Student</button>
        </form>
    </div>
</div>

<?php
require '../partials/footer.php';
?>