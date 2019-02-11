<?php require 'inc/header.php' ?>


<section class="signup">
<?php require 'inc/navigation.php' ?>
<?php require 'inc/signupError.php' ?>
    <form class="signup__form" method="post" action="inc/signup.inc.php">
        <input class="signup__form-username" type="text" name="uid" placeholder="Username">
        <input class="signup__form-email" type="text" name="mail" placeholder="E-mail">
        <input class="signup__form-pwd" type="password" name="pwd" placeholder="Password">
        <input class="signup__form=retypepwd" type="password" name="pwd-repeat" placeholder="Repeat password">
        <button class="signup__form-button button" type="submit" name="signup-submit">Sign Up</button>
    </form>
</section>

    
<?php require "inc/footer.php"; ?>

