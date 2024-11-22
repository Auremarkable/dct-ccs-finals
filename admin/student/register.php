<?php 
include '../../functions.php'; 
dashboardguard();
$logoutPage = '../logout.php';
require '../partials/header.php';
require '../partials/side-bar.php';
 ?>
<div class="col-md-9 col-lg-10">
    <h3 class="text-left mb-5 mt-5">Register a New Student</h3>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register Student</li>
        </ol>
    </nav>

    <!-- Register Student Form -->
    <div class="card p-4 mb-5">
        <form method="POST">
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="student_id" name="student_id">
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <button type="submit" class="btn btn-primary btn-sm w-100">Add Student</button>
        </form>
    </div>

    <!-- Student List Table -->
    <div class="card p-4">
        <h3 class="card-title text-center">Student List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <!-- Edit Button (Green) -->
                        <a href="" class="btn btn-primary btn-sm">Edit</a>

                        <!-- Delete Button (Red) -->
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                        
                        <!-- Attach Subject Button (Yellow) -->
                        <a href="" class="btn btn-warning btn-sm">Attach Subject</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center">No students found.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
    require '../partials/footer.php';
 ?>