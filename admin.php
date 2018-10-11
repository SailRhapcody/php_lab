<?php
session_start();
if ($_SESSION['rights']=='a')
{
echo "hello, ".$_SESSION['login'];
?><html>
    <head>
        <meta charset="urf-8">
        <title>ADMIN</title>
        <link href="css/email.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php") ?>
        
<?php
    //Подключение к серверу
    require_once ("MySiteDB.php");
    //Получение данных из формы
        //Формирование запроса
        $query = "select * from authors";
        //Реализация запроса
        $result = mysqli_query ($link, $query);
        echo "<hr>";
        while($user = mysqli_fetch_array($result)){
             echo $user['login'] . "      " . $user['password'] . "      " . $user['rights'] . "<hr>" . "<br>";
        }
?>
<form method="post" action="newuser.php">
    <input type="text" name="login">login<br><br>
    <input type="text" name= "password">password<br><br>
    <input type="text" name= "rights">rights<br><br>
    <button type="submit">Создать пользователя</button>
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