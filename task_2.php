<?php
function removeEvenNumbers($numbers) {
    $result = array();
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    print_r($result);
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
removeEvenNumbers($numbers);