<?php
session_start();
if ($_SESSION['rights']=='a')
{
?>
<?php
    require_once("MySiteDB.php");
    $note_id = $_GET["note"];
    $query = "DELETE FROM notes WHERE id = $note_id";
    $action = mysqli_query($link, $query);
    if(!$action){
        echo "Smt. wrong";
    }
    header( "refresh:5;url = default.php" );
    echo 'Your note was deleted. You\'ll be redirected in about 5 secs.If not, click <a href=" default.php">here</a>.';
}
else
{
echo "Извините, у Вас нет доступа";
echo "<a href = \"default.php\">На главную</a>";
}
?>
