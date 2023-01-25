<?php
session_start();
if(isset($_GET['submit']) && isset($_GET['color'])) {
    $color = $_GET['color'];
    echo $color;
    $_SESSION['userColorSelect'] = $_GET['color'];

    if($color == "black") {
        echo '<body style = "background-color:black">';
    }
    elseif ($color == "yellow") {
        echo '<body style = "background-color:yellow">';
    }
    elseif ($color == "red") {
        echo '<body style = "background-color:red">';
    }
    elseif ($color == "orange") {
        echo '<body style = "background-color:orange">';
    }
    elseif ($color == "blue") {
        echo '<body style = "background-color:blue">';
    }
}

