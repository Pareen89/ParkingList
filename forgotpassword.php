<?php require "inc/header.php"; ?>
<section class="forgot">
    <?php require 'inc/navigation.php' ?>
    <form class="forgot__form" action="inc/forgot.php" method="post">
        <input class="forgot__form-email" type="text" name="email" placeholder="Enter you e-mail">
        <button class="forgot__form-button button" type="submit" name="forgot-submit">Send</button>
    </form>
</section>

<?php include 'inc/footer.php' ?>