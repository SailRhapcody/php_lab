<?php
?>
<header>
    <ul>
        <?php
            if($_SESSION['rights'] == 'a'){ ?>
        <li>
            <a href="add_article.php" id="add_aricle">Add</a>
        </li>
        <li>
            <a href="add_user.php" id="add_user">Vis</a>
        </li>
        <?php } ?>
        
        <li>
            <a href="music.php">Music</a>
        </li>
        <li>
            <a href="#">Video</a>
        </li>
        <li>
            <a href="#">Games</a>
        </li>
        <?php
            if($_SESSION['login'] == ""){ ?>
        <li>
            <a href="reg_log_form.php" id="log_in">Login</a>
        </li>
        <?php
            }
        else{ ?>
        <li>
            <a href="logout.php" id="log_out">Log Out</a>
        </li>
        
        <?php } ?>
    </ul>
</header>
<?php ?>