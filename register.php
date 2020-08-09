<?php
// Include register validation file
include "register_validation.php";
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

        <!-- Register Form -->
        <section class="grid__form">
          <h2 class="grid__subheading">Register</h2>
            <form class="grid__formWrapper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <fieldset class="grid__formFieldset"> 
                <legend class="grid__formLegend">Create an account</legend> 
                <?php
                  if(isset($_GET["delete"]) == "true"){
                    // If the customer deletes their account, display this message
                    echo "<span class='grid__successMsg'>Your account has been deleted.</span>"."<br />"; 
                  };
                ?>   
                <br />
                <div class="grid__formRow">                   
                  <span class="grid__errorMsg"><?php echo $usernameError; ?></span>
                  <input class="grid__formInput" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" autofocus required>
                  <span class="grid__errorMsg"><?php echo $passwordError; ?></span>
                  <input class="grid__formInput" type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                  <span class="grid__errorMsg"><?php echo $confirmPasswordError; ?></span>
                  <input class="grid__formInput" type="password" name="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword; ?>">
                </div>
                <div class="formRow grid__formRow--full">
                  <input class="grid__formButton" type="submit" value="Submit">
                </div>
                <p class="grid__formRow grid__formRow--full">Already have an account? <a class="grid__links" href="login.php">Login here</a>.</p>
              </fieldset>
            </form>
        </section>
      </div>
    </main>
        
<?php
// Include footer file
include "footer.php";
?>