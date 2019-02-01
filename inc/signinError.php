<?php 
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<p class="signup__error">Fill in all fields</p>';
    } else if ($_GET['error'] == 'wrongpwd') {
        echo '<p class="signup__error">Incorrect Password</p>';
    } else if ($_GET['error'] == 'nouser') {
        echo '<p class="signup__error">Incorrect Username or E-mail</p>';
    }
}
?>