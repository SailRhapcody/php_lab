<html>
<head>
    <title>Examples</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;
    echo "a = " , $a, "; b= ", $b;
    $c = $a + $b;
    echo "<br/> c = " , $c;
    $c = $c * 3;
    echo "<br/> c * 3 ", $c;
    $c = $c/($b - $a);
    echo "<br/> c = c / (b - a) = ", $c;
    $p = "Программа";
    $b = "работает";
    $result = $p . " " . $b;
    echo "<br/> result = " . $result;
    $result .= " хорошо";
    echo "<br/> result = " . $result;
    ?>
</body>
</html>