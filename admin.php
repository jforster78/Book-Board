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

        <!-- Admin -->
        <section class="grid__admin">
          <h2 class="grid__subheading"><?php echo htmlspecialchars($_SESSION["username"]); ?> Report</h2>
          <p class="grid__logout">
            <a href="?" class="btn">Export</a>
          </p>
          <!-- Orders Report -->
          <table class="grid__table">
            <tr class="grid__tableRow">
              <th>Depart.</th>
              <th>Dest.</th>
              <th>Hotel</th>
              <th>Booking Date</th>
            </tr>
            <?php
              // Include admin table
              include "admin_table.php";
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