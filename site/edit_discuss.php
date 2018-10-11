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
        <link href="css/edit_discuss.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/registration.js"></script>
    </head>
    <body>
        <?php require_once ("header.php"); ?>
        <?php require_once("db_connect.php"); ?>
        <div id="main_content">
        <?php
        $note_id = $_GET["stuff"];
        ?>
        <form action="" method = "post">
            <textarea name="article" value = "dsf" id="txtarea">
                <?php
                $query = "select * from articles where mc_id = " . $note_id;
                $res = mysqli_query($link, $query);
                while($res2 = mysqli_fetch_array($res)){
                    echo $res2['article'];
                }
                $num_row = mysqli_num_rows($res);
                ?>
            </textarea>
            <input type="submit" id="sbtn" value="CHANGE">
        </form>
        </div>
        <?php
    }
?>
    </body>
</html>
<?php
$text = $_POST['article'];
if($text != ""){
    if($num_row != 0){
        $query = "UPDATE articles SET article = '$text' WHERE mc_id = $note_id";
        $run = mysqli_query($link, $query);
    }
    else{
       $query = "INSERT INTO articles(id, article, mc_id) VALUES (NULL, '$text','$note_id')";
        $run = mysqli_query($link, $query);
    }
}
?>