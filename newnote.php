<?php
session_start();
if ($_SESSION['rights']=='a')
{
echo "hello, ".$_SESSION['login'];
?><html>
    <head>
        <meta charset="urf-8">
        <title>Заметка</title>
        <link href="css/email.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php") ?>
        <div>Оставьте свою заметку здесь</div>
        <form method="post">
            <input type="text" name="title" size = "20" maxlength="20" />
            <textarea name="article" cols="55" rows="10"></textarea>
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
    $title = $_POST['title'];
    $created = $_POST['created'];
    $article = $_POST['article'];
    if (($title)&&($created)&&($article))
    {
        //Формирование запроса
        $query = "INSERT INTO notes (id, created, title, article) VALUES (NULL, '$created', '$title', '$article')";
        //Реализация запроса
        $result = mysqli_query ($link, $query);
    }
}
else
{
    echo "Извините, у Вас нет доступа";
    echo "<a href = \"default.php\">На главную</a>";
}
?>