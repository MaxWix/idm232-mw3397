<?php
consoleMsg("fun.php file Loaded!");

// define all global vars here
global $APP_CONFIG;

function consoleMSg($msg) {
    echo '<script type="text/javascript">console.log("'. $msg .'")</script>';
}

function echoSearchValue(){
    // get the value of the search input field and reinsert into the value parameter
    if (isset($_POST['search'])) {
        echo $_POST['search'];
    }
}

?>