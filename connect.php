<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);

    $errors = [];

    // Validate username
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 3 || strlen($username) > 15) {
        $errors[] = "Username must be between 3 and 15 characters.";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6 || strlen($password) > 25) {
        $errors[] = "Password must be between 6 and 25 characters.";
    }

    // Validate confirm password
    if ($password !== $cpassword) {
        $errors[] = "Passwords do not match.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        echo "<script>alert('" . implode("\\n", $errors) . "'); window.history.back();</script>";
        exit;
    }

    // Create a database connection
    $con = new mysqli('localhost', 'root', '', 'form');

    // Check if the connection was successful
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Hash the password (for security purposes)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query
    $sql = "INSERT INTO `data` (username, email, password) 
            VALUES ('$username', '$email', '$hashedPassword')";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        // Show a success message and redirect
        echo "<script>
                alert('Data inserted successfully!');
                window.location.href = 'index.html';
              </script>";
    } else {
        die("Error inserting data: " . $con->error);
    }

    // Close the connection
    $con->close();
}
?>

