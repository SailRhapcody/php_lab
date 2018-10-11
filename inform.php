<?php
session_start();
if ($_SESSION['rights']=='a')
{
echo "hello, ".$_SESSION['login'];
?><html>
    <head>
        <title>Inform</title>
        <meta charset="utf-8">
        <link href="css/inform.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once("header.php"); ?>
        <?php require_once("MySiteDB.php"); ?>
        <?php
             //Общее количество заметок
             $note_query = "SELECT Count(id) as allnotes FROM notes";
             $notes_response = mysqli_query($link, $note_query);
             $row_allnotes = mysqli_fetch_assoc ($notes_response);
             $allnotes_num = $row_allnotes['allnotes'];
             
             //Общее количество комментариев
             $comment_query = "SELECT Count(id) as allcomments FROM comments";
             $comment_response = mysqli_query($link, $comment_query);
             $row_allcomments = mysqli_fetch_assoc($comment_response);
             $allcomments_num = $row_allcomments['allcomments'];
             
             //Количество заметок за последний месяц
             $last_num_note_query = "select id from notes where date_format(created, '%Y%m') = date_format(now(), '%Y%m')";
             $ree = mysqli_query($link, $last_num_note_query);
             $last_num_note = mysqli_num_rows($ree);
             
             //Количество комментариев за последний месяц
             $last_num_comment_query = "select id from comments where date_format(created, '%Y%m') = date_format(now(), '%Y%m')";
             $ree2 = mysqli_query($link, $last_num_comment_query);
             $last_num_comment = mysqli_num_rows($ree2);
             
             //Последняя запись
             $last_note_id_query = "select * from notes order by created desc limit 1";
             $ree3 = mysqli_query($link, $last_note_id_query);
             $ree3_2 = mysqli_fetch_array($ree3);
             $last_note_id = $ree3_2['id'];
             
             //Самая комментируемая запись
             $max_commented_note_query = "SELECT art_id, COUNT(art_id) FROM comments GROUP BY art_id ORDER BY COUNT(art_id) DESC LIMIT 1";
             $ree4 = mysqli_query($link, $max_commented_note_query);
             $max_commented_note = mysqli_fetch_array($ree4);
             
             $max_length = 0;
             $max_id = NULL;
             $last_note = 0;
             
        ?>
        <article>
            <div>--------------------------------</div>
            <div>Полезная информация</div>
            <div>--------------------------------</div>
            <div>Сделано записей : <?php echo $allnotes_num; ?></div>
            <div>Оставлено комментариев : <?php echo $allcomments_num; ?></div>
            <div>За последний месяц я создал записей <?php echo $last_num_note ; ?></div>
            <div>За последний месяц оставлено комментариев <?php echo $last_num_comment; ?></div>
            <div>Моя последняя запись <?php echo $last_note_id; ?></div>
            <div>Самая обсуждаемая запись : <?php echo $max_commented_note['art_id'] ?></div>
            <div>
                <a href="default.php" id = "hehe">На главную страницу сайта</a>
            </div>
        </article>
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