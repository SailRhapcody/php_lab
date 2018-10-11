<?php session_start(); ?>
<html>
    <head>
        <title>Default Page</title>
        <meta charset = "utf-8">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/music.css" rel="stylesheet" type="text/css">
        <link href="css/reg_log_form.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/registration.js"></script>
    </head>
    <body>
        <?php require_once ("header.php"); ?>
        <?php require_once("db_connect.php"); ?>
        <div id="main_content">
            <div id="wrapper1">
                <?php
                    $query = "SELECT * FROM music_content ORDER BY id DESC";
                    $select_music = mysqli_query($link, $query);
                    while ($music_row = mysqli_fetch_array($select_music)){
                        ?>
                        <div class="auto_wrapper">
                            <div class="img_wrapper" style = "background-image:url(<?php echo $music_row['image_link'] ?>);background-size:cover;">
                            </div>
                            <div class="nice_wrapper">
                                <div class="singer_wrapper">
                                    <?php echo $music_row['singer'] . " - " . $music_row['album']?>
                                </div>
                                <div class="discuss">
                                    <a href="discuss.php?stuff=<?php echo $music_row['id']; ?>">Discuss</a>
                                    <?php
                                        if($_SESSION['rights'] == 'a'){
                                            ?>
                                            <a href="delete.php?stuff=<?php echo $music_row['id']; ?>">Delete</a>
                                            <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <span class="none_float"></span>
                    <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>