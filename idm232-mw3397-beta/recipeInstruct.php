<!DOCTYPE html>
<html>
  <head>
    <title>Ancho Orange</title>
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
          $query = "SELECT * FROM `recipes` WHERE `id` = 16";
          $results = mysqli_query($db_connection, $query);
        //   if ($results->num_rows > 0 ){
        //     consoleMSg("Query Succesful! number of rows: $results->num_rows");
    if ($results->num_rows > 0) {
            consoleMSg("Query succesfful");
        while ($oneRecipe = mysqli_fetch_array($results)) {
            $id = $oneRecipe['id'];
                echo '<div class="recipecon">';
                echo '<div class="recipeTitleIntro">';
                echo '<p class="back"> &#8592back </p>';
                echo '<div class="header">';
                echo '<h2 class="headerTitle">' . ' ' . 
            $id['Title'] .  '</h2>';
                echo '</div>';
                echo '</div>';    
               
                echo '<div class="recipeImgIntroCon">';
                echo '<figure class="recipeImgIntro">';
                echo '<div class="recipeImgIntroImg">';
                echo '<img class="recipeImg" src="../images/anchoOrange.jpg" />';
                echo '</div>';
                echo '</figure>';
                echo '</div>';
                
                echo '<div class="statsCon">';
                echo '<div class="statsTableCon">';
                echo '   <div class="statsTable">';
                echo '<dt class="statsTitle">Cook Time</dt>';
                echo '<dd class="statsText">' . ' ' . 
            $id['Cook Time'] .' </dd>';
                echo '<dt class="statsTitle">Servings</dt>';
                echo '<dd class="statsText">' . ' ' . 
            $id['Servings'] . '</dd>';
                echo '<dt class="statsTitle">Calories</dt>';
                echo '<dd class="statsText">' . ' ' . 
            $id['Cal/Serving'] . '</dd>';
                echo '<dt class="statsTitle">Protein</dt>';
                echo '<dd class="statsText">' . ' ' . 
            $id['Proteine'] . '</dd>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                echo '<div class="recipeDescriptionCon1">';
                echo '<div class="recipeDescriptionCon2">';
                echo '<div class="recipeDescription">';
                echo '<p>'
              . ' ' . 
            $id['Description'] .
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
                echo '<img
                  class="recipeImg ingredientsImg"
                  src="../images/Ancho/0101_ING_FPP_large_feature.png"
                />';
                echo '</div>';
                echo '</figure>';
                echo '</div>';
                echo '<li class="ingredientText">' . ' ' . $id['All Ingredients'] . '</li>';
                echo '</div>';
                echo '</div>';
                
                
                echo '';
                echo '';
                echo '';

                

            }           
            } 
        //   }
          
        //   else {
        //   consoleMsg("QUERY ERROR");
        //   }
        //   echo '</div>';

        ?>
    </div>
    </body>
    </html>