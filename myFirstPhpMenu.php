<!DOCTYPE html>
<html>
  <head>
    <title>Static Main Menu</title>
    <link rel="stylesheet" href="general.css" />
  </head>

  <body>
    <h1>PHP Main Menu</h1>
    
    

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
          // echo "yo";
          
  

          for ($lp = 0; $lp <= 5; $lp++) {
            echo "<figure class='oneRec'>";
          echo "<img
          src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png'
          alt='FPP Chicken Rice'
          /> ";
          echo " <figcaption>"
          . $lp . " Ancho-Orange Chicken 
          </figcaption> ";

          echo "</figure> ";
          }
          

        ?>
    </div>

  </body>
</html>
