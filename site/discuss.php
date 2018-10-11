<?php session_start(); ?>
<html>
    <head>
        <title>Default Page</title>
        <meta charset = "utf-8">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/discuss.css" rel="stylesheet" type="text/css">
        <link href="css/reg_log_form.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <?php require_once ("header.php"); ?>
            <?php require_once("db_connect.php"); ?>
            <div id="main_content">
                <?php
                    if($_SESSION['login'] != "" ){?>
                    <div id="wrapper1">
                        <?php
                            $note_id = $_GET['stuff'];
                            $query = "SELECT * FROM music_content where id =" . $note_id . ";";
                            $res = mysqli_query($link, $query);
                            $res2 = mysqli_fetch_array($res);
                        ?>
                        <div id="title"><?php echo $res2['singer'] . " - " . $res2['album'] ?></div>
                        <?php
                            $quety = "select * from articles where mc_id = " . $note_id;
                            $res = mysqli_query($link, $quety);
                            while($res2 = mysqli_fetch_array($res)){
                                ?> <div class="articles"><?php echo $res2['article'] ?></div>
                                <?php
                            }
                            if($_SESSION['rights'] == 'a'){
                            ?> <a href = "edit_discuss.php?stuff=<?php echo $note_id; ?>">Edit Article</a><?php
                            }
                            ?>
                    </div>
                    
                <?php
                }
                else{
                    ?> <br><div style="font-size:30px;color:white;">YOU MUST BE LOGGED ON TO POST ANY COMMENTS!</div>
                    <br> <a href = "music.php" style="color: white;">Main page</a>
                    <?php
                }
                ?>
            </div>
    </body>
</html>