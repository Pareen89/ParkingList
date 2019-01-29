<?php require "inc/header.php"; ?>

<h1>Sign Up</h1>
<?php 
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<p class="signup_error">Fill in all fields!</p>';
    } else if ($_GET['error'] == 'emptyfields') {
        echo '<p class="signup_error">Fill in all fields!</p>';
    }
}
?>
<form class="form-signup" method="post" action="inc/signup.inc.php">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat password">
    <button type="submit" name="signup-submit">Sign Up</button>
</form>



<?php require "inc/footer.php"; ?>