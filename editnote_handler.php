<?php
        require_once("MySiteDB.php");
//Собственно обновление данных
//Получение обновленных значений из формы
$title = $_POST['title'];
$article = $_POST['article'];
$note_id = $_POST['note_id'];
//Создание запроса на обновление
$update_query = "UPDATE notes SET title = '$title', article = '$article' WHERE id = $note_id";
//Реализация запроса на обновление
$update_result = mysqli_query ($link, $update_query);
echo "Success!";
echo "<br>" . "<a href = \"default.php\">На главную</a>";

?>