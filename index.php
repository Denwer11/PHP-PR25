<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ПР25</title>
</head>

<body>
    <h1>1 ЗАДАНИЕ</h1>
    <?php
    $int = 5;
    $int++;
    echo $int;
    ?>

    <h1>2 ЗАДАНИЕ</h1>
    <?php
    $name = "Даша";
    $age = 17;
    echo "Меня зовут $name; <br> Мне $age лет."
    ?>

    <h1>3 ЗАДАНИЕ</h1>
    <?php
    $age = 20;
    if ($age > 18 && $age < 60) {
        echo "Вы еще работаете";
    } elseif ($age > 60) {
        echo "Вы уже на пенсии";
    } else if ($age >= 1 && $age <= 17) {
        echo "Вы учитесь";
    } else {
        echo "Неизвестно";
    }
    ?>

    <h1>4 ЗАДАНИЕ</h1>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>

    <h1>5 ЗАДАНИЕ</h1>
    <?php
    $num = 1000;
    $i = 0;
    while ($num >= 50) {
        $num /= 2;
        $i++;
    }
    echo "Результат деления: {$num}<br>\n";
    echo "Количество итераций: {$i}<br>\n";
    ?>

    <h1>6 ЗАДАНИЕ</h1>
    <table border="1">
        <?php
        $rows = 10;
        $cols = 10;
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                if ($tr == 1) {
                    echo "<th style='background-color:yellow; font-weight:900'>",
                    $tr * $td, "</th>";
                } else {
                    echo "<td>", $tr * $td, "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h1>7 ЗАДАНИЕ</h1>
    <?php
    $ch = 1234;
    $a = $ch % 10;
    $b = $ch / 1000;
    $c = ($ch % 100) / 10;
    $d = ($ch % 1000) / 100;
    $sum = (int)($a + $b + $c + $d);
    echo $sum;
    ?>
</body>

</html>