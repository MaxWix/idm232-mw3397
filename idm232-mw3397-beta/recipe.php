<!DOCTYPE html>
<html>
  <head>
    <title>PHP Main Menu</title>
    <link rel="stylesheet" href="./styles/general.css" />
  </head>

  <body>
  
  <?php
  // $msg = "howdy";
  // echo $msg;
  // echo '<script type="text/javascript">console.log("'. $msg .'")</script>';

  require_once './includes/fun.php';
  consoleMsg("PHP to JS .. is wicked fun");

  // env.php that holds global vars with secrets
  require_once './includes/env.php';
  
  // Database connection code
  require_once './includes/database.php';

?>




    <div class="head">
        <div class="navContainer">
          <p class="logo">What's cookin?</p>
        </div>
    </div>
    <div class="hero">
      <h1 class="heroText">Find a Recipe</h1>
      <form class="searchBar">
        <input type="text" name="Whats cookin?" placeholder="Search Recipes..." />
        <button type="submited">Search</button>
      </form>
    </div>
    

    <div class="container">
      <nav class="filter">
        <a href="">All Recipes</a>
        <a href="">Chicken</a>
        <a href="">Beef</a>
        <a href="">Pork</a>
        <a href="">Fish</a>
        <a href="">Vegitarian</a>
        <a href="">Steak</a>
      </nav>
    </div>

    <div id="content">
        <?php
  
        ?>
        
        <?php
          // Get all the recipes from "recipes" in the idm232 database
          $query = "SELECT * FROM recipes";
          $results = mysqli_query($db_connection, $query);
          
          echo '<div class="gallery">';
          if ($results->num_rows > 0) {
          consoleMsg("Query succesfule! number of rows: $results->num_rows");
          while ($oneRecipe = mysqli_fetch_array($results)){
            // echo '<h3>' . $oneRecipe['Title']. ' - ' . $oneRecipe['Cal/Serving']. '</h3>';
            $id = $oneRecipe['id'];
            echo '<figure class="gallery-item">';
            echo '<div class="galleryImgContain">
              <img class="gallery-image" src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">
               </div>';
            echo '<figcaption class="recipeCaption">';
            echo '<h1 class="recipeTitle">' . ' ' . 
            $oneRecipe['Title'] .  '</h1>';
            echo '<p class="recipeDescription">' . ' ' . 
            $oneRecipe['Subtitle'] .  '<p>';
            echo '</figcaption>';
            echo '</figure>';
            
          }
         
           }  
          else {
          consoleMsg("QUERY ERROR");
          }
          echo '</div>';

        ?>
    </div>


<div class="footer-basic">
      <footer>
        <!-- <div class="social">
          <a href="#"><i class="icon ion-social-instagram"></i></a
          ><a href="#"><i class="icon ion-social-snapchat"></i></a
          ><a href="#"><i class="icon ion-social-twitter"></i></a
          ><a href="#"><i class="icon ion-social-facebook"></i></a>
        </div> -->
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Recipes</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">What's Cookin? © 2023</p>
      </footer>
    </div>
  </body>
</html>


    <!-- //        {
    //       echo "<div class='featureRecipe'>
    //   <div class='featureImg'>
    //     <img class='featureImgImg' src='images/hoisinGlazed.jpg'  />
    //   </div>
    //   <div class='featureText'>
    //     <p class='rod'>Recipe of the day:</p>
    //     <h1 class='featureRecipeTitle'>Hoisin-Glazed Pork Chops</h1>
    //     <p class='featureRecipeDescription'>
    //       with delightfully chewy wonton noodles tossed in a nutty, savory suace
    //       that is a delicious accompaniment to these prok chops. For depth of
    //       flavor, we're pan-searing the pork chops, then glazing them with
    //       barbecue-like hoisin, whose sweetness perfectly matches bites of
    //       sauteed carrots in the noodles.
    //     </p>
    //   </div>
    // </div>";
    //       }
          

  

    //       for ($lp = 0; $lp <= 5; $lp++) { 
    //         echo "<div class='container'>
    //  <div class='gallery'>
    //     <figure class='gallery-item'>
    //       <div class='galleryImgContain'>
    //         <img
    //           class='gallery-image'
    //           src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png'
    //         />
    //       </div>
    //       <figcaption class='recipeCaption'>
    //         <h1 class='recipeTitle'>Ancho-Orange Chicken</h1>
    //         <p class='recipeDescription'>with Kale Rice & Roasted Carrots</p>
    //       </figcaption>
    //     </figure> 
    //     </div>
    //     </div>";
    //       } -->