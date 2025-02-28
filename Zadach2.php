<?php
$numbers = [];

for ($num = 2; $num <= 100; $num++) {
    $prime = true; 
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $prime = false; 
            break; 
        }
    }
    if ($prime) {
        $numbers[] = $num;
    }
}
echo "Простые числа от 1 до 100: " . implode(", ", $numbers) . "\n";
