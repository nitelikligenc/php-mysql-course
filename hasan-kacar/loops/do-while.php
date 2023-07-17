<?php

/**
 * do-while: While ile aynı işlemi yapan bir döngü yapısıdır. Tek farkı; while ilk başta kontrol eder daha sonra
 * işlemi gerçekleştirir. do-while ise önce işlemi gerçekleştirip daha sonra koşulu kontrol eder.
 */

$y = 1;
do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);