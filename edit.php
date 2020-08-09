<?php
// Include session file
include "session.php";
// Include DB file
require_once "dbConn.php";
// Include edit logic file
include "edit_logic.php";
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

        <!-- Edit Form -->
        <section class="grid__form">
          <h2 class="grid__subheading">Update Details</h2>
          <form class="grid__formWrapper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <fieldset class="grid__formFieldset"> 
              <legend class="grid__formLegend">Please update your details</legend>
              <div class="grid__formRow">
                <input class="grid__formInput" type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>">
                <input class="grid__formInput" type="text" name="address" placeholder="Address" value="<?php echo $address; ?>">
                <input class="grid__formInput" type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
              </div>
              <div class="grid__formRow grid__formRow--full">
                <input type="submit" class="grid__formButton" value="Update">
              </div>
              <p class="grid__formRow grid__formRow--full">Or press <a class="grid__links" href="login.php">Cancel</a>.</p>
            </fieldset>
          </form>
        </section>
      </div>
    </main>
    
<?php
// Include footer file
include "footer.php";
?>