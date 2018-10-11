<html>
    <head>
        <title>Default Page</title>
        <meta charset = "utf-8">
        <link href="css/default.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("MySiteDB.php"); ?>
        <?php require_once ("header.php"); ?>
        <article>
            <div>Welcome to the FUTURE</div>
            <div>
                <?php
                    $query = "SELECT * FROM notes ORDER BY id DESC";
                    $select_note = mysqli_query($link, $query);
                    while ($note = mysqli_fetch_array($select_note))
                    {
                        echo "<hr>" . "<br/>";
                        echo "Заметка номер : " . $note ['id'], "<br>";
                        echo "Дата создания : " . $note ['created'], "<br>";
                ?>
                        <a href="comments.php?note=<?php echo $note['id']; ?>">
                            <?php
                                $title = $note['title'];
                                if(strlen($title) != 0 ){
                                    echo "Заголовок : " . $note ['title'], "<br>";
                                }
                                else{
                                    echo "Пустой заголовок";
                                }
                            ?>
                        </a>
                        <?php
                            echo "Текст заметки : " . $note ['article'], "<br>";
                        ?>
                    <a href="add_comment.php?note=<?php echo $note['id']; ?>">Прокомментировать</a></br>
                    <?php
                    }
                    ?>
            </div>
        </article>
    </body>
</html>