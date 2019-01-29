<?php require "inc/header.php"; ?>

<form action="inc/signin.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="E-Mail/Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="login-submit">LogIn</button>
</form>
<a href="signup.php">SignUp</a>
<form action="inc/logout.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>
<?php 
if (isset($_SESSION['userId'])) {
    echo '<p class="login-status">You are logged In</p>';
} else {
    echo '<p class="login-status">You are logged out</p>';
}
?>



<?php require "inc/footer.php"; ?>