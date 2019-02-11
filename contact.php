<?php require "inc/header.php"; ?>
<section class="contact">
    <?php require 'inc/navigation.php' ?>
    <form class="contact__form" method="post" action="inc/contact.php">
        <input class="contact__form-email" type="text" name="mail" placeholder="E-mail">
        <input class="contact__form-subject" type="text" name="subject" placeholder="Subject">
        <textarea class="contact__form-textarea"name="message" id="" cols="30" rows="10" placeholder="Enter message..."></textarea>
        <button class="contact__form-button button" type="submit" name="send">Send</button>
    </form>
</section>

<?php include 'inc/footer.php' ?>