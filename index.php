<?php include 'inc/header.php'; ?>

    <section class="homepage">
        <div class="homepage__background"></div>
        <form action="searchpage.php" class="homepage__form container-one">
            <i class="homepage__form-searchIcon fas fa-search"></i>
            <input id="geocoder" type="text" placeholder="Destination" onfocus="this.value=''" class="button_one homepage__form-destination">
            <input type="text" placeholder="Arriving" class="button_one homepage__form-arriving" readonly>
            <input type="text" placeholder="Departing" class="button_one homepage__form-departing" readonly>
            <button type="submit" class="button_one homepage__form-submit">Show Parking Spaces</button>
        </form>
    </section>

<?php include 'inc/footer.php'; ?>