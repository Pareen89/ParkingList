<?php 
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyfields') {
        echo '<p class="signup__error">Fill in all fields!</p>';
    } else if ($_GET['error'] == 'emptyfields') {
        echo '<p class="signup__error">Fill in all fields!</p>';
    } else if ($_GET['error'] == 'invalidmail') {
        echo '<p class="signup__error">Ivalid username and e-mail! </p>';
    } else if ($_GET['error'] == 'invaliduid') {
        echo '<p class="signup__error">Invalid username!</p>';
    } else if ($_GET['error'] == 'invalidmail') {
        echo '<p class="signup__error">Invalid e-mail!</p>';
    } else if ($_GET['error'] == 'passwordcheck') {
        echo '<p class="signup__error">Your passwords do not match!</p>';
    } else if ($_GET['error'] == 'usertaken') {
        echo '<p class="signup__error">Username is already taken!</p>';
    }
}
?>