<nav class="nav">
<?php 
if (isset($_SESSION['username'])) {
    ?> <a class="nav__logo" href="index.php">
    <h1>ParkingList</h1>
</a>
<div onclick="menuActive()" class="nav__menuIcon">
    <i class="fas fa-bars"></i>
</div>
<div id="nav_menu" class="nav__menu">
    <ul class="nav__menu-list">
    <form action="inc/logout.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div>
<?php 
} else {
    ?> <a class="nav__logo" href="index.php">
    <h1>ParkingList</h1>
</a>
<div onclick="menuActive()" class="nav__menuIcon">
    <i class="fas fa-bars"></i>
</div>
<div id="nav_menu" class="nav__menu">
    <ul class="nav__menu-list">
        <li><a href="about.php">About</a></li>
        <li><a href="rentDriveway.php">List a space</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="signin.php">Log In</a></li>
        <li><a href="signup.php">Sign Up</a></li>
    </ul>
</div>
<?php 
}
?>
   
</nav>