<html>
    <head>
        <meta charset="urf-8">
        <title>Заметка</title>
        <link href="css/email.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once ("header.php") ?>
        <div>Ввод строки для поиска</div>
        <form method="get" action="search_handler.php">
            <textarea name="usersearch" cols="55" rows="10"></textarea>
            <input type="submit" name="submit" value="Отправить" />
        </form>
    </body>
</html>
