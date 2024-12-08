<?php
// Include the database connection
include('db_config.php');

// Start session to check if the user is logged in
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .resume-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="resume-container">
            <h2>Hey, I'm <?php echo $username; ?> and here is my resume</h2>
            <h4>Personal Information</h4>
            <ul>
                <li>Name: <?php echo $username; ?></li>
                <li>Email: <?php echo $username . "@example.com"; ?></li>
                <li>Phone: 123-456-7890</li>
                <li>Address: Your Address Here</li>
            </ul>

            <h4>Skills</h4>
            <ul>
                <li>Web Development (HTML, CSS, JavaScript, PHP)</li>
                <li>Database Management (MySQL)</li>
                <li>Problem Solving</li>
                <li>Teamwork & Collaboration</li>
            </ul>

            <h4>Experience</h4>
            <ul>
                <li>Internship at XYZ Company - Web Developer (2022-2023)</li>
                <li>Freelance Web Developer (2023-Present)</li>
            </ul>

            <h4>Education</h4>
            <ul>
                <li>Bachelor's in Computer Science (2021-2025)</li>
            </ul>
        </div>
    </div>
</body>
</html>
