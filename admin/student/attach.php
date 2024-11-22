<?php 
include '../../functions.php'; 
$logoutPage = '../logout.php';
require '../partials/header.php';
require '../partials/side-bar.php';
?>

<div class="col-md-9 col-lg-10">
    <h3 class="text-left mb-5 mt-5">Delete a Student</h3>

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="register.php">Register Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">Delete Student</li>
        </ol>
    </nav>

    <!-- Selected Student Information Section -->
    <div class="border p-5">
        <h4 class="text-left mb-2 mt-5">Selected Student Information</h4>
        <ul class="text-left">
            <li><strong>Student ID:</strong></li>
            <li><strong>Name:</strong></li>
        </ul>
        <hr>

        <!-- Attach Subjects Button -->
        <form method="POST" class="text-left">
            <button type="submit" class="btn btn-primary mt-3">Attach Subjects</button>
        </form>
    </div>

    <!-- Subject List Table Section -->
    <div class="card p-4 mt-5 mb-5">
        <h3 class="card-title text-left">Subject List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Grade</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <!-- Detach Button (Red) -->
                        <a href="" class="btn btn-danger btn-sm">Detach Subject</a>

                        <!-- Assign Grade Button (Green) -->
                        <a href="" class="btn btn-success btn-sm">Assign Grade</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No subjects found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require '../partials/footer.php';
?>