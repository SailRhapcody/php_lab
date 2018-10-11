<?php
    $link = mysqli_connect("127.0.0.1", "root", "");
    if($link){
        echo "Соединение с сервером установлено";
    }
    else{
        echo "Нет соединения с сервером";
    }
    echo "<br/>";
    $query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION";
    $create_user = mysqli_query($link, $query);
    if($create_user){
        echo "Пользователь создан";
    }
    else{
        echo "Создать пользователя не удалось";
    }