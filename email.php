<?php
session_start();
if ($_SESSION['rights']=='a' || $_SESSION['rights'] == 'u')
{
echo "hello, ".$_SESSION['login'];
?><html>
    <head>
        <meta charset="urf-8">
        <title>Сообщение</title>
        <link href="css/email.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php") ?>
        <form action="sendmail.php" name="mail" method="post">
            <div id="topic_message">Тема сообщения:</div> <input name="subject" type="text" size="20" value=""><br>
            <div id="text_message">
                <div>Текст сообщения:</div>
                <textarea name="message" rows="10" cols="30" ></textarea><br></div>
            <input name="mailsend" type="submit" value="Отправить">
        </form>
        <a href="default.php">На главную страницу</a>
    </body>
</html>
<?php
}
else
{
echo "Извините, у Вас нет доступа";
echo "<a href = \"default.php\">На главную</a>";
}
?>