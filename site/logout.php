<?php
session_start();
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
                unset($_SESSION['login'], $_SESSION['rights']);
                session_destroy();
                echo "Сессия закончена" . "<br>";
                echo "<a href = \"music.php\">На главную</a>";
            ?>
        </div>
 </div>
    </body>
</html>