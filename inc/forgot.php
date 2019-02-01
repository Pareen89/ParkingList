<?php 
if (isset($_POST['forgot-submit'])) {
    // make a token
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    //create link to send to user
    $url = "localhost/main/forgotpassword/new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    // expire the token
    $expires = date("U") + 1800;
    //get to database 

    require 'dbh.php';

    $userEmail = $_POST["email"];

    // delete any existence of tokens from database
    $sql = "DELETE FROM pwdreset WHERE pwdRestEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'There was an error';
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }
    // insert token into database
    $sql = "INSERT INTO pwdreset(pwdRestEmail,pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'There was an error';
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // send link to reset to user
    $to = $userEmail;
    $subject = 'Reset password for ParkingList';
    $message = '<p>We recieved a paswword reset request. The link to reset your password is below. If you did not make this request, you can iignore this email. Here is your password reset link: </br> <a href="' . $url . '">' . $url . '</a> </p>';
    $headers = "From: ParkingList <pareenpatel89@gmail.com>\r\n";
    $headers .= "Reply-To: pareenpatel89@gmail.com\r\n";
    $headers .= "Contect-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../resetPassword.php?reset=success");



} else {
    header("Location:../index.php");
}