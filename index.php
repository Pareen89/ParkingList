<?php require 'inc/header.php' ?>
        <main>
            <section class="homepage">
                <?php require 'inc/navigation.php' ?>
                <form action="searchpage.php" class=" form-container homepage__form">
                    <input id="geocoder" type="text" placeholder="Destination" onfocus="this.value=''" class="homepage__form-destination">
                    <input type="text" placeholder="Arriving" class="homepage__form-arriving">
                    <input type="text" placeholder="Departing" class="homepage__form-departing">
                    <button action="searchpage.php" type="submit" class="homepage__form-search button">Search</button>
                </form>
            </section>
        </main>
<?php require 'inc/footer.php' ?>
