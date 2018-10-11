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
            CREATE NEW USER <br>
            <form action ="" method = "post">
                LOGIN<br>
                <input type="text" name="login">
                PASS<br>
                <input type="password" name="password">
                RIGHT<br>
                <input type="text" name="rights">
                <input type="submit" value="CREATE_USER">
            </form>
        </div>
    </body>
</html>
<?php
}?>

 <?php
            $login = $_POST['login'];
            $password = $_POST['password'];
            $rights = $_POST['rights'];
            if(($login)&&($password)&&($rights))
            {
                $query = "INSERT INTO authors VALUES (NULL, '$login', '$password', '$rights')";
                mysqli_query($link, $query);
            }
?>