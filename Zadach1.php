<?php
$a = readline ("Введите число для вычисления факториала");
if ($a < 0) {
    echo "Факториал отрицательного числа не существует.\n";
} else {
    $factorial = 1;
    $counter = 1;
    while ($counter <= $i) {
        $factorial *= $counter;
        $counter++;
    }
    echo "Факториал числа $i равен $factorial.\n";
}
