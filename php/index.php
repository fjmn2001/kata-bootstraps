<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Medine\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($i = 1; $i <= 100; $i++) {
    echo "<p>{$i} - {$fizzBuzz($i)}</p>";
}