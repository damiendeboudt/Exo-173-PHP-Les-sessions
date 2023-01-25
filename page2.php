<?php
session_start();
if ( $_SESSION['userColorSelect'] === "black") {
    echo '<body style = "background-color:black">';
}
elseif ($_SESSION['userColorSelect'] === "yellow") {
        echo '<body style = "background-color:yellow">';
    }
    elseif ($_SESSION['userColorSelect'] === "red") {
        echo '<body style = "background-color:red">';
    }
    elseif ($_SESSION['userColorSelect'] === "orange") {
        echo '<body style = "background-color:orange">';
    }
    elseif ($_SESSION['userColorSelect'] === "blue") {
        echo '<body style = "background-color:blue">';
    }