<?php
// Include session file
include "session.php";
// Include DB file
require_once "dbConn.php";
// Include login_validation file
include "reset_validation.php";
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

        <!-- Reset Form -->
        <section class="grid__form">
          <h2 class="grid__subheading">Reset Password</h2>
          <form class="grid__formWrapper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <fieldset class="grid__formFieldset"> 
              <legend class="grid__formLegend">Fill out the form to reset password</legend>
              <div class="grid__formRow">
                <span class="grid__errorMsg"><?php echo $newPasswordErr; ?></span>
                <input class="grid__formInput" type="password" name="newPassword" placeholder="New Password" value="<?php echo $newPassword; ?>" autofocus required>
                <span class="grid__errorMsg"><?php echo $confirmPasswordErr; ?></span>
                <input class="grid__formInput" type="password" name="confirmPassword" placeholder="Confirm New Password" required>
              </div>
              <div class="grid__formRow grid__formRow--full">
                <input type="submit" class="grid__formButton" value="Submit">
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