<div id="nav__menu-dropdown" class="nav__menu-dropdown">
    <li class="profile"><a href="about.php">Profile</a></li>
    <li class="about"><a href="about.php">About</a></li>
    <li class="space"><a href="rentDriveway.php">List a space</a></li>
    <li class="dropdown-contact"><a href="contact.php">Contact</a></li>
    <li class="logout">
        <form action="inc/logout.php" method="post">
            <button class="logout-button" type="submit" name="logout-submit">Logout</button>
        </form>
    </li>
</div>


<nav class="nav">
    <?php 
    if (isset($_SESSION['username'])) {
        ?> <a class="nav__logo" href="index.php">
        <h1>ParkingList</h1>
    </a>
    <div id="nav_menu" class="nav__menu">
            <div id="nav__menu-profile" class="nav__menu-profile">
                <?php echo "<div class=nav__menu-username>" . $_SESSION['username'] . "<span class=nav__menu-username-icon>&#x2630;</span></div>" ?>
            </div>
        <?php 
    } else {
        ?>
        <a class="nav__logo" href="index.php">
            <h1>ParkingList</h1>
        </a>
        <div onclick="menuActive()" class="nav__menuIcon">
            <i class="fas fa-bars"></i>
        </div>
        <div id="nav_menu" class="nav__menu nav__menu-one">
            <ul class="nav__menu-list signup__color">
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


