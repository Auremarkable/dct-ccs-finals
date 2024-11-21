<?php

// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Function to guard pages that should not be accessed by logged-in users
function guard(){   
    $dashboard = 'admin/dashboard.php';
    if(isset($_SESSION['email'])){
        header("Location: $dashboard");
    } 
}

// Function to validate email
function validateEmail($email) {
    if (empty($email)) {
        return "Email is required.";
        header('Location: index.php');
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email.";
    }
    return '';
}

// Function to validate password
function validatePassword($password) {
    if (empty($password)) {
        return "Password is required.";
    }
    return '';
}

// Function to authenticate user by email and password
function authenticateUser($email, $password, $con) {
    // Escape special characters and hash the password before checking
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, md5($password));

    // SQL query to check user credentials
    $strsql = "
        SELECT * FROM users 
        WHERE email = '$email' 
        AND password = '$password'
    ";

    // Execute the query
    if ($result = mysqli_query($con, $strsql)) {
        if (mysqli_num_rows($result) > 0) {
            // Redirect to the dashboard if user exists
            $_SESSION['email'] = $email; // Set session variable for email
            header('Location: admin/Dashboard.php');
            mysqli_free_result($result);
            exit;
        } else {
            return "Invalid email or password.";
        }
    } else {
        return "ERROR: Could not execute your request.";
    }
}

// Function to guard authenticated pages (like dashboard) 
function dashboardguard(){
    $loginPage = '../index.php';
    if(!isset($_SESSION['email'])){
        header("Location: $loginPage");
    }
}

// Function to log out the user and destroy the session
function logout($indexPage) {
    // Unset the 'email' session variable
    unset($_SESSION['email']);

    // Destroy the session
    session_destroy();

    // Redirect to the login page (index.php)
    header("Location: $indexPage");
    exit;
}

?>
