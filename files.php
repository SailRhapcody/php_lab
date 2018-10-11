<?php
    //$f = fopen("authors.xml", "a+");
    //echo fgets($f);
    //$array = file("authors.xml");
    //print_r($array);
    $put_cont = file_put_contents("authors.xml", "My new contents", FILE_APPEND);
    echo $put_cont;
    $get_cont = file_get_contents("authors.xml");
    echo $get_cont;
?>