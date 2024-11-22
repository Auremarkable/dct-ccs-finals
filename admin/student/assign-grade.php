<?php 
include '../../functions.php'; 
$logoutPage = '../logout.php';
require '../partials/header.php';
require '../partials/side-bar.php';
?>

<div class="col-md-9 col-lg-10">
    <h3 class="text-left mb-5 mt-5">Assign Grade to Subject</h3>

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="register.php">Register Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">Delete Student</li>
        </ol>
    </nav>

    <!-- Selected Student and Subject Information -->
    <div class="border p-5">
        <p class="text-left fs-4">Selected Student and Subject Information</p>
        <ul class="text-left">
            <li><strong>Student ID:</strong></li>
            <li><strong>Name:</strong></li>
            <li><strong>Subject Code:</strong></li>
            <li><strong>Subject Name:</strong></li>
        </ul>
        <hr>

        <!-- Grade Assignment Form -->
        <form method="POST" class="text-left">
            <div class="mb-3 p-3 border rounded">
                <label for="gradeInput" class="form-label">Grade</label>
                <input type="number" class="form-control border-0" id="gradeInput" name="grade" placeholder="Enter grade">
            </div>
            <a href="" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Assign Grade to Subject</button>
        </form>
    </div>
</div>

<?php
require '../partials/footer.php';
?>