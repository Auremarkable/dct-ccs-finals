<?php 
include '../../functions.php'; 
$logoutPage = '../logout.php';
require '../partials/header.php';
require '../partials/side-bar.php';
?>

<div class="col-md-9 col-lg-10">
    <h3 class="text-left mb-5 mt-5">Delete a Student</h3>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="register.php">Register Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">Delete Student</li>
        </ol>
    </nav>

    <div class="border p-5">
        <!-- Confirmation Message -->
        <p class="text-left">Are you sure you want to delete the following student record?</p>
        <ul class="text-left">
            <li><strong>Student ID:</strong></li>
            <li><strong>First Name:</strong></li>
            <li><strong>Last Name:</strong></li>
        </ul>

        <form method="POST" class="text-left">
            <a href="register.php" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Delete Student Record</button>
        </form>
    </div>
</div>

<?php
require '../partials/footer.php';
?>