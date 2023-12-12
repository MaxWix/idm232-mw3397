<!DOCTYPE html>
<html>
  <head>
    <title>What's Cookin?</title>
    <link rel="stylesheet" href="./styles/general.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
           <a href="index.php"><p class="logo" id="logo">What&#39;s cookin?</p></a> 
        </div>
    </div>
    <div class="hero">
      <h1 class="heroText">Find a Recipe</h1>

      <form action="index.php" method="POST" class="searchBar">
            <input type="search" id="search" name="search" value="<?php echoSearchValue(); ?>">
        <button  type="submit" name="submit" value="submit">Search</button>
      </form>

    </div>
    

    <div class="container">
      <nav class="filter">
        <a href="index.php">All Recipes</a>
        <a href="index.php?filter=CHICKEN">Chicken</a>
        <a href="index.php?filter=BEEF">Beef</a>
        <a href="index.php?filter=PORK">Pork</a>
        <a href="index.php?filter=FISH">Fish</a>
        <a href="index.php?filter=VEGITARIAN">Vegetarian</a>
        <a href="index.php?filter=STEAK">Steak</a>
        <a href="index.php?filter=Turkey">Turkey</a>
      </nav>
    </div>

    <div id="content">
        
        <?php

        $search = $_POST['search'];
        consoleMSg("search string is: $search");  

        $filter = $_GET['filter'];
        consoleMsg("Filter is: $filter");

       if (!empty($search)) {
        consoleMsg("Doing a SEARCH");
        // $query = "select * FROM recipes WHERE title LIKE '%{$search}%'";
        $query = "select * FROM recipes WHERE title LIKE '%{$search}%' OR subtitle LIKE '%{$search}%'";
      } elseif (!empty($filter)) {
        consoleMsg("Doing a FILTER");
        $query = "select * FROM recipes WHERE proteine LIKE '%{$filter}%'";
      } else {
        consoleMsg("Loading ALL RECIPES");
        $query = "SELECT * FROM recipes";
      }

          // Get all the recipes from "recipes" in the idm232 database
          // $query = "SELECT * FROM recipes";
          // $results = mysqli_query($db_connection, $query);
          
          echo '<div class="gallery">';
          $results = mysqli_query($db_connection, $query);
      if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
          
          $id = $oneRecipe['id'];

            // wrap in anchor tag with id numebr
            echo '<a href="./detail.php?recID='.$id .'"> ';

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
            echo '</a>';
          }
         
           }  
          else {
          consoleMsg("QUERY ERROR");
          echo '<p class="noResults" >No results found :(</p>';
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