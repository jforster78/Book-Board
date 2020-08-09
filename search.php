<?php
// Include config file
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

        <!-- Search Form -->
        <section class="grid__form">
          <h2 class="grid__subheading">Search for your next Holiday</h2>
          <form class="grid__formWrapper grid__formWrapper--search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset class="grid__formFieldset grid__formFieldset--search"> 
              <legend class="grid__formLegend"></legend>
              <div class="grid__formRow grid__formRow--search">
                <input class="grid__formInput" type="text" name="departure" placeholder="Depart from...">
                <input class="grid__formInput" type="text" name="destination" placeholder="Destination">
                <input class="grid__formInput" type="text" name="hotel" placeholder="Hotel">
                <input class="grid__formButton grid__formButton--search" type="submit" name="submit" value="Go">
              </div>
            </fieldset>
          </form>
          <!-- Search Result -->
          <table class="grid__table grid__table--search">
            <tr class="grid__tableRow">
              <th>Ref.</th>
              <th>Depart.</th>
              <th>Dest.</th>
              <th>Hotel</th>
            </tr>
            <?php
              include "search_table.php";
            ?>
          </table>   
        </section>

      </div>
    </main>

<?php
// Include footer file
include "footer.php";
?>
