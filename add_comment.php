<?php
session_start();
if ($_SESSION['rights']=='a' || $_SESSION['rights'] == 'u')
{
echo "hello, ".$_SESSION['login'];
?><html>
    <head>
        <meta charset="urf-8">
        <title>Заметка</title>
        <link href="css/email.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php"); ?>
        <?php $note_id = $_GET['note']; ?>
        <div>Оставьте свой комментарий здесь</div>
        <form method="post">
            <textarea name="comment" cols="55" rows="10"></textarea>
            <input type="hidden" name = "created" value ="<?php echo date("Y-m-d");?>"/>
            <input type="submit" name="submit" value="Отправить" />
        </form>
        <a href="default.php">На главную страницу</a>
    </body>
</html>
<?php
    //Подключение к серверу
    require_once ("MySiteDB.php");
    //Получение данных из формы
    $created = $_POST['created'];
    $comment_text = $_POST['comment'];
    if (($created)&&($comment_text))
    {
        $author_id = 1;
        //Формирование запроса
        $query = "INSERT INTO comments (id, created, author_id, comment, art_id) VALUES (NULL, '$created', $author_id, '$comment_text', '$note_id')";
        //Реализация запроса
        $result = mysqli_query ($link, $query);
        if($result){
            echo "</br></br></br>Comment successfully added!";
        }
        else{
            echo "Something wrong";
        }
    }
    }
else
{
echo "Извините, у Вас нет доступа";
echo "<a href = \"default.php\">На главную</a>";
}
?>