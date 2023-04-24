<?php
// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input
    if (validateInput($username) && validateInput($password)) {
        // Perform user authentication
        if (authenticateUser($username, $password)) {
            // Redirect to dashboard page
            header("Location: dashboard.php");
            exit();
        } else {
            $errorMessage = "Invalid username or password.";
        }
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>
