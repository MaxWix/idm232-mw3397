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
                        src="./images/' . $StepImagesArray[$firstchar-1] . '" 
                        />';
                        echo '</div>';
                        echo '</figure>';
                    }
                    echo '<div class="stepDescription">';
                    echo '<p class="stepDescriptionBody">' . $StepTextArray[$lp] . '</p>';
                    echo '</div>';
                    
                    echo '</li>';
                }

                echo '</ol>';
                echo '</div>';
                echo '</div>';