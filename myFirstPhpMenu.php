<!DOCTYPE html>
<html>
  <head>
    <title>Static Main Menu</title>
    <link rel="stylesheet" href="general.css" />
  </head>

  <body>
    <h1>PHP Main Menu</h1>
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
    

    <!-- <div id="content">
      <figure class="oneRec">
        <img
          src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png"
          alt="FPP Chicken Rice"
        /> 
        <figcaption>
          Ancho-Orange Chicken 
        </figcaption>
      </figure>
     
      <figure class="oneRecOdd">
        <img
          src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png"
          alt="FPP Chicken Rice"
        /> 
        <figcaption>
          Ancho-Orange Chicken 
        </figcaption>
      </figure>

      <figure class="oneRec">
        <img
          src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png"
          alt="FPP Chicken Rice"
        /> 
        <figcaption>
          Ancho-Orange Chicken 
        </figcaption>
      </figure>
    </div> -->

    <div id="content">
        <?php
          
           {
          echo "<div class='featureRecipe'>
      <div class='featureImg'>
        <img class='featureImgImg' src='images/hoisinGlazed.jpg'  />
      </div>
      <div class='featureText'>
        <p class='rod'>Recipe of the day:</p>
        <h1 class='featureRecipeTitle'>Hoisin-Glazed Pork Chops</h1>
        <p class='featureRecipeDescription'>
          with delightfully chewy wonton noodles tossed in a nutty, savory suace
          that is a delicious accompaniment to these prok chops. For depth of
          flavor, we're pan-searing the pork chops, then glazing them with
          barbecue-like hoisin, whose sweetness perfectly matches bites of
          sauteed carrots in the noodles.
        </p>
      </div>
    </div>";
          }
          

  

          for ($lp = 0; $lp <= 5; $lp++) {
            echo "<div class='container'>
     <div class='gallery'>
        <figure class='gallery-item'>
          <div class='galleryImgContain'>
            <img
              class='gallery-image'
              src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png'
            />
          </div>
          <figcaption class='recipeCaption'>
            <h1 class='recipeTitle'>Ancho-Orange Chicken</h1>
            <p class='recipeDescription'>with Kale Rice & Roasted Carrots</p>
          </figcaption>
        </figure> 
        </div>
        </div>";
          }
          

        ?>
    </div>

  </body>
</html>
