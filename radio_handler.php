<?php
    $var = $_GET['MyRadio'];
    switch($var)
    {
        case "Rome":
            echo "You choose $var";
            break;
        case "Paris":
            echo "You choose $var";
            break;
        case "Moscow":
            echo "You choose $var";
            break;
        default:
            echo "Nothing was choosen";
    }
?>