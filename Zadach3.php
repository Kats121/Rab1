<?php
echo "Таблица умножения от 1 до 10:\n";
for ($a = 1; $a <= 10; $a++) {
    for ($b = 1; $b <= 10; $b++) {
        $result = $a * $b;
        echo "$a * $b = $result\n";
    }
    echo "\n";
}
?>