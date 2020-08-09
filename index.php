<?php
// Include header file
include "header.php";
?>

    <main id="main" class="main">
      <div class="grid">

        <!-- Slide-show -->
        <section class="grid__slideShow">
          <div class="grid__slideContainer">
            <div class="grid__slides fade">
              <div class="grid__number">1 / 3</div>
              <img src="img/slideshow/img1.jpg" alt="slideshow image" class="grid__image">
            </div>	    
            <div class="grid__slides fade">
              <div class="grid__number">2 / 3</div>
              <img src="img/slideshow/img2.jpg" alt="slideshow image" class="grid__image">
            </div>	    
            <div class="grid__slides fade">  
              <div class="grid__number">3 / 3</div>
              <img src="img/slideshow/img3.jpg" alt="slideshow image" class="grid__image">
            </div>
              <a class="next next--right"><i class="fas fa-chevron-right"></i></a>
              <a class="prev"><i class="fas fa-chevron-left"></i></a>
          </div>
        </section>
      
        <!--Holiday Gallery-->
        <section id="holiday" class="grid__holiday">
          <h2 class="grid__subheading">Holiday Gallery</h2>
          <div class="grid__holidayContainer">
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img/gallery/img1.jpg" alt="Croatia" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">Croatia</h3>
                </div>
              </a>
            </div>
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img//gallery/img2.jpg" alt="Cyprus" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">Cyprus</h3>
                </div>
              </a>
            </div>
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img//gallery/img3.jpg" alt="South Africa" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">South Africa</h3>
                </div>
              </a>
            </div>
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img//gallery/img4.jpg" alt="Greece" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">Greece</h3>
                </div>
              </a>
            </div>
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img/gallery/img5.jpg" alt="North Cyprus" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">North Cyprus</h3>
                </div>
              </a>
            </div>
            <div class="grid__holidayPost hidden">
              <a href="#">
                <img src="img//gallery/img6.jpg" alt="Argintina" class="grid__holidayImage">
                <div class = "grid__holidayDetails">
                  <h3 class="grid__header">Argentina</h3>
                </div>
              </a>
            </div>
          </div>        
        </section>

        <!-- Holiday Type -->
        <section id="holidayType" class="grid__holidayType">
          <h2 class="grid__subheading">Holiday Types</h2>
          <div class="grid__holidayTypeContainer">
            <div class="grid__holidayTypePost hidden">
              <p class="grid__paragraph grid__paragraph--colour">Flights Only</p>
            </div>
            <div class="grid__holidayTypePost hidden">
              <p class="grid__paragraph grid__paragraph--colour">Flights & Hotel</p>
            </div>
            <div class="grid__holidayTypePost hidden">
              <p class="grid__paragraph grid__paragraph--colour">Package Holidays</p>
            </div>
            <div class="grid__holidayTypePost hidden">
              <p class="grid__paragraph grid__paragraph--colour">Tours</p>
            </div>
            <div class="grid__holidayTypePost hidden">
              <p class="grid__paragraph grid__paragraph--colour">Car Hire</p>
            </div>
          </div>        
        </section>

        <!--Holiday Offers-->
        <section id="holiday" class="grid__holidayOffer">
          <h2 class="grid__subheading">Holiday Offers</h2>
          <div class="grid__holidayOfferContainer">
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img7.jpg" alt="India" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">India</h4>
                <p class="grid__paragraph">Enjoy the Indian culture</p>
                <a class="grid__clickOffer" href="#">£1199pp</a>
              </div>
            </div>
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img8.jpg" alt="North Cyprus" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">North Cyprus</h4>
                <p class="grid__paragraph">Explore North Cyprus</p>
                <a class="grid__clickOffer" href="#">£299pp</a>
              </div>
            </div>
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img9.jpg" alt="Cuba" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">Cuba</h4>
                <p class="grid__paragraph">Try the tobacco in Cuba</p>
                <a class="grid__clickOffer" href="#">£1299pp</a>
              </div>
            </div>
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img10.jpg" alt="Brazil" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">Brazil</h4>
                <p class="grid__paragraph">Have an adventure in Brazil</p>
                <a class="grid__clickOffer" href="#">£1500pp</a>
              </div>
            </div>
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img11.jpg" alt="Croatia" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">Croatia</h4>
                <p class="grid__paragraph">Discovery Medieval Croatia</p>
                <a class="grid__clickOffer" href="#">£349pp</a>
              </div>
            </div>
            <div class="grid__holidayOfferPost hidden">
              <img src="img//gallery/img12.jpg" alt="Spain" class="grid__holidayOfferImage">
              <div class="grid_offerDetails">
                <h4 class="grid__header grid__header--center">Spain</h4>
                <p class="grid__paragraph">Catch the sun in Spain</p>
                <a class="grid__clickOffer" href="#">£179pp</a>
              </div>
            </div>
          </div>        
        </section>

      </div>
    </main>

<?php
// Include footer file
include "footer.php";
?>
