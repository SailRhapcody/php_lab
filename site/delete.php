<?php
session_start();
if ($_SESSION['rights']=='a')
{
?>
<html>
    <head>
        <title>Delete Page</title>
        <meta charset = "utf-8">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/music.css" rel="stylesheet" type="text/css">
        <link href="css/reg_log_form.css" rel="stylesheet" type="text/css">
        <link href="css/add_article.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/registration.js"></script>
    </head>
    <body>
        <?php require_once ("header.php"); ?>
        <?php require_once("db_connect.php"); ?>
        <div id="main_content">
    <?php
    $note_id = $_GET["stuff"];
    $query = "DELETE FROM music_content WHERE id = $note_id";
    $query2 = "delete from articles where mc_id = $note_id";
    $action = mysqli_query($link, $query);
    $action2 = mysqli_query($link, $query2);
    if(!$action){
        echo "Smt. wrong";
    }
    echo 'Your note was deleted. You\'ll be redirected in about 5 secs.If not, click <a href=" music.php">here</a>.';
    }
    else
    {
    echo "Извините, у Вас нет доступа";
    echo "<a href = \"music.php\">На главную</a>";
    }
    ?>
 </div>
    </body>
</html>
