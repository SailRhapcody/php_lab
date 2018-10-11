<html>
    <head>
        <meta charset="utf-8">
        <title>Сообщение</title>
        <link href="css/radio.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php") ?>
        <form action="radio_handler.php" method = "GET" enctype = "multipart/form-data">
            <p> Выберите Ваш любимый город: </p><br />
            <p><input type = "radio" name = "MyRadio" value = "Rome" checked="checked">Рим</p>
            <p><input type = "radio" name = "MyRadio" value = "Paris">Париж</p>
            <p><input type = "radio" name = "MyRadio" value = "Moscow">Москва</p>
            <p><input type = "submit" name = "submit" value = “Отправить” />
        </form>
        <form method = "GET" enctype = "multipart/form-data">
            <p> Выберите Ваши любимые города: </p><br />
            <p><input type = "checkbox" name = "MyCheckBox[]"
            value = "Rome">Рим</p>
            <p><input type = "checkbox" name = "MyCheckBox[]"
            value = "Paris">Париж</p>
            <p><input type = "checkbox" name = "MyCheckBox[]"
            value = "Moscow">Москва</p>
            <p><input type = "submit" name = "submit" value = “Отправить”/>
        </form>
    </body>
</html>
<?php
    $arr = $_GET['MyCheckBox'];
    if(empty($arr))
    {
        echo "Вы не выбрали ни один вариант";
    }
    else
    {
        $count = count($arr);
        echo "Вы выбрали:"."<br />";
        for($i=0; $i<$count; $i++)
        {
            echo $arr[$i]."<br />";
        }
    }
?>