<html>
    <head>
        <meta charset="utf-8">
        <title>Комментарии</title>
        <link href="css/comments.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once("header.php"); ?>
        <?php require_once("MySiteDB.php"); ?>
        <?php
            echo "--------------------------------------------<br/>";
            $note_id = $_GET['note'];
            $query = "SELECT title FROM notes WHERE id = $note_id";
            $select_title = mysqli_query($link, $query);
            $result_title = mysqli_fetch_array($select_title);
            echo $result_title['title'], "<br/>";
            ?>
            <div id="edit_change">
                <a href="editnote.php?note=<?php echo $note_id; ?>">Изменить заметку</a><br/>
                <a href="deletenote.php?note=<?php echo $note_id; ?>">Удалить заметку</a><br/>
            </div>
            <?php
            echo "--------------------------------------------<br/>";
            $query_comment = "SELECT * FROM comments WHERE art_id = $note_id ORDER BY id DESC";
            $select_comment = mysqli_query($link, $query_comment);
            if($select_comment){
                if(mysqli_num_rows($select_comment) == 0){
                    echo "Еще никто не оставлял комментарий";
                }
                while($comment = mysqli_fetch_array($select_comment)){
                    echo "user_ " . $comment['author_id'] . ": " . $comment['comment'] . "<br/>";
                }
            }
            else{
                echo "Что то пошло не так";
            }
        ?>
        <br/>
        <a href = "default.php">На главную страницу</a>
    </body>
</html>