<?php
session_start();
unset($_SESSION['login'], $_SESSION['rights']);
session_destroy();
echo "Сессия закончена" . "<br>";
echo "<a href = \"default.php\">На главную</a>";
?>