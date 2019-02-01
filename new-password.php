<?php require "inc/header.php"; ?>
<section class="forgot">
    <?php require 'inc/navigation.php' ?>
    <?php 
        // check if the selector and validator match from link sent to email for forgot password
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

    if (empty($selector) || empty($validator)) {
        echo "could not validate your request!";
    } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>
    <form class="reset" action="inc/reset.php" method="post">
        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
        <input class="reset__password" type="password" name="pwd" placeholder="Enter new password">
        <input class="reset__retype" type="password" name="pwd-repeat" placeholder="Retype new password">
        <button class="reset__button" type="submit" name="reset-submit">Reset Password</button>
    </form>
    <?php

}
}
?>

</section>

<?php include 'inc/footer.php' ?>