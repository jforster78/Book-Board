<?php
// Include session file
include "session.php";
// Include DB file
require_once "dbConn.php";
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

        <!-- Profile -->
        <section class="grid__profile">
          <h2 class="grid__subheading">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>

          <!-- Personal Information -->
          <div class="grid__personal">
            <h3 class="grid__subheading">Personal Inforamtion</h3>
            <?php
              if(isset($_GET["update"]) == "true"){
                // If the customer has updated their details, display this message
                echo "<span class='grid__successMsg'>Details have been updated</span>"."<br />"; 
              };
            ?>
            <?php
              // Include profile info file
              include "profile_info.php";
            ?>
            <br />
            <!-- Edit -->
            <p class="grid__formRow grid__formRow--margin"><a class="grid__links" href="edit.php">Edit Profile</a></p>
            <!-- Reset Passowrd -->
            <p class="grid__formRow grid__formRow--margin"><a class="grid__links" href="reset.php">Reset Password</a></p>
            <!-- Delete Account -->
            <p class="grid__formRow grid__formRow--margin"><a class="grid__links" href="delete.php">Delete Account</a></p>
          </div>

          <!-- Booking History -->
          <h3 class="grid__subheading">Booking History</h3>
          <table class="grid__table">
            <tr class="grid__tableRow">              
              <th>Depart.</th>
              <th>Dest.</th>
              <th>Hotel</th>
              <th>Booking Date</th>
            </tr>
            <?php
              //Include profile table file
              include "profile_table.php";
            ?>
          </table>

          <!-- Logout-->
          <p class="grid__logout">
            <a href="logout.php" class="btn">Logout</a>
          </p>
        </section>

      </div>
    </main>

<?php
// Include footer file
include "footer.php";
?>