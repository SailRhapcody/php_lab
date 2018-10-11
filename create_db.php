<?php
    $link = mysqli_connect("127.0.0.1", "root", "");
    if($link){
        echo "Соединение с сервером установлено";
    }
    else{
        echo "Нет соединения с сервером";
    }
    echo "<br/>";
    $db = "MySiteDB";
    $query = "CREATE DATABASE $db";
    $create_db = mysqli_query($link, $query);
    if($create_db){
        echo "База данных $db успешно создана";
    }
    else{
        echo "База не создана";
    }
?>