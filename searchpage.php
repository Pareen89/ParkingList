<?php include 'inc/header.php' ?>
<?php require 'inc/navigation.php' ?>

    <section class="results">
        <div class="map__container">
            <div id="map" class="map">
            </div>
            <div id="hidden-edit" class="hidden-container hidden-edit">
                <i class="hidden-edit-menulogo fas fa-search"></i>
                <input type="text" placeholder="Destination" onfocus="this.value=''" class="hidden-edit-destination button_two">
                <input type="text" placeholder="Arriving" class="hidden-edit-arriving button_two" readonly>
                <input type="text" placeholder="Departing" class="hidden-edit-departing button_two" readonly>
                <button type="submit" class="hidden-edit-button button_two">Show
                    Parking
                    Spaces</button>
            </div>
            <div id="hidden-info" class="hidden-info container-five">
                <h1 class="hidden-info-title">
                    Parking on ${streen name}.
                </h1>
                <p class="hidden-info-space_detail">Space Details</p>
                <p class="hidden-info-images">Streetview</p>
                <p class="hidden-info-reviews">Customer Reviews</p>
                <p class="hidden-info-sdtext">We are outside the SAP building. Right next to a park.

                Short walk to Queensway

                7 minute walk to Paddington 
                10 minute walk to St Mary's Hospital
                10 minute walk to Hyde Park 

                PLEASE NOTE that there are currently roadworks so you would be best approaching from the Marble Arch side. 

                If you wish to park a van, you will need to pay a surcharge of £10 per day upon your arrival. Please         note that the maximum length of vehicle we can              accommodate is 5.5 meters, not more than that
                </p>
                <p class="hidden-info-images"></p>
                <p class="hidden-info-reviewtext">
                    <div class="review"></div>
                </p>
                <button class="hidden-info-contact">Contact Owner</button>
            </div>
        </div>
        <div class="results__container">
            <div class="results__container-edit container-two">
                <p class="results__container-edit-destination">
                    Destination, City, State
                </p>
                <p class="results__container-edit-datetime">
                    Jan 17 12:30 PM &rarr; Jan 17 2:30PM
                </p>
                <div class="results__container-edit-button" onclick="hiddenEdit()">
                    edit
                </div>
            </div>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <div id="hidden-info-page" class="glide__slide listing container-four">
                            <p class="listing__title">
                                Parking on ${Street Name}
                            </p>
                            <p class="listing__distance">
                                0.17 miles
                            </p>
                            <p class="listing__review">
                                Reviews
                            </p>
                            <p class="listing__price">
                                $2.12
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-angle-left arrow_icon"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right arrow_icon"></i></button>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php' ?>
