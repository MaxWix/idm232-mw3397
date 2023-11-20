<?php
consoleMsg("fun.php file Loaded!");

// define all global vars here
global $APP_CONFIG;

function consoleMSg($msg) {
    echo '<script type="text/javascript">console.log("'. $msg .'")</script>';
}

?>