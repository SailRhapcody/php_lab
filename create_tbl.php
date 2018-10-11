<?php
    $link = mysqli_connect("127.0.0.1", "admin", "admin");
    if($link){
        echo "Соединение с сервером установлено";
    }
    else{
        echo "Нет соединения с сервером";
    }
    
    echo "<br/>";
    $db = "mySiteDB";
    $select = mysqli_select_db($link, $db);
    if ($select){
        echo "База успешно выбрана", "<br>";
    }
    else {
        echo "База не выбрана";
    }
    $query =  "CREATE TABLE notes (id SMALLINT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), created DATE, title VARCHAR (20), article VARCHAR (255))";
    $create_tbl = mysqli_query($link, $query);
    if($create_tbl){
        echo "Таблица <notes> создана";
    }
    else{
        echo "Создать таблицу не удалось";
    }
?>