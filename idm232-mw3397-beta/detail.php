<!DOCTYPE html>
<html>
  <head>
    <title>PHP Detail</title>
    <link rel="stylesheet" href="../styles/recipeStyle.css" />
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
        <p class="logo">What&#39;s cookin?</p>
      </div>
    </div>



<div id="content">
    
        <?php
          // Get all the recipes from "recipes" in the idm232 database
          $query = "SELECT * FROM `recipes` WHERE `id` = 1";
          $results = mysqli_query($db_connection, $query);

        //   if ($results->num_rows > 0 ){
        //     consoleMSg("Query Succesful! number of rows: $results->num_rows");
    if ($results->num_rows > 0) {
        consoleMSg("Query succesfful");
        while ($oneRecipe = mysqli_fetch_array($results)) {
            // Title
                echo '<div class="recipecon">';
                echo '<div class="recipeTitleIntro">';
                echo '<p class="back"> &#8592back </p>';
                echo '<div class="header">';
                echo '<h2 class="headerTitle">' . 
            $oneRecipe['Title']. ' ' . $oneRecipe['Subtitle']. '</h2>';
                echo '</div>';
                echo '</div>';    
               
                // Hero Image
                echo '<div class="recipeImgIntroCon">';
                echo '<figure class="recipeImgIntro">';
                echo '<div class="recipeImgIntroImg">';
                echo '<img class="recipeImg" src="./images/'. $oneRecipe['Main IMG'].'"/>';
                echo '</div>';
                echo '</figure>';
                echo '</div>';
                
                echo '<div class="statsCon">';
                echo '<div class="statsTableCon">';
                echo '   <div class="statsTable">';
                // cook time
                echo '<dt class="statsTitle">Cook Time</dt>';
                echo '<dd class="statsText">' . 
            $oneRecipe['Cook Time'] .' </dd>';
                echo '<dt class="statsTitle">Servings</dt>';
            //   servings
                echo '<dd class="statsText">' .
            $oneRecipe['Servings'] . '</dd>';
                echo '<dt class="statsTitle">Calories</dt>';
                // calories/serving
                echo '<dd class="statsText">' .
            $oneRecipe['Cal/Serving'] . '</dd>';
                echo '<dt class="statsTitle">Protein</dt>';
                echo '<dd class="statsText">' .  
            // protiene
                $oneRecipe['Proteine'] . '</dd>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="recipeDescriptionCon1">';
                echo '<div class="recipeDescriptionCon2">';
                echo '<div class="recipeDescription">';
                echo '<p>'
              . ' ' . 
            // description
              $oneRecipe['Description'] .
            '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
                echo '<hr class="recipeDivider" />';
               
                echo '<div class="ingredientsCon">';
                echo '<div class="ingredientsSubCon">';
                echo '<h2 class="ingredientsTitle">Ingredients</h2>';
                echo '<div class="recipeImgIntroCon">';
                echo '<figure class="recipeImgIntro">';
                echo '<div class="recipeImgIntroImg">';
                // ingredients image
                echo '<img
                  class="recipeImg ingredientsImg"
                  src="./images/'. $oneRecipe['Ingredients IMG'].'"
                />';
                echo '</div>';
                echo '</figure>';
                echo '</div>';
                // all ingredients
                $ingArray = explode("*", $oneRecipe['All Ingredients']);
                for ($lp = 0; $lp < count($ingArray); $lp++) {
                      echo '<li class="ingredientText">' . $ingArray[$lp] . '</li>';
                }
                echo '</div>';
                echo '</div>';
                
                
                echo '<hr class="recipeDivider" />';
                echo ' <div class="prepCon">';
                echo '<div>';
                echo '<h2 class="ingredientsTitle">Preparation</h2>';
                echo '<ol class="prepList">';
                echo '<li class="prepText">';
                // instructions images
                $StepImagesArray = explode("*", $oneRecipe['Step IMGs']);
                // SEE HOW HE DOES THIS
                $StepTextArray = explode("*", $oneRecipe['All Steps']);
            
                for ($lp = 0; $lp < count($StepTextArray); $lp++) {
                    // echo '<p class="stepDescriptionBody">' . $StepTextArray[$lp] . '</p>';
                    $firstchar = substr($StepTextArray[$lp], 0, 1);
                    if (is_numeric($firstchar)) {
                        echo '<div class="recipeImgIntroCon">';
                        echo '<figure class="recipeImgIntro">';
                        echo '<div class="recipeImgIntroImg">';
                        // SEE HOW HE DOES THIS
                        echo '<img class="recipeImg ingredientsImg"
                        src="./images/Ancho/' . $StepImagesArray[$firstchar-1] . '" 
                        />';
                        echo '</div>';
                        echo '</figure>';
                    }
                    echo '<div class="stepTitle"></div>';
                    echo '<div class="stepDescription">';
                    echo '<p class="stepDescriptionBody">' . $StepTextArray[$lp] . '</p>';
                    echo '</div>';
                    echo '</li>';
                }

                echo '</ol>';
                echo '</div>';
                echo '</div>';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';
                echo '';


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
        <p class="copyright">What&#39;s Cookin? © 2023</p>
      </footer>
    </div>
    </body>
    </html>