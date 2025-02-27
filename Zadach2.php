<?php
$Numbers = [];

for ($num = 2; $num <= 100; $num++) {
    $Prime = true; 
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $Prime = false; 
            break; 
        }
    }
    if ($Prime) {
        $Numbers[] = $num;
    }
}
echo "Простые числа от 1 до 100: " . implode(", ", $Numbers) . "\n";
?>