<?php
session_start();
if ($_SESSION['rights']=='a')
{
echo "hello, ".$_SESSION['login'];
?>
html>
    <head>
        <meta charset="utf-8">
        <title>Комментарии</title>
        <link href="css/comments.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once("header.php"); ?>
        <?php require_once("MySiteDB.php"); ?>
        <?php
            $note_id = $_GET['note'];
            $query = "SELECT * FROM notes WHERE id = $note_id";
            $mysqli_response = mysqli_query($link, $query);
            $data_arr = mysqli_fetch_array($mysqli_response);
        ?>
        <form method="POST" action="editnote_handler.php">
            <input type="text" name="title" value = "<?php echo $data_arr['title'] ?>"><br/></br>
            <textarea name="article"><?php echo $data_arr['article'] ?></textarea>
            <input type="hidden" name = "note_id" value ="<?php echo $note_id ?>"/>
            <input type="submit" name="submit" value="Изменить" />
        </form>
        
        <a href = "default.php">На главную страницу</a>
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