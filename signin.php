<?php require "inc/header.php"; ?>

        <section class="signin">
            <?php require 'inc/navigation.php' ?>
            <?php require 'inc/signinError.php' ?>

            <div class="signin__box">
                <form class="signin__form" action="inc/signin.inc.php" method="post">
                    <input class="signin__form-email" type="text" name="mailuid" placeholder="E-Mail">
                    <input class="signin__form-passowrd" type="password" name="pwd" placeholder="Password">
                    <button class="signin__form-button button" type="submit" name="login-submit">LogIn</button>
                    <a class="signin__form-signup" href="signup.php">Create an account</a>
                    <a class="signin__form-forgot" href="forgotpassword.php">Forgot password?</a>
                </form>
            </div>
        </section>

<?php require "inc/footer.php"; ?>
