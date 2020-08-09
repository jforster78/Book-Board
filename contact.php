<?php
// include header file
include "header.php";
?>

    <main id="main" class="main">
      <div class="grid">
        
        <!-- Slide-show -->
        <section class="grid__slideShow">
          <div class="grid__slideContainer">
            <div class="grid__slides fade">
              <div class="grid__number">1 / 3</div>
              <img src="img/slideshow/img1.jpg" alt="gallery images" class="grid__image">
            </div>	    
            <div class="grid__slides fade">
              <div class="grid__number">2 / 3</div>
              <img src="img/slideshow/img2.jpg" alt="gallery images" class="grid__image">
            </div>	    
            <div class="grid__slides fade">  
            <div class="grid__number">3 / 3</div>
              <img src="img/slideshow/img3.jpg" alt="gallery images" class="grid__image">
            </div>
              <a class="next next--right"><i class="fas fa-chevron-right"></i></a>
              <a class="prev"><i class="fas fa-chevron-left"></i></a>
          </div>
        </section>

        <!--Contact us-->
        <section id="contact" class="grid__form">
          <h2 class="grid__subheading">Contact Us</h2>
          <div class="grid__row">
            <div class="grid__column">
              <h3 class="grid__subheading grid__subheading--margin">Offices</h3>
              <div class="grid__listWrapper">
                <ul class="grid__list">
                  <li>Grainger Street</li>
                  <li>Newcastle upon Tyne</li>
                  <li>NE1 4EX</li>
                  <li>0191 256 7890</li>
                  <li>newcastle@bandb.com</li>
                </ul>
                <hr>
                <ul class="grid__list">
                  <li>Robson Street</li>
                  <li>Mancherster</li>
                  <li>M3 5BB</li>
                  <li>0161 224 7890</li>
                  <li>manchester@bandb.com</li>
                </ul>
                <hr>
                <ul class="grid__list">
                  <li>George Street</li>
                  <li>Southampton</li>
                  <li>SO3 7LL</li>
                  <li>0631 283 7890</li>
                  <li>southampton@bandb.com</li>
                </ul>
                <hr>
                <ul class="grid__list">
                  <li>Kings Street</li>
                  <li>London</li>
                  <li>SW1 4EB</li>
                  <li>0591 930 7890</li>
                  <li>london@bandb.com</li>
                </ul>
                <hr class="grid__line">
              </div>
            </div>
            <form action="#" method="" class="grid__grid__formWrapper grid__formWrapper--adjust" id="contactForm">
              <fieldset class="grid__formFieldset"> 
                <legend class="grid__formLegend">Please fill out the enquiry form</legend>               
                <div class="grid__formRow">
                  <input class="grid__formInput" type="text" id="fullname" placeholder="Full Name"/>
                  <input class="grid__formInput" type="email" id="email" placeholder="Email Address"/>
                  <input class="grid__formInput" type="tel" id="phone" placeholder="Phone Number"/>
                  <textarea class="grid__formTextarea" name="message" id="message" placeholder="Message" maxlength="500" rows="5" ></textarea>
                </div>
                <div class="grid__formRow grid__formRow--full">
                  <button id="submit" type="submit" name="submit" class="grid__formButton">Submit</button>
                </div>
                <span id="msg" class="grid__errorMsg"></span>
              </fieldset>
            </form>
          </div>
        </section>
      </div>
    </main>

<?php
// Include footer file
include "footer.php";
?>
